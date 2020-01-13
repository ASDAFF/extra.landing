<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"site_create.php", // Create site
			"files.php", // Copy bitrix files
			"template.php", // Install template
		),
	),
	
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"banners.php",
			"catalog.php",
			"facts.php",
			"horizontal.php",
			"media.php",
			"news.php",
			"partners.php",
			"portfolio.php",
			"price.php",
			"services.php",
			"slider.php",
			"staff.php",
			"topics.php"
		),
	)
);
?>