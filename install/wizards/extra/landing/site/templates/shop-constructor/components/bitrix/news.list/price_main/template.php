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
<div class="row text-center">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-sm-6 col-md-4 col-lg-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="<?=$arItem['PROPERTIES']['BLOCK_COLOR']['VALUE_XML_ID']?>">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<div class="title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
					<?else:?>
						<div class="title"><a href="#"><?echo $arItem["NAME"]?></a></div>
					<?endif;?>
				<?endif;?>
				<div class="price-box">
					<div class="icon pull-right circle">
					  <span class="livicon" data-n="<?=$arItem['PROPERTIES']['ICON_STYLE']['VALUE']?>" data-s="<?=$arItem['PROPERTIES']['ICON_SIZE']['VALUE']?>" data-c="<?=$arItem['PROPERTIES']['ICON_COLOR']['VALUE']?>" data-hc="0"></span>
					</div>
					<div class="starting"><?=GetMessage("FROM");?></div>
					<div class="price"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?><span>/<?=GetMessage("MONTH");?></span></div>
				</div>
				<?if(!empty($arItem['PROPERTIES']['LIST'])):?>
					<ul class="options">
						<?foreach($arResult["PROPERTIES"]["LIST"] as $arProperty):?>
							<li<?if(in_array($arProperty["ID"], $arItem['PROPERTIES']['LIST']["VALUE_ENUM_ID"])):?> class="active"<?endif?>><span><i class="fa fa-check"></i></span><?=$arProperty["VALUE"];?></li>
						<?endforeach?>
					</ul>
				<?endif?>
				<div class="bottom-box">
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="more"><?=GetMessage("READ_MORE");?> <span class="fa fa-angle-right"></span></a>
					<?endif?>
					<div class="rating-box">
					  <div style="width: <?=round($arItem['PROPERTIES']['RATE']['VALUE']);?>%" class="rating">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px" height="12px" viewBox="0 0 73 12" enable-fwb-bg="new 0 0 73 12" xml:space="preserve">
						  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
						  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
						  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
						  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
						  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
						</svg>
					  </div>
					</div>	
					<div class="clearfix"></div>
					<button class="btn btn-default btn-lg" onclick="window.location.href='mailto:demo@domain.com';"><?=GetMessage("BUY_NOW");?></button>
				</div>
			</div><!-- .pricing -->
		</div>
	<?endforeach;?>
</div>