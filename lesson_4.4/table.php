<?php ob_start(); 
include __DIR__ . "/function.php";
include __DIR__ . "/host.php";
error_reporting(E_ALL);
?>
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
getList();
getTable();
 ?>
</body>
</html>