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
//echo'<pre>';print_r($arResult["ITEMS"]);echo'</pre>';
?>
<div class="carousel-box load overflow" data-carousel-pagination="true" data-carousel-nav="false" data-carousel-one="true">
	<div class="title-box">
	  <a class="next" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
		  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "></polygon>
		</svg>
	  </a>
	  <a class="prev" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
		  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "></polygon>
		</svg>
	  </a>
	  <h2 class="title"><?=GetMessage('POSTS')?></h2>
	</div>
	
	<div class="clearfix"></div>
	<div class="row">
		<div class="carousel no-responsive">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="post" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<h2 class="entry-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h2>
						<?else:?>
							<h2 class="entry-title"><a href="#"><?echo $arItem["NAME"]?></a></h2>
						<?endif;?>
					<?endif;?>
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<div class="entry-content">
							<?echo $arItem["PREVIEW_TEXT"];?>
						</div>
					<?endif;?>					  
					<div class="entry-meta">
						<?if($arItem["PROPERTIES"]["AUTHOR"]["VALUE"]):?>
							<span class="autor-name"><?=$arItem["PROPERTIES"]["AUTHOR"]["VALUE"]?></span><?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>,<?endif?>
						<?endif?>
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
						<?if($arItem["PROPERTIES"]["POSTED_IN"]["VALUE"][0]):?>
							<span class="separator">|</span>
							<span class="meta"><?=GetMessage('POSTED_IN')?> 
							<?foreach($arItem["PROPERTIES"]["POSTED_IN"]["VALUE"] as $ind => $value):?>
								<a target="_blank" href="<?=$arItem["PROPERTIES"]["POSTED_IN"]["DESCRIPTION"][$ind]?>"><?=$value?></a><?if($ind+1 < count($arItem["PROPERTIES"]["POSTED_IN"]["VALUE"])):?>,<?endif?>
							<?endforeach?>
							</span>
						<?endif?>
						<!--
						<span class="comments-link pull-right">
						  <a href="#">3 comment(s)</a>
						</span>
						-->
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="pagination switches"></div>
</div>