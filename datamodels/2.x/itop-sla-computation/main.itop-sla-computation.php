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


/**
 * Module itop-sla-computation: implements an extensible mechanism
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

/**
 * Implements the public interface for utilities
 * related to the SLA computation 
 */
class SLAComputation implements iWorkingTimeComputer
{
	/**
	 * @var \SLAComputationAddOnAPI
	 */
	protected static $m_oAddOn;

	/**
	 * Generic "extensibility" method: select which extension is actually used
	 *
	 * @param $sClassName string The name of the class (derived from SLAComputationAddOnAPI) to use
	 *
	 * @return void
	 * @throws \CoreException
	 */
	public static function SelectModule($sClassName)
	{
		if (!class_exists($sClassName))
		{
			throw new CoreException("Could not select this module, '$sClassName' in not a valid class name");
		}
		if (($sClassName != 'SLAComputationAddOnAPI') && !is_subclass_of($sClassName, 'SLAComputationAddOnAPI'))
		{
			throw new CoreException("Could not select this module, the class '$sClassName' is not derived from SLAComputationAddOnAPI (parent class:".get_parent_class($sClassName)." )");
		}
		self::$m_oAddOn = new $sClassName;
		self::$m_oAddOn->Init();
	}

	/**
	 * Get the class of the extension actually used
	 * @return string The name of the extension class used
	 */
	public static function GetModuleInstance()
	{
		return self::$m_oAddOn;
	}
	
	public static function GetDescription()
	{
		return "SLA computation (depends on the installed module)";
	}

	/**
	 * Get the date/time corresponding to a given delay in the future from the present
	 * considering only the valid (open) hours for a specified object
	 *
	 * @param $oObject Ticket The object for which to compute the deadline
	 * @param $iDuration integer The duration (in seconds) in the future
	 * @param $oStartDate DateTime The starting point for the computation
	 *
	 * @return DateTime The date/time for the deadline
	 * @throws \Exception
	 */
	public function GetDeadline($oObject, $iDuration, DateTime $oStartDate)
	{
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::Trace(WorkingTimeRecorder::TRACE_DEBUG, __class__.'::'.__function__);
		}
		$oEndDate = self::$m_oAddOn->GetDeadline($oObject, $iDuration, $oStartDate);
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::SetValues($oStartDate->format('U'), $oEndDate->format('U'), $iDuration, WorkingTimeRecorder::COMPUTED_END);
		}
		return $oEndDate;
	}

	/**
	 * Get duration (considering only open hours) elapsed between two given DateTimes
	 *
	 * @param $oObject Ticket The object for which to compute the duration
	 * @param $oStartDate DateTime The starting point for the computation (default = now)
	 * @param $oEndDate DateTime The ending point for the computation (default = now)
	 *
	 * @return integer The duration (number of seconds) of open hours elapsed between the two dates
	 * @throws \Exception
	 */
	public function GetOpenDuration($oObject, DateTime $oStartDate, DateTime $oEndDate)
	{
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::Trace(WorkingTimeRecorder::TRACE_DEBUG, __class__.'::'.__function__);
		}
		$iDuration = self::$m_oAddOn->GetOpenDuration($oObject, $oStartDate, $oEndDate);
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::SetValues($oStartDate->format('U'), $oEndDate->format('U'), $iDuration, WorkingTimeRecorder::COMPUTED_DURATION);
		}
		return $iDuration;
	}
}

/**
 * Base class for extensions to the SLA computation mechanism
 * This class implements a default behavior, suitable for a simple
 * 24x7 (no holiday) computation. To override this behavior, implement
 * a derived class from this one, overloading the behavior, and call
 * SLAComputation::SetExtension()
 */
class SLAComputationAddOnAPI
{
	/**
	 * Called when the module is loaded, used for one time initialization (if needed)
	 */
	public function Init()
	{
	}	

	/**
	 * Get the date/time corresponding to a given delay in the future from the present
	 * considering only the valid (open) hours for a specified ticket
	 * @param $oTicket Ticket The ticket for which to compute the deadline
	 * @param $iDuration integer The duration (in seconds) in the future
	 * @param $oStartDate DateTime The starting point for the computation
	 * @return DateTime The date/time for the deadline
	 */
	public static function GetDeadline($oTicket, $iDuration, DateTime $oStartDate)
	{
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::Trace(WorkingTimeRecorder::TRACE_DEBUG, __class__.'::'.__function__);
		}
		// Default implementation: 24x7, no holidays: to compute the deadline, just add
		// the specified duration to the given date/time
		$oResult = clone $oStartDate;
		$oResult->modify('+'.$iDuration.' seconds');
		return $oResult;
	}
	
	/**
	 * Get duration (considering only open hours) elapsed between two given DateTimes
	 * @param $oTicket Ticket The ticket for which to compute the duration
	 * @param $oStartDate DateTime The starting point for the computation (default = now)
	 * @param $oEndDate DateTime The ending point for the computation (default = now)
	 * @return integer The duration (number of seconds) of open hours elapsed between the two dates
	 */
	public static function GetOpenDuration($oTicket, DateTime $oStartDate, DateTime $oEndDate)
	{
		if (class_exists('WorkingTimeRecorder'))
		{
			WorkingTimeRecorder::Trace(WorkingTimeRecorder::TRACE_DEBUG, __class__.'::'.__function__);
		}
		return abs($oEndDate->format('U') - $oStartDate->format('U'));
	}
}
SLAComputation::SelectModule('SLAComputationAddOnAPI');
?>