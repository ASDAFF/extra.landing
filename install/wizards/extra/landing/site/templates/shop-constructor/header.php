<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!doctype html>
<html>
<head>
  <meta charset="<?=LANG_CHARSET?>">
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead();?>
  <meta name="author" content="itembridge.com">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
  
  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

  <!-- Plagins CSS -->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/buttons/buttons.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/buttons/social-icons.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jslider.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/settings.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/animate.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/video-js.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/morris.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/royalslider/royalslider.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/royalslider/skins/minimal-white/rs-minimal-white.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/layerslider/layerslider.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ladda.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/datepicker.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.scrollbar.css">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">

  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/customizer/pages.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/customizer/home-pages-customizer.css">

  <!-- IE Styles-->
  <link rel='stylesheet' href="<?=SITE_TEMPLATE_PATH?>/css/ie/ie.css">
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel='stylesheet' href="<?=SITE_TEMPLATE_PATH?>/css/ie/ie8.css">
  <![endif]-->
</head>
<body class="fixed-header">
<?$APPLICATION->ShowPanel();?>
<div class="page-box">
	<div class="page-box-content">
		<header class="header header-two">
		  <div class="header-wrapper">
			<div class="container">
			  <div class="row">
				<div class="col-xs-6 col-md-2 col-lg-3 logo-box">
				  <div class="logo">
					<a href="<?=SITE_DIR?>">
					  <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-new.png" class="logo-img" alt="">
					</a>
				  </div>
				</div><!-- .logo-box -->
				
				<div class="col-xs-6 col-md-10 col-lg-9 right-box">
				  <div class="right-box-wrapper">
					<div class="header-icons">
					<!--
					  <div class="search-header hidden-600">
						<a href="#">
						  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
							<path d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
							s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
							s4,1.794,4,4S8.206,10,6,10z"></path>
							<image src="<?=SITE_TEMPLATE_PATH?>/img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
						  </svg>
						</a>
					  </div>
					  -->
					  <div class="phone-header hidden-600">
						<a href="#">
						  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
							<path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
							c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
							M11.001,12H5V2h6V12z"></path>
							<image src="<?=SITE_TEMPLATE_PATH?>/img/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
						  </svg>
						</a>
					  </div><!-- .phone-header -->
					</div><!-- .header-icons -->
					
					<div class="primary">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "top_main", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
					</div><!-- .primary -->
				  </div>
				</div>
				
				<div class="phone-active col-sm-9 col-md-9">
				  <a href="#" class="close"><span><?=GetMessage("CLOSE");?></span></a>
				  <span class="title"><?=GetMessage("CALL_US");?></span> <strong><?$APPLICATION->IncludeFile(SITE_DIR . "include/phone.php", Array(), Array("MODE"=>"html"));?></strong>
				</div>
				<!--
				<div class="search-active col-sm-9 col-md-9">
				  <a href="#" class="close"><span>close</span></a>
				  <form name="search-form" class="search-form">
					<input class="search-string form-control" type="search" placeholder="Search here" name="search-string">
					<button class="search-submit">
					  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						<path fill="#231F20" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
						s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
						s4,1.794,4,4S8.206,10,6,10z"></path>
						<image src="<?=SITE_TEMPLATE_PATH?>/img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
					  </svg>
					</button>
				  </form>
				</div>
				-->
			  </div><!--.row -->
			</div>
		  </div><!-- .header-wrapper -->
		</header><!-- .header -->