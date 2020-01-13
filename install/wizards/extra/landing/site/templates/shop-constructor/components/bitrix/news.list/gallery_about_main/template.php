<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="carousel no-responsive gallery">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>270, 'height'=>135), BX_RESIZE_IMAGE_EXACT);
		?>
		<div class="col-sm-4 col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		  <a class="gallery-images" rel="fancybox" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
			<img src="<?=$arImg["src"]?>" width="270" height="135" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
			<span class="bg-images"><i class="fa fa-search"></i></span>
		  </a>
		</div>			
	<?endforeach;?>
</div>