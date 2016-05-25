<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->AddChainItem('Статьи','/article/');
$APPLICATION->AddChainItem($arResult["NAME"],'');
$APPLICATION->SetPageProperty("h1_title_html", "<h1>".$arResult["NAME"]."</h1>");

?>