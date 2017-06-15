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

	if ($_GET['name'])
	{
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
	  // $answerOne = $_POST['q0'];
	  // $answertwo = $_POST['q1'];
				$correctAnswer = 0; 
        $fallsAnswer = 0;

				foreach ($textJson as  $k=>$v) {
      // echo "<br> q$k <br> ";
					$enterAnswer = $_POST["q$k"];
	    // echo "<br> $enterAnswer <br> ";
					$answer = $v["answer"];
			// echo "<br> $answer <br>";
					if ($answer == $enterAnswer) 
					{
						$correctAnswer = $correctAnswer + 1;
				// echo "$correctAnswer";
					}
					else {
						$fallsAnswer = $fallsAnswer + 1;
					}
				}


				$quantityAnswer = $k + 1;
        // echo "<br> $quantityAnswer <br> ";
				if ($quantityAnswer == $correctAnswer) {
					echo "Вы правильно ответили на все вопросы!!!";
				}
				else { 
					if ($correctAnswer == 0) { 
						echo "Вы ошиблись во всех вопросах";
					}
					else {
						echo "Вы правильно ответили на $correctAnswer вопрос и ошиблись в $fallsAnswer!!!";
					}

				}


			} 
			else {
				echo "Загруженный тест пуст";
			}
		}
		else {
			echo "Тест не выбран";
		}


		?>
	</body>
	</html>

