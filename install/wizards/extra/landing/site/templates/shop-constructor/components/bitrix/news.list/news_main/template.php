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
	<!--
	<a href="#" class="btn btn-default"><?=GetMessage("ALL_NEWS");?> <span class="glyphicon glyphicon-arrow-right"></span></a>
	-->
	<h2 class="title"><?=GetMessage("LATEST_NEWS");?></h2>
</div>
<ul class="latest-posts">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<li id="<?=$this->GetEditAreaId($arItem['ID']);?>"> 
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<img width="84" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" height="84" class="image img-circle" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" data-appear-animation="rotateIn">
			<?endif?>
			<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<div class="meta">
					<span class="time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
				</div>
			<?endif?>
			<div class="description">
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?echo $arItem["NAME"]?>
					</a>
				<?else:?>
					<a href="#">
						<?echo $arItem["NAME"]?>
					</a>
				<?endif?>
			</div>
		</li>
	<?endforeach;?>
</ul>