<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$default_db = 'mysql';
	$db = 'guest';
	
	//Подключаемся к дефолтной бд, чтобы создать позже свою
	$mysqli = new mysqli ($host, $username, $password, $default_db);
	
	$db_selected = mysqli_select_db ($mysqli, $db);
	
	if (!$db_selected)
	{
		$sql = "CREATE DATABASE IF NOT EXISTS $db";
		if (mysqli_query($mysqli, $sql))
			echo "База данных $db успешно создана!\n";
		else
			die ("Ошибка при создании базы данных: " . mysql_error() . "\n");
	}
	
	//Закрываем соединение с $default_db и создаем с $db
	mysqli_close ($mysqli);
	$mysqli = new mysqli ($host, $username, $password, $db);
		if ($mysqli->connect_errno)
		{
			die ('Ошибка! Не удалось подключиться к базе данных!' . $mysqli->connect_errno);
		}
	

	
	
	
	$sql = "CREATE TABLE IF NOT EXISTS `user_data` (
		   `id` int(11) unsigned NOT NULL auto_increment,
		   `username` varchar(255) NOT NULL default '',
		   `email` varchar(255) NOT NULL default '',
		   `homepage` varchar(255) NOT NULL default '',
		   `ip` varchar(255) NOT NULL default '',
		   `browser` varchar(255) NOT NULL default '',
		   `msg` text(65535) NOT NULL default '',
		   `send_time` varchar(255) NOT NULL default '',
		   PRIMARY KEY  (`id`)
		   ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";

   mysqli_query($mysqli, $sql);
   
   
   
?>