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
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @licence	http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Menu:IncidentManagement' => 'インシデント管理',
	'Menu:IncidentManagement+' => 'インシデント管理',
	'Menu:Incident:Overview' => '概要',
	'Menu:Incident:Overview+' => '概要',
	'Menu:NewIncident' => '新規インシデント',
	'Menu:NewIncident+' => 'インシデントチケット作成',
	'Menu:SearchIncidents' => 'インシデント検索',
	'Menu:SearchIncidents+' => 'インシデントチケット検索',
	'Menu:Incident:Shortcuts' => 'ショートカット',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => '担当しているインシデント',
	'Menu:Incident:MyIncidents+' => '担当しているインシデント(エージェント)',
	'Menu:Incident:EscalatedIncidents' => 'エスカレーションされたインシデント',
	'Menu:Incident:EscalatedIncidents+' => 'エスカレーションされたインシデント',
	'Menu:Incident:OpenIncidents' => '全オープンインシデント',
	'Menu:Incident:OpenIncidents+' => '全オープンインシデント',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => '最近14日の優先度別インシデント',
	'UI-IncidentManagementOverview-Last-14-days' => '最近14日のインシデント数',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => '状態別オープンインシデント',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'エージェント別オープンインシデント',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => '顧客別オープンインシデント',
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
// Class: Incident
//

Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Class:Incident' => 'インシデント',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => '状態',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => '新規',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'エスカレートTTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => '割り当て',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'エスカレートTTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => '承認待ち',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => '保留中',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => '解決済み',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'クローズ',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'インパクト',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => '部門',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'サービス',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => '個人',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => '優先度',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => '重大',
	'Class:Incident/Attribute:priority/Value:1+' => '重大',
	'Class:Incident/Attribute:priority/Value:2' => '高',
	'Class:Incident/Attribute:priority/Value:2+' => '高',
	'Class:Incident/Attribute:priority/Value:3' => '中',
	'Class:Incident/Attribute:priority/Value:3+' => '中',
	'Class:Incident/Attribute:priority/Value:4' => '低',
	'Class:Incident/Attribute:priority/Value:4+' => '低',
	'Class:Incident/Attribute:urgency' => '緊急度',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => '至急',
	'Class:Incident/Attribute:urgency/Value:1+' => '至急',
	'Class:Incident/Attribute:urgency/Value:2' => '高',
	'Class:Incident/Attribute:urgency/Value:2+' => '高',
	'Class:Incident/Attribute:urgency/Value:3' => '中',
	'Class:Incident/Attribute:urgency/Value:3+' => '中',
	'Class:Incident/Attribute:urgency/Value:4' => '低',
	'Class:Incident/Attribute:urgency/Value:4+' => '低',
	'Class:Incident/Attribute:origin' => '情報源',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'メール',
	'Class:Incident/Attribute:origin/Value:mail+' => 'メール',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'モニタリング',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'モニタリング',
	'Class:Incident/Attribute:origin/Value:phone' => '電話',
	'Class:Incident/Attribute:origin/Value:phone+' => '電話',
	'Class:Incident/Attribute:origin/Value:portal' => 'ポータル',
	'Class:Incident/Attribute:origin/Value:portal+' => 'ポータル',
	'Class:Incident/Attribute:service_id' => 'サービス',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'サービス名',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'サービス中分類',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'サービス中分類名',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'エスカレーションフラグ',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'いいえ',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'いいえ',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'はい',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'はい',
	'Class:Incident/Attribute:escalation_reason' => '理由',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => '割り当て日',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => '解決日',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => '最終保留日',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => '合計保留',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'tto',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'ttr',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'TTO 期限',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA tto 合格',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA tto オーバー',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'TTR 期限',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA ttr 合格',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA ttr オーバー',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => '解決遅れ',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => '解決コード',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => '補助',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '補助',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'バグ修正',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'バグ修正',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'ハードウエア修理',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'ハードウエア修理',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'その他',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'その他',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'ソフトウエアパッチ',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'ソフトウエアパッチ',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'システム更新',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'システム更新',
	'Class:Incident/Attribute:resolution_code/Value:training' => '研修',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '研修',
	'Class:Incident/Attribute:solution' => '解決',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => '保留理由',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => '親インシデント',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => '親インシデント参照',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => '親変更',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => '親変更参照',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
	'Class:Incident/Attribute:related_request_list' => 'Child requests~~',
	'Class:Incident/Attribute:related_request_list+' => '~~',
	'Class:Incident/Attribute:child_incidents_list' => '子インシデント',
	'Class:Incident/Attribute:child_incidents_list+' => '',
	'Class:Incident/Attribute:public_log' => 'パブリックログ',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'ユーザ満足度',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => '非常に満足',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '非常に満足',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => '十分満足',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '十分満足',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => '多少不満',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '多少不満',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => '非常に不満',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '非常に不満',
	'Class:Incident/Attribute:user_comment' => 'ユーザコメント',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => '親インシデント名',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => '割り当て',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => '再割り当て',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => '保留',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'タイムアウト',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => '自動解決',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => '自動クローズ',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => '解決とマーク',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'このリクエストをクローズ',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => '再オープン',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Cannot assign the Parent incident to the incident itself~~',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:Incident/Method:ResolveChildTickets+' => 'Cascade the resolution to child ticket (ev_autoresolve), and align the following characteristics: service, team, agent, resolution info~~',
	'Tickets:Related:OpenIncidents' => 'Open incidents~~',
));

//
// Class: Incident
//

Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
));
