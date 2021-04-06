<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
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
Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Menu:RequestManagement' => 'Helpdesk~~',
	'Menu:RequestManagement+' => 'Helpdesk~~',
	'Menu:RequestManagementProvider' => 'Helpdesk provider~~',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider~~',
	'Menu:UserRequest:Provider' => 'Open request transfered to provider~~',
	'Menu:UserRequest:Provider+' => 'Open request transfered to provider~~',
	'Menu:UserRequest:Overview' => 'Overview~~',
	'Menu:UserRequest:Overview+' => 'Overview~~',
	'Menu:NewUserRequest' => 'New user request~~',
	'Menu:NewUserRequest+' => 'Create a new user request ticket~~',
	'Menu:SearchUserRequests' => 'Search for user requests~~',
	'Menu:SearchUserRequests+' => 'Search for user request tickets~~',
	'Menu:UserRequest:Shortcuts' => 'Shortcuts~~',
	'Menu:UserRequest:Shortcuts+' => '~~',
	'Menu:UserRequest:MyRequests' => 'Requests assigned to me~~',
	'Menu:UserRequest:MyRequests+' => 'Requests assigned to me (as Agent)~~',
	'Menu:UserRequest:MySupportRequests' => 'My support calls~~',
	'Menu:UserRequest:MySupportRequests+' => 'My support calls~~',
	'Menu:UserRequest:EscalatedRequests' => 'Hot Requests~~',
	'Menu:UserRequest:EscalatedRequests+' => 'Hot Requests~~',
	'Menu:UserRequest:OpenRequests' => 'All open requests~~',
	'Menu:UserRequest:OpenRequests+' => 'All open requests~~',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Requests assigned to me~~',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type~~',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests~~',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status~~',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent~~',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type~~',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer~~',
	'Class:UserRequest:KnownErrorList' => 'Known Errors~~',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Class:UserRequest' => 'User Request~~',
	'Class:UserRequest+' => '~~',
	'Class:UserRequest/Attribute:status' => 'Status~~',
	'Class:UserRequest/Attribute:status+' => '~~',
	'Class:UserRequest/Attribute:status/Value:new' => 'New~~',
	'Class:UserRequest/Attribute:status/Value:new+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assigned~~',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approved~~',
	'Class:UserRequest/Attribute:status/Value:approved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rejected~~',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '~~',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pending~~',
	'Class:UserRequest/Attribute:status/Value:pending+' => '~~',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Resolved~~',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Closed~~',
	'Class:UserRequest/Attribute:status/Value:closed+' => '~~',
	'Class:UserRequest/Attribute:request_type' => 'Request Type~~',
	'Class:UserRequest/Attribute:request_type+' => '~~',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Service request~~',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Service request~~',
	'Class:UserRequest/Attribute:impact' => 'Impact~~',
	'Class:UserRequest/Attribute:impact+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:1' => 'A department~~',
	'Class:UserRequest/Attribute:impact/Value:1+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:2' => 'A service~~',
	'Class:UserRequest/Attribute:impact/Value:2+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:3' => 'A person~~',
	'Class:UserRequest/Attribute:impact/Value:3+' => '~~',
	'Class:UserRequest/Attribute:priority' => 'Priority~~',
	'Class:UserRequest/Attribute:priority+' => '~~',
	'Class:UserRequest/Attribute:priority/Value:1' => 'critical~~',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:priority/Value:2' => 'high~~',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:priority/Value:3' => 'medium~~',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:priority/Value:4' => 'low~~',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'low~~',
	'Class:UserRequest/Attribute:urgency' => 'Urgency~~',
	'Class:UserRequest/Attribute:urgency+' => '~~',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'critical~~',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'high~~',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'medium~~',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'low~~',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'low~~',
	'Class:UserRequest/Attribute:origin' => 'Origin~~',
	'Class:UserRequest/Attribute:origin+' => '~~',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'email~~',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'email~~',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'monitoring~~',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring~~',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'phone~~',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'phone~~',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portal~~',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal~~',
	'Class:UserRequest/Attribute:approver_id' => 'Approver~~',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Approver Email~~',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:service_id' => 'Service~~',
	'Class:UserRequest/Attribute:service_id+' => '~~',
	'Class:UserRequest/Attribute:service_name' => 'Service name~~',
	'Class:UserRequest/Attribute:service_name+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Service subcategory~~',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Service subcategory name~~',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag' => 'Hot Flag~~',
	'Class:UserRequest/Attribute:escalation_flag+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Yes~~',
	'Class:UserRequest/Attribute:escalation_reason' => 'Hot reason~~',
	'Class:UserRequest/Attribute:escalation_reason+' => '~~',
	'Class:UserRequest/Attribute:assignment_date' => 'Assignment date~~',
	'Class:UserRequest/Attribute:assignment_date+' => '~~',
	'Class:UserRequest/Attribute:resolution_date' => 'Resolution date~~',
	'Class:UserRequest/Attribute:resolution_date+' => '~~',
	'Class:UserRequest/Attribute:last_pending_date' => 'Last pending date~~',
	'Class:UserRequest/Attribute:last_pending_date+' => '~~',
	'Class:UserRequest/Attribute:cumulatedpending' => 'cumulatedpending~~',
	'Class:UserRequest/Attribute:cumulatedpending+' => '~~',
	'Class:UserRequest/Attribute:tto' => 'TTO~~',
	'Class:UserRequest/Attribute:tto+' => '~~',
	'Class:UserRequest/Attribute:ttr' => 'TTR~~',
	'Class:UserRequest/Attribute:ttr+' => '~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto passed~~',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto over~~',
	'Class:UserRequest/Attribute:sla_tto_over+' => '~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed~~',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr over~~',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '~~',
	'Class:UserRequest/Attribute:time_spent' => 'Resolution delay~~',
	'Class:UserRequest/Attribute:time_spent+' => '~~',
	'Class:UserRequest/Attribute:resolution_code' => 'Resolution code~~',
	'Class:UserRequest/Attribute:resolution_code+' => '~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'assistance~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistance~~',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed~~',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed~~',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair~~',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair~~',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'other~~',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'other~~',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'software patch~~',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'software patch~~',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'system update~~',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'system update~~',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'training~~',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'training~~',
	'Class:UserRequest/Attribute:solution' => 'Solution~~',
	'Class:UserRequest/Attribute:solution+' => '~~',
	'Class:UserRequest/Attribute:pending_reason' => 'Pending reason~~',
	'Class:UserRequest/Attribute:pending_reason+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id' => 'Parent request~~',
	'Class:UserRequest/Attribute:parent_request_id+' => '~~',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Parent incident~~',
	'Class:UserRequest/Attribute:parent_incident_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref request~~',
	'Class:UserRequest/Attribute:parent_request_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Parent problem~~',
	'Class:UserRequest/Attribute:parent_problem_id+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref problem~~',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_change_id' => 'Parent change~~',
	'Class:UserRequest/Attribute:parent_change_id+' => '~~',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref change~~',
	'Class:UserRequest/Attribute:parent_change_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_incident_ref' => 'Parent incident ref~~',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Child Requests~~',
	'Class:UserRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request~~',
	'Class:UserRequest/Attribute:public_log' => 'Public log~~',
	'Class:UserRequest/Attribute:public_log+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction' => 'User satisfaction~~',
	'Class:UserRequest/Attribute:user_satisfaction+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied~~',
	'Class:UserRequest/Attribute:user_comment' => 'User comment~~',
	'Class:UserRequest/Attribute:user_comment+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '~~',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assign~~',
	'Class:UserRequest/Stimulus:ev_assign+' => '~~',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Re-assign~~',
	'Class:UserRequest/Stimulus:ev_reassign+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pending~~',
	'Class:UserRequest/Stimulus:ev_pending+' => '~~',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout~~',
	'Class:UserRequest/Stimulus:ev_timeout+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatic resolve~~',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatic close~~',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '~~',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Mark as resolved~~',
	'Class:UserRequest/Stimulus:ev_resolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_close' => 'Close this request~~',
	'Class:UserRequest/Stimulus:ev_close+' => '~~',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Re-open~~',
	'Class:UserRequest/Stimulus:ev_reopen+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself~~',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));


Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
