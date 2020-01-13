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
<div class="row services">
	<div class="col-sm-12 col-md-12">
	  <div class="title-box">
		<h1 class="title"><?=GetMessage("SERVICES");?></h1>
	  </div>
	</div>
	<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		
		$style = '';
		switch($key) {
			case 0:
				$style="bounceInLeft";
				break;
			case 1:
				$style="bounceInUp";
				break;
			case 2:
				$style="bounceInRight";
				break;
		}
		?>
		
		<div class="big-services-box col-sm-4 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		  <div>
			<div class="big-icon bg" data-appear-animation="wobble"><i class="fa <?=$arItem['PROPERTIES']['STYLE']['VALUE']?>"></i></div>
			<h4 class="title" data-appear-animation="<?=$style?>"><?echo $arItem["NAME"]?></h4>
			<div class="text-small" data-appear-animation="<?=$style?>">
			  <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<?echo $arItem["PREVIEW_TEXT"];?>
			  <?endif?>
			  <div class="clearfix"></div><br>
			  <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<button class="btn btn-default" onclick="location.href='<?=$arItem["DETAIL_PAGE_URL"]?>'"><?=GetMessage("READ_MORE");?></button>
			  <?endif?>
			</div>
		  </div>
		</div><!-- .services-box-two -->
		<?if($key == 2){break;}?>
	<?endforeach;?>
</div>