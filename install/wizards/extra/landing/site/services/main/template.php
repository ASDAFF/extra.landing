<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

/* echo "WIZARD_SITE_ID=".WIZARD_SITE_ID." | ";
echo "WIZARD_SITE_PATH=".WIZARD_SITE_PATH." | ";
echo "WIZARD_RELATIVE_PATH=".WIZARD_RELATIVE_PATH." | ";
echo "WIZARD_ABSOLUTE_PATH=".WIZARD_ABSOLUTE_PATH." | ";
echo "WIZARD_TEMPLATE_ID=".WIZARD_TEMPLATE_ID." | ";
echo "WIZARD_TEMPLATE_RELATIVE_PATH=".WIZARD_TEMPLATE_RELATIVE_PATH." | ";
echo "WIZARD_TEMPLATE_ABSOLUTE_PATH=".WIZARD_TEMPLATE_ABSOLUTE_PATH." | ";
echo "WIZARD_THEME_ID=".WIZARD_THEME_ID." | ";
echo "WIZARD_THEME_RELATIVE_PATH=".WIZARD_THEME_RELATIVE_PATH." | ";
echo "WIZARD_THEME_ABSOLUTE_PATH=".WIZARD_THEME_ABSOLUTE_PATH." | ";
echo "WIZARD_SERVICE_RELATIVE_PATH=".WIZARD_SERVICE_RELATIVE_PATH." | ";
echo "WIZARD_SERVICE_ABSOLUTE_PATH=".WIZARD_SERVICE_ABSOLUTE_PATH." | ";
echo "WIZARD_IS_RERUN=".WIZARD_IS_RERUN." | ";
die(); */

if (!defined("WIZARD_TEMPLATE_ID"))
	return;

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"]."/bitrix/templates";
	
CopyDirFiles(
	$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/extra.landing/install/wizards/extra/landing/site/templates",
	$bitrixTemplateDir, 
	$rewrite = true,
	$recursive = true,
	$delete_after_copy = false
);

$wizard =& $this->GetWizard();
	
if (strlen(WIZARD_SITE_ID)) {
   $obSite = new CSite();
   $t = $obSite->Update(WIZARD_SITE_ID, array(
      'ACTIVE' => "Y",
      'TEMPLATE'=>array(
         array(
            'CONDITION' => "",
            'SORT' => 100,
            'TEMPLATE' => "shop-constructor"
         )
      )
   ));
}

COption::SetOptionString("main", "wizard_template_id", WIZARD_TEMPLATE_ID, false, WIZARD_SITE_ID);
?>
