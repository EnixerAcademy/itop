<?php

// Copyright (c) 2010-2018 Combodo SARL
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
//

namespace Combodo\iTop\Portal\Router;

/**
 * Class AggregatePageBrickRouter
 *
 * @package Combodo\iTop\Portal\Router
 * @author Pierre Goiffon <pierre.goiffon@combodo.com>
 * @since 2.5.0
 */
class AggregatePageBrickRouter extends AbstractRouter
{
	static $aRoutes = array(
		array(
			'pattern' => '/aggregate-page/{sBrickId}',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\AggregatePageBrickController::DisplayAction',
			'bind' => 'p_aggregatepage_brick',
			'asserts' => array(),
			'values' => array()
		),
	);
}
