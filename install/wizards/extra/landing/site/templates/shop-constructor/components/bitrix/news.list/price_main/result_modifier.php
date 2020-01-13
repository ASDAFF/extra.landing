<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!empty($arResult["ITEMS"][0]["PROPERTIES"]["LIST"])) {
	$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC", "ID"=>"ASC"), Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "CODE"=>"LIST"));
	while($enum_fields = $property_enums->GetNext()) {
		$arResult["PROPERTIES"]["LIST"][$enum_fields["ID"]] = $enum_fields;
	}
}
?>