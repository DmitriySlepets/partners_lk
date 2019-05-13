<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>



<div class = "kk_new_partner">

	<input id = "NAME" type="text" placeholder = "Название">
	<input id = "LAST_NAME" type="text" placeholder = "Полное название">
	<input id = "EMAIL" type="text" placeholder = "E-mail партнера">
	<input id = "LOGIN" type="text" placeholder = "Логин партнера">
	<input id = "PASSWORD" type="text" placeholder = "Пароль партнера">
	
	<button onclick = "create_partner();">Добавить партнера</button>
	
</div>	
	
<br/><br/>

<div class = "kk_users_spisok">
	
	<table class = "kk_table_users_spisok" border="1">
	<tr>
		<th>Полное название</th>
		<th>Название</th>
		<th>Логин</th>
		<th>Адрес электронной почты</th>
	</tr>
	<?for($i=0; $i<count($arResult["SELECTIONS"]);$i++){?>
	<tr>
		<td><?=$arResult["SELECTIONS"][$i]['LAST_NAME'];?></td>
		<td><?=$arResult["SELECTIONS"][$i]['NAME'];?></td>
		<td><?=$arResult["SELECTIONS"][$i]['LOGIN'];?></td>
		<td><?=$arResult["SELECTIONS"][$i]['EMAIL'];?></td>
	</tr>
    <?}?>
	</table>
	
</div>
