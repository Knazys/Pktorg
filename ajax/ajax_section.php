<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

if(intval($_REQUEST["sect"]) > 0){
	$arFilter = Array("IBLOCK_ID" => 7,'ID'=>intval($_REQUEST["sect"]), 'GLOBAL_ACTIVE'=>'Y');
	$res = CIBlockSection::GetList(Array(), $arFilter, true, array("ID", "NAME", "SECTION_PAGE_URL", "UF_DESC"));
	//$res = CIBlockSection::GetByID(intval($_REQUEST["sect"]));
	if($ar_res = $res->GetNext())
	{
		$arResult["title"] = $ar_res["NAME"];
		if(!empty($ar_res["UF_DESC"]))
			$artmp["description"] = $ar_res["UF_DESC"];
		else
			$artmp["description"] = ' ';
			
		$artmp["link"] = $ar_res["SECTION_PAGE_URL"];
	}
	
	$arFilter = Array('IBLOCK_ID' => 7, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => intval($_REQUEST["sect"]));
	$db_list = CIBlockSection::GetList(Array("SORT" => "ASC"), $arFilter, true, array("ID", "NAME", "SECTION_PAGE_URL", "UF_SUBMENU"));
	while($ar_result = $db_list->GetNext()){
		if($ar_result['UF_SUBMENU'])
			$submenu = 'Y';
		else
			$submenu = 'N';
		
		$arResult["node"][] = array(
			"id" => $ar_result['ID'],
			"name" => $ar_result['NAME'],
			"link" => $ar_result['SECTION_PAGE_URL'],
			"submenu" => $submenu,
		);
	}
	
	if(count($arResult["node"]) <= 0){
		$arResult["description"] = $artmp["description"];
		$arResult["link"] = $artmp["link"];
		$arResult["node"] = false;
	}
	
	echo json_encode($arResult);
	die();
}

if(intval($_REQUEST["pirog"]) > 0){
	$sectID = array();

	$arSelect = Array("ID", "NAME", "PROPERTY_SECTION");
	$arFilter = Array("IBLOCK_ID" => 10, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => intval($_REQUEST["pirog"]));
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		if($arFields["PROPERTY_SECTION_VALUE"] > 0)
			$sectID[] = $arFields["PROPERTY_SECTION_VALUE"];
			
		$arResult["title"] = $arFields["NAME"];
	}

	if(count($sectID) > 0){
		$arFilter = Array('IBLOCK_ID' => 7, 'GLOBAL_ACTIVE'=>'Y', 'ID' => $sectID);
		$db_list = CIBlockSection::GetList(Array("SORT" => "ASC"), $arFilter, true, array("ID", "NAME", "SECTION_PAGE_URL", "UF_SUBMENU"));
		while($ar_result = $db_list->GetNext()){
			if($ar_result['UF_SUBMENU'])
				$submenu = 'Y';
			else
				$submenu = 'N';		
		
			$arResult["node"][] = array(
				"id" => $ar_result['ID'],
				"name" => $ar_result['NAME'],
				"link" => $ar_result['SECTION_PAGE_URL'],
				"submenu" => $submenu,
			);
		}
	}
	
	echo json_encode($arResult);
	die();
}
?>