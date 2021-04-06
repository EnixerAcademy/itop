<?php
// Copyright (C) 2015-2017 Combodo SARL
//
//   This file is part of Enixer help desk.
//
//   Enixer help desk is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   Enixer help desk is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with Enixer help desk. If not, see <http://www.gnu.org/licenses/>
/**
 * Data structures (i.e. PHP classes) to manage "graphs"
 *
 * @copyright   Copyright (C) 2015-2017 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 * 
 * Example:
 * require_once('../approot.inc.php');
 * require_once(APPROOT.'application/startup.inc.php');
 * require_once(APPROOT.'core/simplegraph.class.inc.php');
 * 
 * $oGraph = new SimpleGraph();
 * 
 * $oNode1 = new GraphNode($oGraph, 'Source1');
 * $oNode2 = new GraphNode($oGraph, 'Sink');
 * $oEdge1 = new GraphEdge($oGraph, 'flow1', $oNode1, $oNode2);
 * $oNode3 = new GraphNode($oGraph, 'Source2');
 * $oEdge2 = new GraphEdge($oGraph, 'flow2', $oNode3, $oNode2);
 * $oEdge2 = new GraphEdge($oGraph, 'flow3', $oNode2, $oNode3);
 * $oEdge2 = new GraphEdge($oGraph, 'flow4', $oNode1, $oNode3);
 * 
 * echo $oGraph->DumpAsHtmlImage(); // requires graphviz
 * echo $oGraph->DumpAsHtmlText();
 */

/**
 * Exceptions generated by the SimpleGraph class
 */
class SimpleGraphException extends Exception
{
	
}

/**
 * The parent class of all elements which can be part of a SimpleGraph
 */
class GraphElement
{
	protected $sId;
	protected $aProperties;
	
	/**
	 * Constructor
	 * @param string $sId The identifier of the object in the graph
	 */
	public function __construct($sId)
	{
		$this->sId = $sId;
		$this->aProperties = array();
	}
	
	/**
	 * Get the identifier of the object in the graph
	 * @return string
	 */
	public function GetId()
	{
		return $this->sId;
	}
	
	/**
	 * Get the value of the given named property for the object
	 * @param string $sPropName The name of the property to get
	 * @param mixed $defaultValue The default value to return if the property does not exist
	 * @return mixed
	 */
	public function GetProperty($sPropName, $defaultValue = null)
	{
		return array_key_exists($sPropName, $this->aProperties) ? $this->aProperties[$sPropName] : $defaultValue;
	}

	/**
	 * Set the value of a named property for the object
	 * @param string $sPropName The name of the property to set
	 * @param mixed $value
	 * @return void
	 */
	public function SetProperty($sPropName, $value)
	{
		$this->aProperties[$sPropName] = $value;
	}
	
	/**
	 * Get all the known properties of the object
	 * @return Ambigous <multitype:, mixed>
	 */
	public function GetProperties()
	{
		return $this->aProperties;
	}
}

/**
 * A Node inside a SimpleGraph
 */
class GraphNode extends GraphElement
{
	protected $aIncomingEdges;
	protected $aOutgoingEdges;
	
	/**
	 * Create a new node inside a graph
	 * @param SimpleGraph $oGraph
	 * @param string $sId The unique identifier of this node inside the graph
	 */
	public function __construct(SimpleGraph $oGraph, $sId)
	{
		parent::__construct($sId);
		$this->aIncomingEdges = array();
		$this->aOutgoingEdges = array();
		$oGraph->_AddNode($this);
	}
	
	public function GetDotAttributes($bNoLabel = false)
	{
		$sDot = '';
		if (!$bNoLabel)
		{
			$sLabel = addslashes($this->GetProperty('label', $this->GetId()));
			$sDot = 'label="'.$sLabel.'"';
		}
		return $sDot;
	}

	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 */
	public function _AddIncomingEdge(GraphEdge $oEdge)
	{
		$this->aIncomingEdges[$oEdge->GetId()] = $oEdge;
	}

	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 */
	public function _AddOutgoingEdge(GraphEdge $oEdge)
	{
		$this->aOutgoingEdges[$oEdge->GetId()] = $oEdge;
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 */
	public function _RemoveIncomingEdge(GraphEdge $oEdge)
	{
		unset($this->aIncomingEdges[$oEdge->GetId()]);
	}

	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 */
	public function _RemoveOutgoingEdge(GraphEdge $oEdge)
	{
		unset($this->aOutgoingEdges[$oEdge->GetId()]);
	}
	
	/**
	 * Get the list of  all incoming edges on the current node
	 * @return Ambigous <multitype:, GraphEdge>
	 */
	public function GetIncomingEdges()
	{
		return $this->aIncomingEdges;
	}
	
	/**
	 * Get the list of  all outgoing edges from the current node
	 * @return Ambigous <multitype:, GraphEdge>
	 */
	public function GetOutgoingEdges()
	{
		return $this->aOutgoingEdges;
	}
	
	/**
	 * Flood fill the chart with the given value for the specified property
	 * @param string $sPropName The name of the property to set
	 * @param mixed $value Teh value to set in the property
	 * @param bool $bFloodDown Whether or not to fill in the downstream direction
	 * @param bool $bFloodUp Whether or not to fill in the upstream direction
	 */
	public function FloodProperty($sPropName, $value, $bFloodDown, $bFloodUp)
	{
		if ($this->GetProperty($sPropName, null) == null)
		{
			// Property not already set, let's do it
			$this->SetProperty($sPropName, $value);
			if ($bFloodDown)
			{
				foreach($this->GetOutgoingEdges() as $oEdge)
				{
					$oEdge->SetProperty($sPropName, $value);
					$oEdge->GetSinkNode()->FloodProperty($sPropName, $value, $bFloodDown, $bFloodUp);
				}
			}
			if ($bFloodUp)
			{
				foreach($this->GetIncomingEdges() as $oEdge)
				{
					$oEdge->SetProperty($sPropName, $value);
					$oEdge->GetSourceNode()->FloodProperty($sPropName, $value, $bFloodDown, $bFloodUp);
				}
			}
		}
	}
	
}

/**
 * A directed Edge inside a SimpleGraph
 */
class GraphEdge extends GraphElement
{
	protected $oSourceNode;
	protected $oSinkNode;

	/**
	 * Create a new directed edge inside the given graph
	 * @param SimpleGraph $oGraph
	 * @param string $sId The unique identifier of this edge in the graph
	 * @param GraphNode $oSourceNode
	 * @param GraphNode $oSinkNode
	 * @param bool $bMustBeUnique
	 * @throws SimpleGraphException
	 */
	public function __construct(SimpleGraph $oGraph, $sId, GraphNode $oSourceNode, GraphNode $oSinkNode, $bMustBeUnique = false)
	{
		parent::__construct($sId);
		$this->oSourceNode = $oSourceNode;
		$this->oSinkNode = $oSinkNode;
		$oGraph->_AddEdge($this, $bMustBeUnique);
	}

	/**
	 * Get the "source" node for this edge
	 * @return GraphNode
	 */
	public function GetSourceNode()
	{
		return $this->oSourceNode;
	}
	
	/**
	 * Get the "sink" node for this edge
	 * @return GraphNode
	 */
	public function GetSinkNode()
	{
		return $this->oSinkNode;
	}

	public function GetDotAttributes($bNoLabel = false)
	{
		$sDot = '';
		if (!$bNoLabel)
		{
			$sLabel = addslashes($this->GetProperty('label', ''));
			$sDot = 'label="'.$sLabel.'"';
		}
		return $sDot;
	}
}

/**
 * The main container for a graph: SimpleGraph
 */
class SimpleGraph
{
	protected $aNodes;
	protected $aEdges;
	
	/**
	 * Creates a new empty graph
	 */
	public function __construct()
	{
		$this->aNodes = array();
		$this->aEdges = array();
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @return Ambigous <multitype:, GraphNode>
	 */
	public function _GetNodes()
	{
		return $this->aNodes;
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @return Ambigous <multitype:, GraphNode>
	 */
	public function _GetEdges()
	{
		return $this->aEdges;
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @return Ambigous <multitype:, GraphNode>
	 */
	public function _AddNode(GraphNode $oNode)
	{
		if (array_key_exists($oNode->GetId(), $this->aNodes)) throw new SimpleGraphException('Cannot add node (id='.$oNode->GetId().') to the graph. A node with the same id already exists in the graph.');
		
		$this->aNodes[$oNode->GetId()] = $oNode;
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @return Ambigous <multitype:, GraphNode>
	 */
	public function _RemoveNode(GraphNode $oNode)
	{
		if (!array_key_exists($oNode->GetId(), $this->aNodes)) throw new SimpleGraphException('Cannot remove the node (id='.$oNode->GetId().') from the graph. The node was not found in the graph.');
		
		foreach($oNode->GetOutgoingEdges() as $oEdge)
		{
			$this->_RemoveEdge($oEdge);
		}
		foreach($oNode->GetIncomingEdges() as $oEdge)
		{
			$this->_RemoveEdge($oEdge);
		}
		unset($this->aNodes[$oNode->GetId()]);
	}

	/**
	 * Removes the given node but preserves the connectivity of the graph
	 * all "source" nodes are connected to all "sink" nodes
	 * @param GraphNode $oNode
	 * @param bool $bAllowLoopingEdge
	 * @throws SimpleGraphException
	 */
	public function FilterNode(GraphNode $oNode, $bAllowLoopingEdge = false)
	{
		if (!array_key_exists($oNode->GetId(), $this->aNodes)) throw new SimpleGraphException('Cannot filter the node (id='.$oNode->GetId().') from the graph. The node was not found in the graph.');
		
		$aSourceNodes = array();
		$aSinkNodes = array();
		foreach($oNode->GetOutgoingEdges() as $oEdge)
		{
			$sSinkId =  $oEdge->GetSinkNode()->GetId();
			if ($sSinkId != $oNode->GetId())
			{
				$aSinkNodes[$sSinkId] = $oEdge->GetSinkNode();
			}
			$this->_RemoveEdge($oEdge);
		}
		foreach($oNode->GetIncomingEdges() as $oEdge)
		{
			$sSourceId =  $oEdge->GetSourceNode()->GetId();
			if ($sSourceId != $oNode->GetId())
			{
				$aSourceNodes[$sSourceId] = $oEdge->GetSourceNode();
			}
			$this->_RemoveEdge($oEdge);
		}
		unset($this->aNodes[$oNode->GetId()]);

		foreach($aSourceNodes as $sSourceId => $oSourceNode)
		{
			foreach($aSinkNodes as $sSinkId => $oSinkNode)
			{
				if ($bAllowLoopingEdge || ($oSourceNode->GetId() != $oSinkNode->GetId()))
				{
					$oEdge = new RelationEdge($this, $oSourceNode, $oSinkNode);
				}
			}
		}
	}
	
	/**
	 * Get the node identified by $sId or null if not found
	 * @param string $sId
	 * @return NULL | GraphNode
	 */
	public function GetNode($sId)
	{
		return array_key_exists($sId, $this->aNodes) ? $this->aNodes[$sId] : null; 
	}

	/**
	 * Determine if the id already exists in amongst the existing nodes
	 * @param string $sId
	 * @return boolean
	 */
	public function HasNode($sId)
	{
		return array_key_exists($sId, $this->aNodes); 
	}

	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 * @param bool $bMustBeUnique
	 * @throws SimpleGraphException
	 */
	public function _AddEdge(GraphEdge $oEdge, $bMustBeUnique = false)
	{
		if (array_key_exists($oEdge->GetId(), $this->aEdges))
		{
			if ($bMustBeUnique)
			{
				throw new SimpleGraphException('Cannot add edge (id=' . $oEdge->GetId() . ') to the graph. An edge with the same id already exists in the graph.');
			}
			else
			{
				return;
			}
		}
		
		$this->aEdges[$oEdge->GetId()] = $oEdge;
		$oEdge->GetSourceNode()->_AddOutgoingEdge($oEdge);
		$oEdge->GetSinkNode()->_AddIncomingEdge($oEdge);
	}
	
	/**
	 * INTERNAL USE ONLY
	 * @param GraphEdge $oEdge
	 * @throws SimpleGraphException
	 */
	public function _RemoveEdge(GraphEdge $oEdge)
	{
		if (!array_key_exists($oEdge->GetId(), $this->aEdges)) throw new SimpleGraphException('Cannot remove edge (id='.$oEdge->GetId().') from the graph. The edge was not found.');
		
		$oEdge->GetSourceNode()->_RemoveOutgoingEdge($oEdge);
		$oEdge->GetSinkNode()->_RemoveIncomingEdge($oEdge);
		
		unset($this->aEdges[$oEdge->GetId()]);
	}
	
	/**
	 * Get the edge indentified by $sId or null if not found
	 * @param string $sId
	 * @return NULL | GraphEdge
	 */
	public function GetEdge($sId)
	{
		return array_key_exists($sId, $this->aEdges) ? $this->aEdges[$sId] : null;
	}
	
	/**
	 * Determine if the id already exists in amongst the existing edges
	 * @param string $sId
	 * @return boolean
	 */
	public function HasEdge($sId)
	{
		return array_key_exists($sId, $this->aEdges); 
	}

	/**
	 * Get the description of the graph as a text string in the graphviz 'dot' language
	 * @param $bNoLabel bool Whether or not to include the labels in the dot file
	 * @return string
	 */
	public function GetDotDescription($bNoLabel = false)
	{
		$sDot =
<<<EOF
digraph finite_state_machine {
graph [bgcolor = "transparent"];
rankdir=LR;
size="30,30";
fontsize=8.0;
node [ fontname=Verdana style=filled fillcolor="#ffffcc" fontsize=8.0 ];
edge [ fontname=Verdana ];

EOF
		;

		$oIterator = new RelationTypeIterator($this, 'Node');
		
		foreach($oIterator as $key => $oNode)
		{
			$sDot .= "\t\"".$oNode->GetId()."\" [ ".$oNode->GetDotAttributes($bNoLabel)." ];\n";
			if (count($oNode->GetOutgoingEdges()) > 0)
			{
				foreach($oNode->GetOutgoingEdges() as $oEdge)
				{
					$sDot .= "\t\"".$oNode->GetId()."\" -> \"".$oEdge->GetSinkNode()->GetId()."\" [ ".$oEdge->GetDotAttributes($bNoLabel)." ];\n";
				}
			}
		}
		
		$sDot .= "}\n";
		return $sDot;		
	}
	
	/**
	 * Get the description of the graph as an embedded PNG image (using a data: url) as
	 * generated by graphviz (requires graphviz to be installed on the machine and the path to
	 * dot/dot.exe to be configured in the Enixer help desk configuration file)
	 * Note: the function creates temporary files in APPROOT/data/tmp
	 * @return string
	 */
	public function DumpAsHtmlImage()
	{
		$sDotExecutable = MetaModel::GetConfig()->Get('graphviz_path');
		if (file_exists($sDotExecutable))
		{
			// create the file with Graphviz
			if (!is_dir(APPROOT."data"))
			{
				@mkdir(APPROOT."data");
			}
			if (!is_dir(APPROOT."data/tmp"))
			{
				@mkdir(APPROOT."data/tmp");
			}
			$sImageFilePath = tempnam(APPROOT."data/tmp", 'png-');
			$sDotDescription = $this->GetDotDescription();
			$sDotFilePath = tempnam(APPROOT."data/tmp", 'dot-');
		
			$rFile = @fopen($sDotFilePath, "w");
			@fwrite($rFile, $sDotDescription);
			@fclose($rFile);
			$aOutput = array();
			$CommandLine = "\"$sDotExecutable\" -v -Tpng < \"$sDotFilePath\" -o\"$sImageFilePath\" 2>&1";
		
			exec($CommandLine, $aOutput, $iRetCode);
			if ($iRetCode != 0)
			{
				$sHtml = '';
				$sHtml .= "<p><b>Error:</b></p>";
				$sHtml .= "<p>The command: <pre>$CommandLine</pre> returned $iRetCode</p>";
				$sHtml .= "<p>The output of the command is:<pre>\n".implode("\n", $aOutput)."</pre></p>";
				$sHtml .= "<hr>";
				$sHtml .= "<p>Content of the '".basename($sDotFilePath)."' file:<pre>\n$sDotDescription</pre>";
			}
			else
			{
				$sHtml = '<img src="data:image/png;base64,'.base64_encode(file_get_contents($sImageFilePath)).'">';
				@unlink($sImageFilePath);
			}
			@unlink($sDotFilePath);
		}
		else
		{
			throw new Exception('graphviz not found (executable path: '.$sDotExecutable.')');
		}
		return $sHtml;
	}
	
	/**
	 * Get the description of the graph as text string in the XDot format
	 * including the positions of the nodes and egdes (requires graphviz
	 * to be installed on the machine and the path to dot/dot.exe to be
	 * configured in the Enixer help desk configuration file)
	 * Note: the function creates temporary files in APPROOT/data/tmp
	 * @return string
	 */
	public function DumpAsXDot()
	{
		$sDotExecutable = MetaModel::GetConfig()->Get('graphviz_path');
		if (file_exists($sDotExecutable))
		{
			// create the file with Graphviz
			if (!is_dir(APPROOT."data"))
			{
				@mkdir(APPROOT."data");
			}
			if (!is_dir(APPROOT."data/tmp"))
			{
				@mkdir(APPROOT."data/tmp");
			}
			$sXdotFilePath = tempnam(APPROOT."data/tmp", 'xdot-');
			$sDotDescription = $this->GetDotDescription(true); // true => don't put (localized) labels in the file, since it makes it harder to parse
			$sDotFilePath = tempnam(APPROOT."data/tmp", 'dot-');
	
			$rFile = @fopen($sDotFilePath, "w");
			@fwrite($rFile, $sDotDescription);
			@fclose($rFile);
			$aOutput = array();
			$CommandLine = "\"$sDotExecutable\" -v -Tdot < \"$sDotFilePath\" -o\"$sXdotFilePath\" 2>&1";
	
			exec($CommandLine, $aOutput, $iRetCode);
			if ($iRetCode != 0)
			{
				$sHtml = '';
				$sHtml .= "<p><b>Error:</b></p>";
				$sHtml .= "<p>The command: <pre>$CommandLine</pre> returned $iRetCode</p>";
				$sHtml .= "<p>The output of the command is:<pre>\n".implode("\n", $aOutput)."</pre></p>";
				IssueLog::Error($sHtml);
			}
			else
			{
				$sHtml = '<pre>'.file_get_contents($sXdotFilePath).'</pre>';
				@unlink($sXdotFilePath);
			}
			@unlink($sDotFilePath);
		}
		else
		{
			throw new Exception('graphviz not found (executable path: '.$sDotExecutable.')');
		}
		return $sHtml;
	}
	
	
	/**
	 * Get the description of the graph as some HTML text
	 * @return string
	 */
	public function DumpAsHTMLText()
	{
		$sHtml = '';
		$oIterator = new RelationTypeIterator($this);
		
		foreach($oIterator as $key => $oElement)
		{
			$sHtml .= "<p>$key: ".get_class($oElement)."::".$oElement->GetId()."</p>";
		
			switch(get_class($oElement))
			{
				case 'GraphNode':
					if (count($oElement->GetIncomingEdges()) > 0)
					{
						$sHtml .= "<ul>Incoming edges:\n";
						foreach($oElement->GetIncomingEdges() as $oEdge)
						{
							$sHtml .= "<li>From: ".$oEdge->GetSourceNode()->GetId()."</li>\n";
						}
						$sHtml .= "</ul>\n";
					}
					if (count($oElement->GetOutgoingEdges()) > 0)
					{
						$sHtml .= "<ul>Outgoing edges:\n";
						foreach($oElement->GetOutgoingEdges() as $oEdge)
						{
							$sHtml .= "<li>To: ".$oEdge->GetSinkNode()->GetId()."</li>\n";
						}
						$sHtml .= "</ul>\n";
					}
					break;
		
				case 'GraphEdge':
					$sHtml .= "<p>From: ".$oElement->GetSourceNode()->GetId().", to:".$oElement->GetSinkNode()->GetId()."</p>\n";
					break;
			}
		}
		return $sHtml;		
	}
	
	/**
	 * Split the graph in a array of non connected subgraphs
	 * @return multitype:SimpleGraph unknown
	 */
	public function GetSubgraphs()
	{
		$iNbColors = 0;
		$aResult = array();
		$oIterator = new RelationTypeIterator($this, 'Node');
		foreach($oIterator as $oNode)
		{
			$iPrevColor = $oNode->GetProperty('color', null);
			
			if ($iPrevColor == null)
			{
				$iNbColors++; // Start a new color
				$oNode->FloodProperty('color', $iNbColors, true, true);
			}
		}
		if ($iNbColors == 1)
		{
			// Everything is connected together, only one subgraph
			$aResult[] = $this;
		}
		else
		{
			// Let's reconstruct each separate graph
			$sClass = get_class($this);
			for($i = 1; $i <= $iNbColors; $i++)
			{
				$aResult[$i] = new $sClass();
			}
			
			foreach($oIterator as $oNode)
			{
				$iNodeColor = $oNode->GetProperty('color');
				$aResult[$iNodeColor]->_AddNode($oNode);
			}
			
			$oIter2 = new RelationTypeIterator($this, 'Edge');
			foreach($oIter2 as $oEdge)
			{
				$iEdgeColor = $oEdge->GetProperty('color');
				$aResult[$iEdgeColor]->_AddEdge($oEdge);
			}
		}
		return $aResult;	
	}
	
	/**
	 * Merge back two subgraphs into one
	 * @param SimpleGraph $oGraph
	 */
	public function Merge(SimpleGraph $oGraph)
	{
		$oIter1 = new RelationTypeIterator($oGraph, 'Node');
		foreach($oIter1 as $oNode)
		{
			$this->_AddNode($oNode);
		}
		$oIter2 = new RelationTypeIterator($oGraph, 'Edge');
		foreach($oIter2 as $oEdge)
		{
			$this->_AddEdge($oEdge);
		}
	}
}

/**
 * A simple iterator to "browse" the whole content of a graph,
 * either for only a given type of elements (Node | Edge) or for every type.
 */
class RelationTypeIterator implements Iterator
{
	protected $iCurrentIdx;
	protected $aList;
	
	/**
	 * Constructor
	 * @param SimpleGraph $oGraph The graph to browse
	 * @param string $sType "Node", "Edge" or null
	 */
	public function __construct(SimpleGraph $oGraph, $sType = null)
	{
		$this->iCurrentIdx = -1;
		$this->aList = array();
		
		switch($sType)
		{
			case 'Node':
			foreach($oGraph->_GetNodes() as $oNode) $this->aList[] = $oNode;
			break;
			
			case 'Edge':
			foreach($oGraph->_GetEdges() as $oEdge) $this->aList[] = $oEdge;
			break;
			
			default:
			foreach($oGraph->_GetNodes() as $oNode) $this->aList[] = $oNode;
			foreach($oGraph->_GetEdges() as $oEdge) $this->aList[] = $oEdge;				
		}
	}
	
	public function rewind()
	{
		$this->iCurrentIdx = 0;
	}
	
	public function valid()
	{
		return array_key_exists($this->iCurrentIdx, $this->aList);
	}
	
	public function next()
	{
		$this->iCurrentIdx++;
	}
	
	public function current()
	{
		return $this->aList[$this->iCurrentIdx];
	}
	
	public function key()
	{
		return $this->iCurrentIdx;
	}
}
