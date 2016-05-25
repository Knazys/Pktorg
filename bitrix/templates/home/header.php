<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>

<link href="html/css/jresp.css" rel="stylesheet" type="text/css">
<link href="html/css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="html/js/html5.js"></script>
<script type="text/javascript" src="html/js/jquery.js"></script>
<script type="text/javascript" src="html/js/jcarousel.js"></script>
<script type="text/javascript" src="html/js/scripts.js"></script>

<meta name='yandex-verification' content='7d85bbf98b382b25' />
</head>

<body id="page-home">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63450812-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="main-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="container">
            
            <header id="header">
				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/company_name.php",
					Array(),
					Array("MODE"=>"html")
				);
				?>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "head", array(
					"ROOT_MENU_TYPE" => "top",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "",
					"USE_EXT" => "Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => ""
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);?>
            </header>