<?
/**
 * Copyright (c) 29/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class extra_landing extends CModule {
	
	var $MODULE_ID = "extra.landing";
	var $MODULE_VERSION; 
	var $MODULE_VERSION_DATE; 
	var $MODULE_NAME; 
	var $MODULE_DESCRIPTION; 
	var $MODULE_CSS; 
	var $MODULE_GROUP_RIGHTS = "Y"; 
 
	function extra_landing(){
	
		$arModuleVersion = array(); 
	 
		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");
		
		$this->MODULE_VERSION = $arModuleVersion["VERSION"]; 
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		
		$this->MODULE_NAME = GetMessage('LANDING_INSTALL_NAME');
		$this->MODULE_DESCRIPTION  = GetMessage('LANDING_INSTALL_DESCRIPTION');
		$this->PARTNER_NAME = "ASDAFF";
		$this->PARTNER_URI = "https://asdaff.github.io/";
	} 
	
	
	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("extra.landing");
		RegisterModuleDependences("main", "OnBeforeProlog", "extra.landing", "MerexSiteLanding", "ShowPanel");

		return true;
	}
	
	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModuleDependences("main", "OnBeforeProlog", "extra.landing", "MerexSiteLanding", "ShowPanel"); 
		UnRegisterModule("extra.landing");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
		return true;
	}

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
		return true;
	}
 
	function DoInstall()
	{
		global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();

		$APPLICATION->IncludeAdminFile(GetMessage("LANDING_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/extra.landing/install/step.php");
	}

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		$APPLICATION->IncludeAdminFile(GetMessage("LANDING_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/extra.landing/install/unstep.php");
	}
}