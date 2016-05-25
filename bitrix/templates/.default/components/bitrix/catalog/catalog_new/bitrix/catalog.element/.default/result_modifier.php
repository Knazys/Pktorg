<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();?>

<?
$APPLICATION->SetPageProperty("body_class", "page-catalog-post");
$APPLICATION->SetPageProperty("section_class_html", "class=\"catalog-posts catalog-post\"");
$APPLICATION->SetPageProperty("h1_title_html", "<h1>".$arResult["NAME"]."</h1>");

$APPLICATION->AddChainItem('Каталог','/catalog/');

if(!empty($arResult["SECTION"]["PATH"]) && is_array($arResult["SECTION"]["PATH"]))
{
	foreach($arResult["SECTION"]["PATH"] as $val)
	{
		if(!empty($val["NAME"]) && !empty($val["SECTION_PAGE_URL"]))
		{
			$APPLICATION->AddChainItem($val["NAME"],$val["SECTION_PAGE_URL"]);
		}
	}
}

$APPLICATION->AddChainItem($arResult["NAME"],'');
?>