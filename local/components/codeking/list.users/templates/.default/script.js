function create_partner(){
	
	var name = document.getElementById('NAME').value;
	var last_name = document.getElementById('LAST_NAME').value;
	var mail = document.getElementById('EMAIL').value;
	var login = document.getElementById('LOGIN').value;
	var pass = document.getElementById('PASSWORD').value;

	if(name == ""){alert('”кажите название партнера.'); return false;}
	if(last_name == ""){alert('”кажите полное название партнера.'); return false;}
	if(mail == ""){alert('”кажите e-mail партнера.'); return false;}
	if(login == ""){alert('”кажите логин партнера.'); return false;}
	if(pass == ""){alert('”кажите пароль партнера.'); return false;}

	$.ajax({
		type:'post',//тип запроса: get,post либо head
		url:'kk_create_user.php',//url адрес файла обработчика
		data:"NAME=" + name + "&LAST_NAME=" + last_name + "&EMAIL=" + mail + "&LOGIN=" + login + "&PASSWORD=" + pass,//параметры запроса
		response:'text',//тип возвращаемого ответа text либо xml
		success:function (data) {//возвращаемый результат от сервера
			if(data.length == 1){
				alert("ѕартнер успешно добавлен.");
				location.reload();
			}else{
				alert(data);
			}
		}
	});
	
}