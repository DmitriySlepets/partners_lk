function create_partner(){
	
	var name = document.getElementById('NAME').value;
	var last_name = document.getElementById('LAST_NAME').value;
	var mail = document.getElementById('EMAIL').value;
	var login = document.getElementById('LOGIN').value;
	var pass = document.getElementById('PASSWORD').value;

	if(name == ""){alert('������� �������� ��������.'); return false;}
	if(last_name == ""){alert('������� ������ �������� ��������.'); return false;}
	if(mail == ""){alert('������� e-mail ��������.'); return false;}
	if(login == ""){alert('������� ����� ��������.'); return false;}
	if(pass == ""){alert('������� ������ ��������.'); return false;}

	$.ajax({
		type:'post',//��� �������: get,post ���� head
		url:'kk_create_user.php',//url ����� ����� �����������
		data:"NAME=" + name + "&LAST_NAME=" + last_name + "&EMAIL=" + mail + "&LOGIN=" + login + "&PASSWORD=" + pass,//��������� �������
		response:'text',//��� ������������� ������ text ���� xml
		success:function (data) {//������������ ��������� �� �������
			if(data.length == 1){
				alert("������� ������� ��������.");
				location.reload();
			}else{
				alert(data);
			}
		}
	});
	
}