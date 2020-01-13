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
<div class="title-box title-white">
	<h1 class="title no-top-padding"><?=GetMessage("OUR_TEAM")?></h1>
</div>
<div class="row text-center">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="col-sm-3 col-md-3 rotation employee" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="default">
					<?if(is_array($arItem["DETAIL_PICTURE"])):?>
						<div class="image">
							<img width="270" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" height="270" alt="<?echo $arItem["NAME"]?>" title="<?echo $arItem["NAME"]?>">
						</div>
					<?endif?>
					<div class="description">
						<div class="vertical">
							<h3 class="name"><?echo $arItem["NAME"]?></h3>
							<?if($arItem["PROPERTIES"]["STATE"]["VALUE"]):?>
								<div class="role">
									<?=$arItem["PROPERTIES"]["STATE"]["VALUE"]?>
								</div>
							<?endif?>
						</div>
					</div>
				</div>
				<div class="employee-hover">
					<h3 class="name"><?echo $arItem["NAME"]?></h3>
					<?if($arItem["PROPERTIES"]["STATE"]["VALUE"]):?>
						<div class="role">
							<?=$arItem["PROPERTIES"]["STATE"]["VALUE"]?>
						</div>
					<?endif?>
					<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
						<div class="image">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" title="<?echo $arItem["NAME"]?>">
						</div>
					<?endif?>
					<div>
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<p>
								<?echo $arItem["PREVIEW_TEXT"];?>
							</p>
						<?endif?>
						<?if($arItem["PROPERTIES"]["EMAIL"]["VALUE"]):?>
							<div class="contact">
								<b><?=GetMessage("EMAIL")?>: </b><a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
							</div>
						<?endif?>
						<?if($arItem["PROPERTIES"]["PHONE"]["VALUE"][0]):?>
							<div class="contact">
								<b><?=GetMessage("PHONE")?>: </b><?=implode(", ", $arItem["PROPERTIES"]["PHONE"]["VALUE"]);?>
							</div>
						<?endif?>
					</div>
					<div class="social">
						<?if($arItem["PROPERTIES"]["FACEBOOK"]["VALUE"]):?>
							<div class="item">
								<a target="_blank" class="sbtnf sbtnf-rounded color color-hover icon-facebook" href="<?=$arItem["PROPERTIES"]["FACEBOOK"]["VALUE"]?>"></a>
							</div>
						<?endif?>
						<?if($arItem["PROPERTIES"]["TWITTER"]["VALUE"]):?>
							<div class="item">
								<a target="_blank" class="sbtnf sbtnf-rounded color color-hover icon-twitter" href="<?=$arItem["PROPERTIES"]["TWITTER"]["VALUE"]?>"></a>
							</div>
						<?endif?>
						<?if($arItem["PROPERTIES"]["GMAIL"]["VALUE"]):?>
							<div class="item">
								<a target="_blank" class="sbtnf sbtnf-rounded color color-hover icon-gplus" href="<?=$arItem["PROPERTIES"]["GMAIL"]["VALUE"]?>"></a>
							</div>
						<?endif?>
						<?if($arItem["PROPERTIES"]["IN"]["VALUE"]):?>
							<div class="item">
								<a target="_blank" class="sbtnf sbtnf-rounded color color-hover icon-linkedin" href="<?=$arItem["PROPERTIES"]["IN"]["VALUE"]?>"></a>
							</div>
						<?endif?>
					</div>
				</div>
				<!-- .employee-hover -->
			</div>
			<!-- .employee -->
	<?endforeach;?>
</div>