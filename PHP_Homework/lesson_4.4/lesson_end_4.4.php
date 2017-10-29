<?php 
include __DIR__ . "/function.php";
include __DIR__ . "/host.php";
// error_reporting(E_ALL);
 ?>
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
getBase();?>
	
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