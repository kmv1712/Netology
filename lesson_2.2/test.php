<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
  // error_reporting(E_ALL);
  // echo $_GET['name'];


	$textJson = file_get_contents($_GET['name']);

  if (strlen($textJson) > 1) 
{	$textJson = json_decode ( $textJson, true);
	// echo '<pre>';
	// echo print_r($textJson);
	// echo '</pre>';
	?>

<!-- 	<h3><?php echo $textJson[0]["nameTest"]; ?></h3> -->


	<form action="" method="POST">	
		<?php 

		foreach ($textJson as  $k=>$v) {
			echo '<fieldset>';
			$textJsonK = $v["quetion"];
      // echo "$textJsonK" . '<br>';
      
			echo '<legend>'."$textJsonK".'</legend>';

			foreach ($v["version"] as  $value) {
				echo '<label> <input type="radio"'."name=q$k".' value = '."$value".'>'. "$value" . '</label>';
			}
			echo '</fieldset>';		
		}
		?>

		<input type="submit" value="Отправить">
	</form>

	<?php 
    // echo "<br>";
    // echo $_POST['q1']."<br>";
    // echo $_POST['q2']."<br>";
    // echo $textJson[0][answer]."<br>";
    // echo $textJson[1][answer];
	$answerOne = $_POST['q0'];
	$answertwo = $_POST['q1'];

	echo "<br>";
	if ($answerOne == $textJson[0][answer] && $answertwo ==$textJson[1][answer])
		echo "Все ответы верны, вы молодец!";
	else {
		if ($answerOne == $textJson[0][answer] && $answertwo != $textJson[1][answer])
			echo "Вы ошиблись во втором вопросе";
		else {
			if ($answerOne != $textJson[0][answer] && $answertwo == $textJson[1][answer])
				echo "Вы ошиблись в первом вопросе";
			else {
				echo 'Ошиблись во всех вопросах';
			}
		}
	}

}
else {
	echo "Загруженный тест пуст";
}
	?>

</body>
</html>

