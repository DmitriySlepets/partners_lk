<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>



<div class = "kk_new_partner">

	<input id = "NAME" type="text" placeholder = "��������">
	<input id = "LAST_NAME" type="text" placeholder = "������ ��������">
	<input id = "EMAIL" type="text" placeholder = "E-mail ��������">
	<input id = "LOGIN" type="text" placeholder = "����� ��������">
	<input id = "PASSWORD" type="text" placeholder = "������ ��������">
	
	<button onclick = "create_partner();">�������� ��������</button>
	
</div>	
	
<br/><br/>

<div class = "kk_users_spisok">
	
	<table class = "kk_table_users_spisok" border="1">
	<tr>
		<th>������ ��������</th>
		<th>��������</th>
		<th>�����</th>
		<th>����� ����������� �����</th>
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
