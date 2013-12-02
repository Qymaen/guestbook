<?php
		
	//require_once "lib/db.php";

	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href = "css/style.css" type = "text/css" rel = "stylesheet">
	<title>Гостевая книга</title>
</head> 
<body>
	
	<div id = "header">
		<h1>Тестовое задание для NixSolution</h1>
	</div>
	
	<div id = "form">
		
	</div>
	
	
	<div id = "comment">
		<form action = "lib/send.php" method = "post" name = "send">
			<fieldset>
				<legend>Добавить комментарий</legend>
				<p><label for = "name">Имя:</label></p>
					<p><input type = "text" name = "name" id = "name" size = "30" maxlength = "30"></p>
				
				<p><label for = "email">E-mail:</label></p>
					<p><input type = "text" name = "email" id = "email" size = "30" maxlength = "50"></p>
				
				<p><label for = "homepage">Homepage:</label></p>
					<p><input type = "text" name = "homepage" id = "homepage" size = "30" maxlength = "50"></p>
				
				<p><label for = "captcha">Код подтверждения:</label></p>
					<input type = "text" name = "captcha" id = "captcha" size = "30" maxlength = "5">
					<img src = "lib/captcha.php" alt = "Captcha">
					
				<p><label for = "msg">Сообщение:</label></p>
					<textarea cols = "30" rows = "5" name = "msg"></textarea>
				
				<input type = "submit" value = "Отправить" >
			</fieldset>
		</form>
	</div>
			
	<div id = "footer">
		<a href = "mailto:Dmitry.Sheludko@gmail.com">Дмитрий Шелудько</a>
	</div>

</body>
</html>