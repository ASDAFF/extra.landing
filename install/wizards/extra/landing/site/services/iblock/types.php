<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;
	
if(COption::GetOptionString("landing", "wizard_installed", "N", WIZARD_SITE_ID) == "Y")
	return;

$arTypes = Array(
	Array(
    'ID'=>'extra_landing',
    'SECTIONS'=>'Y',
    'IN_RSS'=>'Y',
    'SORT'=>500,
    'LANG'=>Array(
        'ru'=>Array(
            'NAME'=>GetMessage("IB_TYPE_NAME"),
            'SECTION_NAME'=>GetMessage("IB_TYPE_SECTION_NAME"),
            'ELEMENT_NAME'=>GetMessage("IB_TYPE_ELEMENT_NAME"),
            )
        )
    ),
);

foreach($arTypes as $arType)
{
	$dbType = CIBlockType::GetList(Array(),Array("=ID" => $arType["ID"]));
	if($dbType->Fetch())
		continue;

	$iblockType = new CIBlockType;
	$iblockType->Add($arType);
}

COption::SetOptionString('iblock','combined_list_mode','Y');
?>