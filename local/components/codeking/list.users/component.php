<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSpecUser = array();
$filter = Array("GROUPS_ID" => Array(33));
$rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $filter);
while ($arUser = $rsUsers->Fetch()) {
  $arSpecUser[] = $arUser;
}

$arResult["SELECTIONS"] = $arSpecUser;

$this->IncludeComponentTemplate();
?>