<?php
		
	//require_once "lib/db.php";
	require_once "lib/form.php";
	
	error_reporting(0);

	
	
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
		<h1>Гостевая книга</h1>
	</div>
	
	<div id = "wrapper">		
	
		<div id = "form">
			<?php addForm(); ?>
		</div>
		
		
		<div id = "comment">
			<form action = "lib/send.php" method = "post" name = "send">
				<fieldset>
					<legend>Добавить комментарий</legend>
					<p><input type = "text" name = "name" id = "name" size = "30" maxlength = "30">
						<label for = "name">Имя<sup>*</sup></label></p>
					
					<p><input type = "text" name = "email" id = "email" size = "30" maxlength = "50">
						<label for = "email">E-mail<sup>*</sup></label></p>
					
					<p><input type = "text" name = "homepage" id = "homepage" size = "30" maxlength = "50">
						<label for = "homepage">Сайт</label></p>
					
					<p><img id = "captcha_pic" src = "lib/captcha.php" alt = "Captcha"></p>
						<p><input type = "text" name = "captcha" id = "captcha" size = "30" maxlength = "5">
						<label for = "captcha">Код подтверждения<sup>*</sup></label></p>
						
						
					<p><label for = "msg">Сообщение:<sup>*</sup></label></p>
						<textarea cols = "90" rows = "5" name = "msg"></textarea>
					
					<p><input id = "submit" type = "submit" value = "Отправить" ></p>
					<p><sup>*</sup> - поля, обязательные для заполнения</p>
				</fieldset>
			</form>
		</div>
	</div>
	
	<div id = "footer">
		<a href = "mailto:Dmitry.Sheludko@gmail.com">Дмитрий Шелудько</a>
	</div>

</body>
</html>