<?php error_reporting(0);
session_start(); 
require_once 'core/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	
	ficaption {
		top: 280px;
		position: absolute;
		align-content: center;
		left: 243px;
	}

	p {
		top: 326px;
		position: absolute;
		align-content: center;
		left: 181px;
	}
</style>
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




				<form action="" method="POST">	
					<!-- <label> Введите ваше имя: <input type="text" size="40" name = "name"></label> -->

					<?php 
					foreach ($textJson as  $k=>$v) {
						echo '<fieldset>';
						$textJsonK = $v['quetion'];
		// echo "$textJsonK" . '<br>';

						echo '<legend>'. $textJsonK .'</legend>';

						foreach ($v['version'] as  $value) {
							echo "<label> <input type = radio name = q$k" . ' value = '. $value .'>'. $value . '</label>';
						}
						echo '</fieldset>';		
					}
					?>

					<input type="submit" value="Отправить">
				</form>
				
				<?php 
				$correctAnswer = 0; 
				$fallsAnswer = 0;

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = getAuthorizedUser()['name'];
					if (empty($name)) {
						echo "<br />";
						echo 'Введите ваше имя';
						exit(1);
					}
					else{

						foreach ($textJson as  $k=>$v) {
// echo "<br> q$k <br> ";

							$enterAnswer = $_POST["q$k"];
							if (isset($_POST["q$k"]) && !empty($_POST["q$k"])) {
// echo "<br> $enteAnswer <br> ";
								$answer = $v['answer'];
// echo "<br> $answer <br>";
								if ($answer == $enterAnswer){
									++$correctAnswer;
// echo "$correctAnswer";
								}
								else {
									++$fallsAnswer;
								}
							}

							else {
								$nuberAnswer = ++ $k ;
								echo "Выберите правильный ответ на вопрос № $nuberAnswer <br>";
							}	
						}




						$quantityAnswer = ++ $k ;
// echo "<br> $quantityAnswer <br> ";
						if ($quantityAnswer == $correctAnswer) {
							echo "Вы правильно ответили на все вопросы!!!";
							$point = 5;
						}
						else { 
							if ($correctAnswer == 0) { 
								echo "Вы ошиблись во всех вопросах";
								$point = 3;
							}
							else {
								echo "Вы правильно ответили на $correctAnswer вопрос и ошиблись в $fallsAnswer!!!";
								$point = 4;
							}
						}

        // echo $_POST['name'];
        // $name = $_POST['name'];
if ($name < 15) {

$_SESSION['name'] = getAuthorizedUser()['name'];
$_SESSION['point'] = $point;



echo "<br>";
echo "<img src = Certificate.php>";
}
else {echo '<br> У вас слишком длинное имя';}


					// echo "<br>";
					// echo "<figure>";
					// echo "<img height=300px src=png/Certificate.png>";
					// echo "<ficaption>" . $name . "</ficaption>";
					// echo "<p>" . "Вы заработали оценку: " . $point . "</p>"	;
					// echo "</figure>";
}
}

} 
else {
	echo "Загруженный тест пуст";
	ob_start();
	echo "Тест не выбран";
	http_response_code(404);
	echo 'Cтраница не найдена!';
	exit(1);
}
}

else {
	ob_start();
	echo "Тест не выбран";
	http_response_code(404);
	echo 'Cтраница не найдена!';
	exit(1);
}
// echo '<pre>';
// var_dump($_SERVER);
//   echo '</pre>';

?>


</body>
</html>

