<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'DEPTH_LEVEL' => 1, 'ACTIVE' => 'Y', 'CNT_ACTIVE' => 'Y');
$arSelect = array('ID', 'NAME', 'CODE');
$rsSect = CIBlockSection::GetList(array('SORT' => 'ASC', 'ID'=>'DESC'), $arFilter, true, $arSelect);
while ($arSect = $rsSect->GetNext())
{
	if($arSect["ELEMENT_CNT"] > 0)
		$arResult["SECTIONS"][] = $arSect;
}
foreach($arResult["ITEMS"] as $key=>$arItem) {
	$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
	if($ar_res = $res->GetNext()) {
		$arResult["ITEMS"][$key]["IBLOCK_SECTION_CODE"] = $ar_res["CODE"];
		$arResult["ITEMS"][$key]["IBLOCK_SECTION_NAME"] = $ar_res["NAME"];
	}
}
?>