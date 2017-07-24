
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	input, lable, p, a{
		margin: 10px;
	}
form{
	  outline: 1px solid #000;
    margin: 10px;
    width: 60%;
}
</style>
<body>
	<?php 
// test();
	if ($_POST['nameBase']) {
		$_POST['nameBase'] = trim(strip_tags($_POST['nameBase']));
		// echo $_POST['nameBase'];

		$link = mysql_connect('localhost', 'root');
		if (!$link) {
			die('Ошибка соединения: ' . mysql_error());
		}
		// else { echo "OK";}
		$nameBase = $_POST['nameBase'];
		$sql = "CREATE DATABASE $nameBase";
		mysql_query($sql, $link);
		mysql_query($sql, $link);
	}


$enterNameBase = trim(strip_tags($_POST['enterNameBase']));
// echo "$enterNameBase";
$nameTable = trim(strip_tags($_POST['nameTable']));
// echo "$nameTable";

if (!empty($enterNameBase) and !empty($nameTable) ){
$pdo = new PDO("mysql:host 	= localhost; dbname=$enterNameBase; charset = utf8", "root");
$sql ="CREATE TABLE $nameTable ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `estimation` float NOT NULL, `budget` tinyint(4) NOT NULL DEFAULT '0', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query ($sql); }
else {echo "<p>Заполните поля</p>";}

	



	?>
 <h2>Форма для создания базы данных</h2>
	<form action="lesson_end_4.4.php" method="POST" >
		<lable>Введите название новой базы данных</lable>
		<br>
		<input type="text" name="nameBase">
		<br>
		<input type="submit" value ="Создать базу"  >	
	</form>
 <h2>Форма для создания таблиц в созданных базах данных</h2>
	<form action="lesson_end_4.4.php" method="POST">
		<lable>Введите название базы данных в которой будете создавать новую таблицу</lable>
		<br>
		<input type="text" name="enterNameBase">
		<br>
		<lable>Введите название новой таблицы</lable>
		<br>
		<input type="text" name="nameTable">
		<br>
		<input type="submit" value ="Создать таблицу" >	
	</form>

<a href="table.php">Перейти к содердимому таблицы</a>



</body>
</html>