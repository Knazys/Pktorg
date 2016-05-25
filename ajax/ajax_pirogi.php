<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

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
	}

	if(count($sectID) > 0){
		$arFilter = Array('IBLOCK_ID' => 7, 'GLOBAL_ACTIVE'=>'Y', 'ID' => $sectID);
		$db_list = CIBlockSection::GetList(Array(), $arFilter, true);
		while($ar_result = $db_list->GetNext()){
			$arResult[] = array(
				"ID" => $ar_result['ID'],
				"NAME" => $ar_result['NAME'],
				"LINK" => $ar_result['SECTION_PAGE_URL'],
			);
		}
	}
	
	echo json_encode($arResult);
	die();
}

?>