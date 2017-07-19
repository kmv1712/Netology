<?php
require_once 'core/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
error_reporting(0);
if ($_SESSION['user']['role'] == 'user')
  {
	echo "<h2>Здравствуйте " . getAuthorizedUser()['name'] . ", выберите тест: </h2>";
  echo "<a href = admin.php> Добавить тест  или удалить тест <br> </a>"; 
}


	if ($_POST['guest']) {
		$guest = trim(strip_tags($_POST['guest']));
		echo "<h2>Здравствуйте $guest, выберите тест: </h2>";
	}

	$files = scandir('test'); 
	// echo '<pre>';
	// echo var_dump($files);
	// echo '</pre>';
	$elementArray = count($files);
 // echo $elementArray;
	$elementTest = count($files) + 2;
 // echo  $elementTest;

	foreach ($files as $k => $v) {
		if ($k < $elementTest && $k > 1) {
			$name = "test.php?name=test/ $v";
			$str = str_replace (" ", "", $name);
			echo "<a href='$str'>" . "$v" .'</a>'. "<br>";
		}
	}

	?>




<?php
error_reporting(0);
 if ($_SESSION['user']['role'] == 'user'){
echo "<br>";
	 echo "<a href=logout.php>Выход</a>";
	}
	 ?>
</body>
</html>

