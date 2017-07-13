<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		table { 
			border-spacing: 0;
			border-collapse: collapse;
		}

		table td, table th {
			border: 1px solid #ccc;
			padding: 5px;
		}

		table th {
			background: #eee;
		}

	</style>
</head>
<body>

	<?php
	$pdo = new PDO("mysql:host 	= localhost; dbname=tasks; charset = utf8", "root");
	$sql = "SELECT * FROM tasks";

	// echo $_GET['del'];
	if (isset($_GET['del'])) {
		$del = intval($_GET['del']);
		$query =  "delete from tasks where (id='$del')";
		$del = $pdo -> query ($query); 
	}
	
// echo $_GET['done'];
	if (isset($_GET['done'])) {
		$done = intval($_GET['done']);
		$query =  "UPDATE tasks SET is_done ='2' WHERE id='$done'";
		$done = $pdo -> query ($query); 
	}



	// 	if (isset($_GET['edit'])) {
	// 	$edit = intval($_GET['edit']);
	// 	echo "<form method=POST>";
	// 	echo "<input type=text name=input placeholder=Введите новое описание>";
	// 	echo "<input type=submit name=save value=Сохранить>";
	// 	echo "</form>";
	// 	$text = $_POST["input"];
	// 	$query =  "UPDATE tasks SET is_done ='$text' WHERE id='$edit'";
	// 	$edit = $pdo -> query ($query); 
	// }
	?>


	<body cz-shortcut-listen="true"><h1>Список дел на сегодня</h1>
		<div style="margin-bottom: 20px;">
			<form method="POST">
				<input type="text" name="description" placeholder="Описание задачи" value="">
				<input type="submit" name="save" value="Добавить">
			</form>
		</div>
		<?php 
		if (isset($_POST["description"])) {
			$description = $_POST["description"];
			$is_done = 1;
			$date_added = date("Y-m-d H:i:s");
			$sql = "INSERT INTO `tasks` (`id`, `description`, `is_done`, `date_added`) VALUES ('','$description','$is_done','$date_added') ";
			$stmt = $pdo -> query ($sql); 
		}
		?>	

		<table>
			<tbody>
				<tr>
					<th>Описание задачи</th>
					<th>Дата добавления</th>
					<th>Статус</th>
					<th></th>
					<th></th>
				<!-- 	<th></th> -->
				</tr>
				<?php 
				$sql = "SELECT * FROM tasks";
				$stmt = $pdo -> query ($sql); 
				if ($is_done == 1) {
					$is_done = "В процессе";
				}


				foreach ($stmt as $row) {
					echo "<tr>";
					echo "<td>" . $row["description"] . "</td>";
					echo "<td>" . $row["date_added"] . "</td>";
					if ($row["is_done"] == 1) { $row["is_done"] = 'В процессе';} 
					else {$row["is_done"] = 'Выполнено';}
					echo "<td>" . $row["is_done"] . "</td>";
					// echo "<td><a name=\"edit\" href=\"lesson_4.2.php?edit=".$row["id"]."\">Изменить</a></td>";
					echo "<td><a name=\"done\" href=\"lesson_4.2.php?done=".$row["id"]."\">Выполнить</a></td>";
					echo "<td><a name=\"del\" href=\"lesson_4.2.php?del=".$row["id"]."\">Удалить</a></td>";
					echo "</tr>";		
				}	

				?>



			</tbody>
		</table>
	</body>
	</html>