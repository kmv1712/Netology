<?php 

header("Content-Type:text/html;charset=UTF8");
include 'config.php';
include 'functions.php';



$templ = $twig -> loadTemplate ('register.html');
echo $templ -> render(array(
	));


/////////////////////////// Регистрация//////////////////////////////////
if ($_POST and !empty($_POST['login']) and !empty($_POST['register'])){
	// print_r($_POST);
	$userLogin = $_POST['login'];
	$userPassword = $_POST['password'];
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT id FROM user WHERE login = '$userLogin'";
	$stmt = $pdo -> query ($sql);
	$coun = $stmt -> rowCount();
	// echo "$coun";
	if ($coun > 0) {
		echo 'Логин занят, придумайте новый логин';
	} else {
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "INSERT INTO user VALUES ('',	'$userLogin' , '$userPassword')";
		$templ = $twig -> loadTemplate ('main_table_task.html');
   	}
}
else 
	{echo "Введите логин, пароль";}
/////////////////////////////////////////////////////////////////////////

// 	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
// 	$userLogin = $_POST['login'];
// 	$userPassword = $_POST['password'];
// 	$sql = "INSERT INTO user VALUES ('',	'$userLogin' , '$userPassword')";
// 	$stmt = $pdo -> query ($sql);
// }

////////////////////Выводим таблицу с задачи/////////////////////////////////
// $pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
// $sql = "SELECT * FROM $nameTable";

// $stmt = $pdo -> query ($sql);
// while ($row = $stmt->fetchObject()) {
// 	$data[] = $row;

// }
// unset($pdo);



// $templ = $twig -> loadTemplate ('main_table_task.html');
// echo $templ -> render(array(
// 	'data' => $data
// 	));
////////////////////////////////////////////////////////////////////

	?>