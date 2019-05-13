<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<?php

	$fio = iconv('utf-8','windows-1251',$_POST['fio']);
	$tel = iconv('utf-8','windows-1251',$_POST['tel']);
	$mail = iconv('utf-8','windows-1251',$_POST['mail']);
	$date = iconv('utf-8','windows-1251',$_POST['date']);
	
	$subject = iconv('utf-8','windows-1251',$_POST['subject']);
	
	if($date != ""){
		$message = "Дата: $date </br> Фио: $fio <br/> Телефон: $tel <br/> E-mail: $mail";
	}else{
		$message = "Фио: $fio <br/> Телефон: $tel <br/> E-mail: $mail";
	}
	$headers_mail = "Content-type: text/html; charset=Windows-1251 \r\n";
    $headers_mail .= "From: info@pmexpert.ru\r\n";
	
	mail("info@pmexpert.ru", $subject, $message, $headers_mail);

?>