<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'guest';
	
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
		   `ip-address` varchar(255) NOT NULL default '',
		   `browser` varchar(255) NOT NULL default '',
		   `text` text(65535) NOT NULL default '',
		   `send_time` varchar(255) NOT NULL default '',
		   PRIMARY KEY  (`id`)
		   ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";

   mysqli_query($mysqli, $sql);
   
   
?>