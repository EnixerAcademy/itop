<?php
// Copyright (C) 2010-2012 Combodo SARL
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
 * Exception management
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class CoreException extends Exception
{
	public function __construct($sIssue, $aContextData = null, $sImpact = '')
	{
		$this->m_sIssue = $sIssue;
		$this->m_sImpact = $sImpact;
		$this->m_aContextData = $aContextData ? $aContextData : array();
		
		$sMessage = $sIssue;
		if (!empty($sImpact)) $sMessage .= "($sImpact)";
		if (count($this->m_aContextData) > 0)
		{
			$sMessage .= ": ";
			$aContextItems = array();
			foreach($this->m_aContextData as $sKey => $value)
			{
				if (is_array($value))
				{
					$aPairs = array();
					foreach($value as $key => $val)
					{
						if (is_array($val))
						{
							$aPairs[] = $key.'=>('.implode(', ', $val).')';
						}
						else
						{
							$aPairs[] = $key.'=>'.$val;
						}
					}
					$sValue = '{'.implode('; ', $aPairs).'}';
				}
				else
				{
					$sValue = $value;
				}
				$aContextItems[] = "$sKey = $sValue";
			}
			$sMessage .= implode(', ', $aContextItems);
		}
		parent::__construct($sMessage, 0);
	}

	/**
	 * @return string code and message for log purposes
	 */
	public function getInfoLog()
	{
		return 'error_code='.$this->getCode().', message="'.$this->getMessage().'"';
	}
	public function getHtmlDesc($sHighlightHtmlBegin = '<b>', $sHighlightHtmlEnd = '</b>')
	{
		return $this->getMessage();
	}

	public function getTraceAsHtml()
	{
		$aBackTrace = $this->getTrace();
		return MyHelpers::get_callstack_html(0, $this->getTrace());
		// return "<pre>\n".$this->getTraceAsString()."</pre>\n";
	}

	public function addInfo($sKey, $value)
	{
		$this->m_aContextData[$sKey] = $value;
	}

	public function getIssue()
	{
		return $this->m_sIssue;
	}
	public function getImpact()
	{
		return $this->m_sImpact;
	}
	public function getContextData()
	{
		return $this->m_aContextData;
	}
}

/**
 * Class CoreCannotSaveObjectException
 *
 * Specialized exception to raise if {@link DBObject::CheckToWrite()} fails, which allow easy data retrieval
 *
 * @see \DBObject::DBInsertNoReload()
 * @see \DBObject::DBUpdate()
 *
 * @since 2.6 N°659 uniqueness constraint
 */
class CoreCannotSaveObjectException extends CoreException
{
	/** @var string[] */
	private $aIssues;
	/** @var int */
	private $iObjectId;
	/** @var string */
	private $sObjectClass;

	/**
	 * CoreCannotSaveObjectException constructor.
	 *
	 * @param array $aContextData containing at least those keys : issues, id, class
	 */
	public function __construct($aContextData)
	{
		$this->aIssues = $aContextData['issues'];
		$this->iObjectId = $aContextData['id'];
		$this->sObjectClass = $aContextData['class'];

		$sIssues = implode(', ', $this->aIssues);
		parent::__construct($sIssues, $aContextData);
	}

	/**
	 * @return string
	 */
	public function getHtmlMessage()
	{
		$sTitle = Dict::S('UI:Error:SaveFailed');
		$sContent = "<span><strong>{$sTitle}</strong></span>";

		if (count($this->aIssues) == 1)
		{
			$sIssue = reset($this->aIssues);
			$sContent .= " <span>{$sIssue}</span>";
		}
		else
		{
			$sContent .= '<ul>';
			foreach ($this->aIssues as $sError)
			{
				$sContent .= "<li>$sError</li>";
			}
			$sContent .= '</ul>';
		}

		return $sContent;
	}

	public function getIssues()
	{
		return $this->aIssues;
	}

	public function getObjectId()
	{
		return $this->iObjectId;
	}

	public function getObjectClass()
	{
		return $this->sObjectClass;
	}
}

class CoreWarning extends CoreException
{
}

class CoreUnexpectedValue extends CoreException
{
}

class SecurityException extends CoreException
{
}

/**
 * Throwned when querying on an object that exists in the database but is archived
 *
 * @see N.1108
 */
class ArchivedObjectException extends CoreException
{
}
