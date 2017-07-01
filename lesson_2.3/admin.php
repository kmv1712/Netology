<?php  ob_start()?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
		Файл <input type="file" name="myfile" ><br/>
		<input type="submit" value="Отправить">
	</form>

	<?php 
	// error_reporting(E_ALL);
	// echo '<pre>';
	// echo print_r($_FILES);
	// echo '</pre>';
	if (isset($_FILES['myfile']) && !empty($_FILES['myfile']['name']))
	{
		$name = 'test\  '. $_FILES["myfile"]["name"];
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

	?>

	<a href="list.php">Перейти к списку тестов</a>

</body>
</html>
