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
<div class="fwb-bg fwb-paralax band-6" data-stellar-background-ratio="0.5"><div class="overlay"></div></div>
<div class="container">
	<div class="portfolio">
		<div class="btn-group filter-buttons filter-list white">
			<button type="button" class="dropdown-toggle" data-toggle="dropdown">
			  <?=GetMessage("ALL_WORKS");?> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="#" data-filter="*" class="active"><?=GetMessage("ALL_WORKS");?></a></li>
			  <?foreach($arResult["SECTIONS"] as $arSection):?>
				<li><a href="#" data-filter=".<?=$arSection["CODE"]?>"><?=$arSection["NAME"]?></a></li>
			  <?endforeach?>
			</ul>
			<div class="clearfix"></div>
		 </div><!-- .filter-buttons -->  
		 <div class="clearfix"></div> 
		<div class="row filter-elements">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="work-element <?=$arItem["IBLOCK_SECTION_CODE"]?> col-xs-12 col-sm-3 col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				  <a <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>href="<?=$arItem["DETAIL_PAGE_URL"]?>" <?endif?> class="work">
					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
					<?endif?>
					<span class="shadow"></span>
					<div class="bg-hover"></div>
					<div class="work-title">
					  <h3 class="title"><?echo $arItem["NAME"]?></h3>
					  <div class="description"><?=$arItem["IBLOCK_SECTION_NAME"]?></div>
					</div>
				  </a>
				</div><!-- .work-element -->
			<?endforeach;?>
		</div>
	</div>
</div>