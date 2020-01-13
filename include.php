<?
/**
 * Copyright (c) 29/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

IncludeModuleLangFile(__FILE__);
class MerexSiteLanding 
{
	function ShowPanel(){
		
		if ($GLOBALS["USER"]->IsAdmin() && COption::GetOptionString("main", "wizard_solution", "", SITE_ID) == "landing"){
			
			$GLOBALS["APPLICATION"]->AddPanelButton(array(
				"HREF" => "/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&wizardName=extra:landing&wizardSiteID=".SITE_ID."&".bitrix_sessid_get(),
				"ID" => "demo_personal_wizard",
				"ICON" => "bx-panel-site-wizard-icon",
				"MAIN_SORT" => 2500,
				"TYPE" => "BIG",
				"SORT" => 10,					
				"ALT" => GetMessage("BUTTON_ALT"),
				"TEXT" => GetMessage("BUTTON_TEXT"),
				"MENU" => array(),
			));
		}
	}
}
?>