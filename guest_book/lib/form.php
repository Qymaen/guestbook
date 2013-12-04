<?php
	
	//require_once "db_data.php";
	
	//Переменные для вывода с возможностью сортировки
	//$sort_name = 'username';
	//$sort_email = 'email';
	//$sort_send_time = 'send_time';
	

	
	
	
	function addForm()
	{
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
						
	
	
		if (isset($_GET['page']))
			{
				$page = $_GET['page'];
			}	
		else
			$page = 1;
		
		$msg_on_page = 10;	//Количество записей на странице
		$start_from = ($page - 1) * $msg_on_page;
		$sql = "SELECT `username`, `email`, `homepage`, `msg`, `send_time`
				FROM `user_data` 
				ORDER BY $st $d LIMIT $start_from, $msg_on_page";
				
		$result = mysqli_query($mysqli,$sql);
		
			if (!$result)
				{
					die('Error: ' . mysqli_error($mysqli));
				}
			else
				{
							echo "<table class='simple-little-table' cellspacing='0'>
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
	
	
	
	//Pagination
	$sql = "SELECT COUNT(id) FROM user_data";
	$result = mysqli_query($mysqli,$sql);
	
	if (!$result)
			{
				die('Error: ' . mysqli_error($mysqli));
			}
		else
			{
				$row = mysqli_fetch_array($result);
					$total_records = $row[0];
					$total_records = ceil($total_records / $msg_on_page);

					echo "<div id = 'pagination'>";
					for ($i = 1; $i <= $total_records; $i++)
						{
							echo "<a class = 'pager-item' href = 'index.php?page=" . $i . "'>" . $i . "</a>";
						}
					echo "</div>";	
			}		 
	
	mysqli_close($mysqli);		
	

	}
	
	
	//addForm(); echo "<br>";  echo "<br>";

	
?>