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

namespace Combodo\iTop\Form\Field;

use Str;
use utils;

/**
 * Description of EmailField
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 */
class EmailField extends StringField
{
    public function GetDisplayValue()
    {
        $sLabel = Str::pure2html($this->currentValue);
        if (strlen($sLabel) > 128)
        {
            // Truncate the length to 128 characters, by removing the middle
            $sLabel = substr($sLabel, 0, 100).'.....'.substr($sLabel, -20);
        }

        $sUrlDecorationClass = utils::GetConfig()->Get('email_decoration_class');

        return "<a class=\"mailto\" href=\"mailto:$this->currentValue\"><span class=\"form_field_decoration text_decoration $sUrlDecorationClass\"></span>$sLabel</a>";
    }
}
