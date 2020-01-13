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
<div class="title-box">
	<h2 class="title"><?=GetMessage("INTERESTING_FACTS")?></h2>
</div>
<div class="panel-group multi-collapse" id="accordion2">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="panel panel-default<?if($arItem["PROPERTIES"]["OPENED"]["VALUE_XML_ID"] == "Y"):?> active<?endif?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="panel-heading">
			<div class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$arItem['ID']?>"><?echo $arItem["NAME"]?></a>
			</div>
		</div>
		<div id="collapse<?=$arItem['ID']?>" class="panel-collapse collapse<?if($arItem["PROPERTIES"]["OPENED"]["VALUE_XML_ID"] == "Y"):?> in<?endif?>">
			<div class="panel-body">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"<?if($arItem["PROPERTIES"]["IMG_ALIGN"]["VALUE_XML_ID"] == "left"):?> class="alignleft" <?else:?> class="alignright" <?endif?>width="100" height="62" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
				<?endif?>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<?echo $arItem["PREVIEW_TEXT"];?>
				<?endif;?>
			</div>
		</div>
	</div>
<?endforeach;?>
</div>