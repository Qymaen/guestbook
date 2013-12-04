<?php

	require_once "db_data.php";
	//Переменные для запроса вывода и сортировки
	$u = 'username';
	$e = 'email';
	$st = 'send_time';
	
	$d = 'DESC';
	$a = 'ASC';
	
	

	$mysqli = new mysqli ($host, $username, $password, $db);
		if ($mysqli->connect_errno)
			die ('Ошибка! Не удалось подключиться к базе данных!' . $mysqli->connect_errno);



	//------------------------------------------------------------------------------------------------------




	if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}	
	else
		$page = 1;
		
	$start_from = ($page - 1) * 25;
	$sql = "SELECT `username`, `email`, `homepage`, `msg`, `send_time`
			FROM `user_data` 
			ORDER BY $st $d LIMIT $start_from, 25";
			
	$result = mysqli_query($mysqli,$sql);
	
		if (!$result)
			{
				die('Error: ' . mysqli_error($mysqli));
			}
		else
			{
						echo "<table border = '1'>
							<tr>
								<th>Имя пользователя</th>
								<th>E-mail</th>
								<th>Homepage</th>
								<th>Комментарий</th>
								<th>Дата добавления</th>
							</tr>";
		
						while ($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" . $row['username'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td>" . $row['homepage'] . "</td>";
								echo "<td>" . $row['msg'] . "</td>";
								echo "<td>" . $row['send_time'] . "</td>";
							}
							
						echo "</table>";
			}		 
	

		
		
	//------------------------------------------------------------------------------------------------------		
	
	
	$msg_on_page = 5;
	$sql = "SELECT COUNT(id) FROM user_data";
	$result = mysqli_query($mysqli,$sql);
	echo mysql_num_rows($result);
	
	/*
	$result = mysqli_query($mysqli,$sql);
	$row = mysql_fetch_row($result);
	$total_records = $row[0];
	$total_records = ceil($total_record / $msg_on_page);
	
	
	for ($i = 1; $i <= $total_records; $i++)
		{
			echo "<a href = 'pagination.php?page=" . $i . "</a>";
		}
	
	
	*/
	mysqli_close($mysqli);		
	
	
	
	
	
	
	
	
	
	
	
	
	
		
?>