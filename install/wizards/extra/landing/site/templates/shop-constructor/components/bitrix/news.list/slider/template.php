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
<div class="slider rs-slider load">
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
						<div class="elements" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="tp-caption lfl skewtoleft"
						  data-x="-121"
						  data-y="bottom"
						  data-speed="1500"
						  data-start="1000"
						  data-easing="Power4.easeOut"
						  data-endspeed="1000"
						  data-endeasing="Power1.easeIn"
						  style="z-index: 1">
						  <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arItem["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arItem["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>" title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>">
						</div>

						<h2 class="tp-caption lft skewtotop title"
						  data-x="509"
						  data-y="122"
						  data-speed="1500"
						  data-start="1000"
						  data-easing="Power0.easeOut"
						  data-endspeed="1000"
						  data-endeasing="Power1.easeIn">
						  <strong><?echo $arItem["NAME"]?></strong>
						</h2>
						
						<div class="tp-caption customin customout description col-xs-5"
						  data-x="496"
						  data-y="196"
						  data-customin="x:0;y:0;z:50;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0;"
						  data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						  data-speed="1000"
						  data-start="1500"
						  data-easing="Back.easeInOut"
						  data-endspeed="400"
						  data-endeasing="Power1.easeIn"
						  style="max-width: 500px;">
							<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
								<?echo $arItem["PREVIEW_TEXT"];?>
							<?endif;?>
						</div>
						
						<?if($arItem["PROPERTIES"]["LINK"]["VALUE"]):?>
							<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"
							  class="tp-caption btn orang lfb skewtobottom btn-default"
							  data-x="509"
							  data-y="338"
							  data-speed="1000"
							  data-start="1500"
							  data-easing="Power3.easeInOut"
							  data-endspeed="300">
							  <?=GetMessage("READ_MORE");?>
							</a>
						<?endif?>
					  </div>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
					</li>
				<?endforeach;?>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div><!-- .rs-slider -->