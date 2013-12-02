<?php
	
	function filter_value($value)
	{
		$value = trim($value);
		$value = htmlspecialchars($value);
		$value = mysql_escape_string($value);
		return $value;
	}
	
	
	//Добавляем данные в БД
	/*
	function add_msg()
	{
		$host = 'localhost';
		$username = 'root';
		$password = '';
		$db = 'guest';
		
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
			mysqli_query($mysqli, $sql);
			echo "1 record added";		 
		}		 
		
		mysqli_close($mysqli);
		header ("Location: index.php");
	}
	
	*/
	
	
?>