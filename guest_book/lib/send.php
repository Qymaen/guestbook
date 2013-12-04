<?php
	session_start();
	require_once "check.php";
	require_once "db_data.php";


	
	//Страница доступна только при отправке запроса
	if 	(!$_POST)
		die ('Ошибка отправки данных');
	
		
	$_POST['name'] = filter_value($_POST['name']);
	$name = $_POST['name'];
	
	$_POST['email'] = filter_value($_POST['email']);
	$email = $_POST['email'];
	
	$_POST['homepage'] = filter_value($_POST['homepage']);
	$homepage = $_POST['homepage'];
	
	$_POST['msg'] = filter_value($_POST['msg']);
	$msg = $_POST['msg'];
	
	
	$_SERVER['HTTP_USER_AGENT'] = filter_value($_SERVER['HTTP_USER_AGENT']);
	$browser = $_SERVER['HTTP_USER_AGENT'];
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$send_time = date("Y-m-d H:i:s");
	$captcha_user = $_POST['captcha'];
	$captcha_rand = $_SESSION['rand'];
	
	//Проверка капчи
	if (isset($captcha_user) && ($captcha_user != ""))
	{
		if (($captcha_rand == $captcha_user) && ($captcha_rand != ""))
			//echo "Код подтвержения верный <br>";
			echo "";
		else
			die ('Неверно введен код подтверждения <br>');
	}
	else
		die ('Поле Подтверждения обязательно! <br>');
	

	

	
	
	//Проверка email
	if(!empty($email))
	{
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", $email))
			die ($email. "  -   Неверно введен E-mail. Введите его в виде Vasya97@mail.ru");
		
		//else
			//echo $email. "  -   Правильный email. <br>";   
		
	}
	else
	   die ("Вы не ввели email :( <br>");    
	
	//Проверка имени
	if(!empty($name))
	{
		if(preg_match("/[^a-zA-Z0-9 ]/i", $name))
			die ($name. "  -   Неверно введено имя. Оно может содержать только цифры и буквы латинского алфавита.");
		
		//else
			//echo $name. "  -   Правильное имя. <br>";   
		
	}
	else
	   die ("Вы не ввели имя :(<br>"); 	
	
	//Проверка комментария	
	if(!empty($msg))
	{
		$msg = validate_text($msg);
		//echo "$msg <br>";
	}
	else
	   die ("Вы не ввели комментарий :( <br>");
	   
	
	//Проверка homepage
	if(!empty($homepage))
	{
		if(!preg_match("/((?:https?\:\/\/|www\.)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)/i", $homepage))
			die ($homepage. "  -   Неверно введен homepage. Введите его в виде <b>http://www.mysite.ru</b> или <b>www.mysite.ru</b>");
		
		//else
			//echo $homepage. "  -   Правильный homepage. <br>";   
		
	}
	else
	{
	   echo "Вы не ввели homepage :(<br>";
	   $homepage = "";
	}
	
	
	
	
	
	//Добавляем данные в БД
	$mysqli = new mysqli ($host, $username, $password, $db);
		if ($mysqli->connect_errno)
		{
			die ('Ошибка! Не удалось подключиться к базе данных!' . $mysqli->connect_errno);
		}
		
		
		
		
	$sql = 	"INSERT INTO user_data (username, email, homepage, msg, ip, browser, send_time) 
			 VALUES ('$name', '$email', '$homepage', '$msg', '$ip', '$browser', '$send_time')";
			 
	if (!mysqli_query($mysqli,$sql))
	{
		die('Error: ' . mysqli_error($mysqli));
	}
	else
	{
		echo "Сообщение успешно отправлено!";		
				
	}		 
	
	mysqli_close($mysqli);
	//header ('Location: ' . $_SERVER['HTTP_REFERER']);
	
	

	
?>