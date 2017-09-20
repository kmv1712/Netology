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
		$stmt = $pdo -> query ($sql);
	}
}
////////////////////////////////////////////////////////////////////////


/////////////////////////// Вход//////////////////////////////////
else if ($_POST and !empty($_POST['login']) and !empty($_POST['sign_in'])){
	// print_r($_POST);
	$userLogin = $_POST['login'];
	$userPassword = $_POST['password'];
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
	$stmt = $pdo -> query ($sql);
	$coun = $stmt -> rowCount();
	// echo "$coun";
	if ($coun > 0) {
		foreach ($stmt as $row) {
  		// echo "<pre>";
			// echo $row['id'];
			// echo $row['login'];
  		// echo "<pre>";
  		// echo $row['password'];
  		// echo "<pre>";
			$user_id = $row['id'];
			$login = $row['login'];
			if ($row['password'] === $userPassword){
  			//////////Выводим таблицу пользователя////////////
				// $pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
				// $sql = "SELECT * FROM $nameTable WHERE user_id = '$user_id' ";
				// $stmt = $pdo -> query ($sql);
				// while ($row = $stmt->fetchObject()) {
				// 	$data[] = $row;
				// }
				// unset($pdo);

				$templ = $twig -> loadTemplate ('main_table_task.html');
				// echo $templ -> render(array(
				// 	'data' => $data,
				// 	'login' => $login
				// 	));
				//Заменяем код на фунцию getTable из папки functions.php
				getTable($user_id, $login, $host, $nameBase, $root, $password, $nameTable, $templ);
  			/////////////////////////////////////////////////////

			}
			else {echo "Пароль введен не верно!!!";}
		}
	}
	else 
		{echo "Логин не существует";}
}
else 
	{echo "Введите логин, пароль";}
////////////////////////////////////////////////////////////////////





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