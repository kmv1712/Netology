<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php 

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
			$name = "test.php?name=test\ $v";
			$str = str_replace (" ", "", $name);
			echo "<a href='$str'>" . "$v" .'</a>'. "<br>";
		}
	}

	?>

	
</body>
</html>

