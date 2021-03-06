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
use Closure;

/**
 * Description of UrlField
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 */
class UrlField extends StringField
{
    const DEFAULT_TARGET = '_blank';

    protected $sTarget;

    /**
     * Default constructor
     *
     * @param string $sId
     * @param \Closure $onFinalizeCallback (Used in the $oForm->AddField($sId, ..., function() use ($oManager, $oForm, '...') { ... } ); )
     */
    public function __construct($sId, Closure $onFinalizeCallback = null)
    {
        parent::__construct($sId, $onFinalizeCallback);

        $this->sTarget = static::DEFAULT_TARGET;
    }

    public function SetTarget($sTarget)
    {
        $this->sTarget = $sTarget;

        return $this;
    }

    public function GetDisplayValue()
    {
        $sLabel = Str::pure2html($this->currentValue);
        if (strlen($sLabel) > 128)
        {
            // Truncate the length to 128 characters, by removing the middle
            $sLabel = substr($sLabel, 0, 100).'.....'.substr($sLabel, -20);
        }

        return "<a target=\"$this->sTarget\" href=\"$this->currentValue\">$sLabel</a>";
    }
}
