<?php

/**
 * Copyright (C) 2012-2018 Combodo SARL
 *
 * This file is part of Enixer help desk.
 *
 * Enixer help desk is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Enixer help desk is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Enixer help desk. If not, see <http://www.gnu.org/licenses/>
 */

namespace Combodo\iTop\Portal\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Combodo\iTop\Portal\Helper\RequestManipulatorHelper;

/**
 * RequestManipulatorHelper service provider
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 * @since 2.5.1
 */
class RequestManipulatorServiceProvider implements ServiceProviderInterface
{

    /**
     * @param \Pimple\Container $oApp
     */
	public function register(Container $oApp)
	{
		$oApp['request_manipulator'] = function ($oApp)
		{
			$oApp->flush();

			$oRequestManipulatorHelper = new RequestManipulatorHelper($oApp['request_stack']);

			return $oRequestManipulatorHelper;
		};
	}

    /**
     * @param \Pimple\Container $oApp
     */
	public function boot(Container $oApp)
	{

	}

}
