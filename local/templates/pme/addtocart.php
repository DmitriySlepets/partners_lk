<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
?>
<?

	CModule::IncludeModule("sale");
	
	CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
	
	$coursetext = iconv('utf-8','windows-1251', $_POST['coursedate']);
	$pieces = explode(",", $coursetext);
	$date = trim($pieces[0]);

	$id_course = 0;
	$arFilter = array("NAME" => 'Сертификация на степень «Эксперт в управлении проектами» ('.$date.'%');
	$res = CIBlockElement::getList(array(), $arFilter,array('ID', 'CATALOG_QUANTITY', 'ACTIVE'));  
	echo $date;
		
	while($ob = $res->GetNextElement())
	{
		$arr_corse = $ob->GetFields();
		if($arr_corse['ACTIVE'] == 'Y'){
		    $id_course = $arr_corse['ID'];
		}
	}
		
	Add2BasketByProductID(
		$id_course,
		1,
		false
	);
	
	
?>	