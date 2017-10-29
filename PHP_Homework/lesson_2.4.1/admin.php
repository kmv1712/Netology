<?php ob_start(); ?>
<?php
require_once 'core/functions.php';

if (!isAuthorized()) {
    redirect('');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
	<input type="file" name="myfile" ><br/>
		<input type="submit" value="Добавить">
		<br>
		<br>

		<input type="file" name="delete" ><br/>
		<input type="submit" value="Удалить">
	</form>

	<?php 
	// error_reporting(E_ALL);
	// echo '<pre>';
	// echo print_r($_FILES);
	// echo '</pre>';
	if (isset($_FILES['myfile']) && !empty($_FILES['myfile']['name']))
	{
		$name = __DIR__. '/test/  '. $_FILES["myfile"]["name"];
		$str = str_replace (" ", "", $name);
		if ($_FILES["myfile"]["error"] == UPLOAD_ERR_OK &&
			move_uploaded_file($_FILES["myfile"]["tmp_name"], $str))
		{
			echo "Файл с тестом загружен";
		  header( "Location: list.php" , TRUE, 302);
		}
		else
		{
			echo "Ошибка: Файл с тестом не загружен";
		}
	}

if (isset($_FILES['delete']))
{
unlink ( __DIR__ . '/test/' . $_FILES['delete']['name']);
}

	?>

	<a href="list.php">Перейти к списку тестов</a>

</body>
</html>
