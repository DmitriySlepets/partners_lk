<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("”правление пользовател€ми");
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<?$APPLICATION->IncludeComponent(
	"codeking:list.users", 
	".default", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>