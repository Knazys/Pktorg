<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "",
	"SECTION_PAGE_URL" => "#SECTION_CODE#/",
	//"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "7",
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);

//dump($aMenuLinksExt);

$parentCode = "";

foreach($aMenuLinksExt as $key => $val)
{
	if($val[3]["IS_PARENT"] == 1 && $val[3]["DEPTH_LEVEL"] == 1)
		$parentCode = $val[1];

	if($val[3]["DEPTH_LEVEL"] == 2)
	{
		$aMenuLinksExt[$key][1] = $parentCode.$val[1];
		$aMenuLinksExt[$key][2][0] = $parentCode.$val[1];
	}
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>