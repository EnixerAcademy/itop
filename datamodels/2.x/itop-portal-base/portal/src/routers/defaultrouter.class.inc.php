<?php

// Copyright (C) 2010-2018 Combodo SARL
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

namespace Combodo\iTop\Portal\Router;


/**
 * Class DefaultRouter
 *
 * @package Combodo\iTop\Portal\Router
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 * @since 2.3.0
 */
class DefaultRouter extends AbstractRouter
{
	static $aRoutes = array(
		array('pattern' => '/',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController::homeAction',
			'bind' => 'p_home'),
//		// Example route
//		array('pattern' => '/url-pattern',
//			'hash' => 'string-to-be-append-to-the-pattern-after-a-#',
//			'navigation_menu_attr' => array('id' => 'link_id', 'rel' => 'foo'),
//			'callback' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController::exampleAction',
//			'bind' => 'p_example')
	);

}
