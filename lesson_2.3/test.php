<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	
	ficaption {
		top: 380px;
		position: absolute;
		align-content: center;
		left: 243px;
	}

	p {
		top: 426px;
		position: absolute;
		align-content: center;
		left: 181px;
	}
</style>
<body>

	<?php 
  // error_reporting(E_ALL);
  // echo $_GET['name'];
	$list = $_GET['name'];

	$textJson = file_get_contents($list);
	$textJson = json_decode ( $textJson, true);
	// echo '<pre>';
	// echo print_r($textJson);
	// echo '</pre>';
	?>

	<h3><?php echo $textJson[0]["nameTest"]; ?></h3>


	<form action="" method="POST">	
		<label> Введите ваше имя: <input type="text" size="40" name = "name"></label>
		<?php 
		foreach ($textJson as  $k=>$v) {
			echo '<fieldset>';
			$textJsonK = $textJson["$k"]["quetion"];
      // echo "$textJsonK" . '<br>';
			echo '<legend>'."$textJsonK".'</legend>';

			foreach ($textJson[$k]["version"] as  $value) {
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
	$name = $_POST['name'];

	if (empty( $name)) {
		echo "<br />";
		echo 'Введите ваше имя';
		exit(1);
	}
	else {
		if ($answerOne == $textJson[0][answer] && $answertwo ==$textJson[1][answer]){
			echo " $name все ответы верны, вы молодец!";
		  $point = 5;
		  }
		else {
			if ($answerOne == $textJson[0][answer] && $answertwo != $textJson[1][answer]){
				echo " $name вы ошиблись во втором вопросе";
				$point = 4;}
			else {
				if ($answerOne != $textJson[0][answer] && $answertwo == $textJson[1][answer]){
					echo " $name вы ошиблись в первом вопросе";
				  $point = 4;
				}
				else {
					echo " $name вы ошиблись во всех вопросах";
					$point = 3;
				}
			}
		}
	}

// echo "<pre>";
//  print_r($_SERVER);
//  echo "</pre>";

	?>
	<br>
	<figure>
		<img height="300px" src="png/Certificate.png">
		<ficaption><?php echo "$name"; ?></ficaption>	
		<p><?php echo "Вы заработали оценку $point"; ?></p>	
	</figure>


</body>
</html>

