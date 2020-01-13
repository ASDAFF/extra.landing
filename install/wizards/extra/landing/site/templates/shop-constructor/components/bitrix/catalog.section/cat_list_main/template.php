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
<div class="carousel-box bottom-padding bottom-padding-mini load overflow">
	<div class="title-box no-margin">
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
			<h2 class="title"><?=GetMessage("BEST_SELLERS");?></h2>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="carousel products">
			<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
				?>
				<div class="col-sm-3 col-md-3 product rotation" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
					<div class="default">
						<?$arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 270, "height" => 270), BX_RESIZE_IMAGE_EXACT);?>
						<a class="product-image"><img src="<?=$arImg["src"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>"></a>
						<div class="product-description">
							<div class="vertical">
								<h3 class="product-name"> <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a> </h3>
								<div class="price">
									<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> <?=GetMessage("RUB");?>
								</div>
							</div>
						</div>
					</div>
					<div class="product-hover">
						<h3 class="product-name"> <a><?=$arItem["NAME"]?></a> </h3>
						<div class="price">
							<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> <?=GetMessage("RUB");?>
						</div>
						<?$arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 140, "height" => 140), BX_RESIZE_IMAGE_PROPORTIONAL);?>
						<a class="product-image"><img width="70" src="<?=$arImg["src"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>"></a>
						<?if($arItem["PROPERTIES"]["OPTIONS"]["VALUE"][0]):?>
							<ul>
								<?foreach($arItem["PROPERTIES"]["OPTIONS"]["VALUE"] as $option):?>
								<li><?=$option?></li>
								<?endforeach?>
							</ul>
						<?endif?>
						<!--
						<div class="actions">
						
				  <a href="shop-product-view.html" class="add-cart">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					  <g>
						<path fill="#1e1e1e" d="M15.001,4h-0.57l-3.707-3.707c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.391-0.391,1.023,0,1.414L11.603,4
						  H4.43l2.293-2.293c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L1.602,4H1C0.448,4,0,4.448,0,5s0.448,1,1,1
						  c0,2.69,0,7.23,0,8c0,1.104,0.896,2,2,2h10c1.104,0,2-0.896,2-2c0-0.77,0-5.31,0-8c0.553,0,1-0.448,1-1S15.554,4,15.001,4z
						  M13.001,14H3V6h10V14z"></path>
						<path fill="#1e1e1e" d="M11.001,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C10.001,12.553,10.448,13,11.001,13z"></path>
						<path fill="#1e1e1e" d="M8,13c0.553,0,1-0.447,1-1V8c0-0.553-0.448-1-1-1S7,7.447,7,8v4C7,12.553,7.448,13,8,13z"></path>
						<path fill="#1e1e1e" d="M5,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1S4,7.447,4,8v4C4,12.553,4.448,13,5,13z"></path>
					  </g>
					</svg>
				  </a>
				  <a href="#" class="add-wishlist">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					<path fill="#1e1e1e" d="M11.335,0C10.026,0,8.848,0.541,8,1.407C7.153,0.541,5.975,0,4.667,0C2.088,0,0,2.09,0,4.667C0,12,8,16,8,16
					  s8-4,8-11.333C16.001,2.09,13.913,0,11.335,0z M8,13.684C6.134,12.49,2,9.321,2,4.667C2,3.196,3.197,2,4.667,2C6,2,8,4,8,4
					  s2-2,3.334-2c1.47,0,2.666,1.196,2.666,2.667C14.001,9.321,9.867,12.49,8,13.684z"></path>
					</svg>
				  </a>
				  <a href="#" class="add-compare">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					  <path fill="#1e1e1e" d="M16,3.063L13,0v2H1C0.447,2,0,2.447,0,3s0.447,1,1,1h12v2L16,3.063z"></path>
					  <path fill="#1e1e1e" d="M16,13.063L13,10v2H1c-0.553,0-1,0.447-1,1s0.447,1,1,1h12v2L16,13.063z"></path>
					  <path fill="#1e1e1e" d="M15,7H3V5L0,7.938L3,11V9h12c0.553,0,1-0.447,1-1S15.553,7,15,7z"></path>
					</svg>
				  </a>
				</div>
				-->
						 <!-- .actions -->
					</div>
					 <!-- .product-hover -->
				</div>
				 <!-- .product -->
			<?endforeach?>
		</div>
	</div>
</div>