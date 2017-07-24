<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style>
	*{
		margin: 10px;
	}

		table {
			border-collapse: collapse; /* Отображать двойные линии как одинарные */
		}
		thead {
			background: #d3dce3; /* Цвет фона */
			text-align: left; /* Выравнивание по левому краю */
		}
		td, th {
			border: 1px solid #800; /* Параметры границы */
			padding: 4px; /* Поля в ячейках */
		} 

	</style>	

	<form action="table.php" method="POST">
		<lable>Введите название базы содержимое которой вы хотите увидеть и нажмите Enter</lable>
		<input type="text" name="nameBase">
	</form>


	<?php
	$nameBase = trim(strip_tags($_POST['nameBase']));
	$link = mysql_connect('localhost', 'root');

	if (!empty($nameBase)){
	if (!$link) {
		die('Ошибка соединения: ' . mysql_error());
	}
	else { echo "";}
	
	$sql = "SHOW TABLES FROM $nameBase";
	$result = mysql_query($sql);

	if (!$result) {
		echo "Ошибка базы, не удалось получить список таблиц\n";
		echo 'Ошибка MySQL: ' . mysql_error();
		exit;
	}

	while ($row = mysql_fetch_row($result)) {
		echo "<br>Таблица в $nameBase: <a href=\"?nameBase=$nameBase&nameTable=".$row[0] ."\"> $row[0]</a><br>";
	}
	} 
 
  $nameTable = $_GET['nameTable'];
  $nameBase = $_GET['nameBase'];

  if ($nameTable and $nameBase){
  $pdo = new PDO("mysql:host 	= localhost; dbname=$nameBase; charset = utf8", "root");
	$sql = "DESCRIBE $nameTable";
	$stmt = $pdo -> query ($sql);
  // var_dump( $nameTable);



	?>




	<table>
		<thead>
			<tr>
				<td>Field</td>
				<td>Type</td>
				<td>Null</td>
				<td>Key</td>
				<td>Default</td>
				<td>Extra</td>
			</tr>
		</thead>

		<?
		foreach ($stmt as $row) {
 	// echo( "<tr> <td> $row[0] </td><td>$row[1] </td><td>$row[2]</td> <td>$row[3]</td><td> $row[4]</td><td> $row[5]</td> </tr>");
			echo "<tr>";
			for ($i=0; $i < 6 ; $i++) { 
				echo( "<td> <a href=\"?nameBase=$nameBase&nameTable=$nameTable&nameCell=". $row[$i] . "\"> $row[$i] </a></td>");
			}
			echo "</tr>";

		}


$nameCell = $_GET['nameCell'];
echo "<p>Кликните мышкой на ссылку в столбце Field для действием над строкой</p>";
// var_dump($_POST);
// var_dump($nameCell);

if ($nameCell){


if ($_POST['del']){
// Удаляем строку в таблице
$sql = "ALTER TABLE $nameTable DROP COLUMN $nameCell";
$pdo -> query ($sql); 
echo "<br>";
echo "Вы удалили в таблице $nameTable поле:";
echo "<br>";
echo($nameCell);


}
else if ($_POST['editNameCell']){

	?>

<form action="" method="POST">
<lable>Введите новое название поля</lable>
<br>
<input type="text" name = 'newNameCell'>
<br>
<lable>Введите новый тип (INT, VARCHAR, TEXT, DATE)</lable>
<br>
<input type="text" name = 'newTypeCell'>
<br>
<input type="submit" value="Изменить">		
<?

}

if ($_POST['newNameCell'] and $_POST['newTypeCell']){
	$newNameCell = $_POST['newNameCell'];
  $newTypeCell = $_POST['newTypeCell'];
	echo "ok";
	$sql = "ALTER TABLE $nameTable CHANGE $nameCell $newNameCell $newTypeCell NOT NULL DEFAULT 0";
  $pdo -> query ($sql); 
}
// var_dump($_POST);

		?>
	</table>
	

<form action="" method = "post">
	<input type="submit" value="Удалить поле" name ="del" >
	<input type="submit" value="Изменить название поля или тип" name ="editNameCell">
	<input type="submit" value="Обновить таблицу" name ="update">

<!-- 	<input type="submit" value="Изменить тип поля" name ="editTypeCell"> -->
</form>


<?
}

}

?>
</body>
</html>