<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
    <script type="text/javascript" src="/bitrix/templates/furniture_pink/jquery-1.11.1.min.js"></script>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />

	<!--[if lte IE 6]>
	<style type="text/css">

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop');
		}

		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="head">
    <div id="top">
        <img id="topimg" src="http://localhost:8888/bitrix/templates/furniture_pink/images/1.png" >
    </div>
	<div id ="navigator">
		<img id="navi" src="http://localhost:8888/bitrix/templates/furniture_pink/images/2.png">
    </div>
    <h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
