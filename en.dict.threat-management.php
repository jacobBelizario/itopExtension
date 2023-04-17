<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license    http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


Dict::Add('EN US', 'English', 'English', array(
	'Menu:ThreatManagement' => 'Threat Management',
	'Menu:ThreatManagement+' => 'Threat Management',
	'Menu:Threat:Overview' => 'Overview',
	'Menu:Threat:Overview+' => 'Overview',
	'Menu:NewThreat' => 'New Threat',
	'Menu:NewThreat+' => 'New Threat',
	'Menu:SearchThreats' => 'Search for Threats',
	'Menu:SearchThreats+' => 'Search for Threats',
	'Menu:Threat:Shortcuts' => 'Shortcuts',
	'Menu:Threat:MyThreats' => 'My Threats',
	'Menu:Threat:MyThreats+' => 'My Threats',
	'Menu:Threat:OpenThreats' => 'All open Threats',
	'Menu:Threat:OpenThreats+' => 'All open Threats',
	'UI-ThreatManagementOverview-ThreatByService' => 'Threats by service',
	'UI-ThreatManagementOverview-ThreatByService+' => 'Threats by service',
	'UI-ThreatManagementOverview-ThreatByPriority' => 'Threats by priority',
	'UI-ThreatManagementOverview-ThreatByPriority+' => 'Threats by priority',
	'UI-ThreatManagementOverview-ThreatUnassigned' => 'Unassigned Threats',
	'UI-ThreatManagementOverview-ThreatUnassigned+' => 'Unassigned Threats',
	'UI:ThreatMgmtMenuOverview:Title' => 'Dashboard for Threat Management',
	'UI:ThreatMgmtMenuOverview:Title+' => 'Dashboard for Threat Management',

));
//
// Class: Threat
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Threat' => 'Threat',
	'Class:Threat+' => '',
	'Class:Threat/Attribute:status' => 'Status',
	'Class:Threat/Attribute:status+' => '',
	'Class:Threat/Attribute:solution_description' => 'Solution Description',
	'Class:Threat/Attribute:solution_description+' => '',
	'Class:Threat/Attribute:status/Value:new' => 'New',
	'Class:Threat/Attribute:status/Value:new+' => '',
	'Class:Threat/Attribute:status/Value:closed' => 'Closed',
	'Class:Threat/Attribute:status/Value:closed+' => '',
	'Class:Threat/Attribute:service_id' => 'Service',
	'Class:Threat/Attribute:service_id+' => '',
	'Class:Threat/Attribute:service_name' => 'Service name',
	'Class:Threat/Attribute:service_name+' => '',
	'Class:Threat/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:Threat/Attribute:servicesubcategory_id+' => '',
	'Class:Threat/Attribute:servicesubcategory_name' => 'Service subcategory',
	'Class:Threat/Attribute:servicesubcategory_name+' => '',
	'Class:Threat/Attribute:related_change_id' => 'Related Change',
	'Class:Threat/Attribute:related_change_id+' => '',
	'Class:Threat/Attribute:related_change_ref' => 'Related Change ref',
	'Class:Threat/Attribute:related_change_ref+' => '',
	'Class:Threat/Attribute:assignment_date' => 'Assignment Date',
	'Class:Threat/Attribute:assignment_date+' => '',
	'Class:Threat/Attribute:resolution_date' => 'Resolution Date',
	'Class:Threat/Attribute:resolution_date+' => '',
	'Class:Threat/Attribute:knownerrors_list' => 'Known Errors',
	'Class:Threat/Attribute:knownerrors_list+' => 'All the known errors that are linked to this Threat',
	'Class:Threat/Attribute:related_request_list' => 'Related requests',
	'Class:Threat/Attribute:related_request_list+' => 'All the requests that are related to this Threat',
	'Class:Threat/Attribute:related_incident_list' => 'Related incidents',
	'Class:Threat/Attribute:related_incident_list+' => 'All the incidents that are related to this Threat',
	'Class:Threat/Stimulus:ev_close' => 'Close',
	'Class:Threat/Stimulus:ev_close+' => '',
));
