<?php session_start();

// header("Content-Type:text/html;charset=UTF8");
include 'config.php';
include 'functions.php';

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
	} 
	else 
		if (!empty($userPassword)){
			$_SESSION['$userLogin'] = $userLogin;
			$_SESSION['$userPassword'] = $userPassword;
			$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
			$sql = "INSERT INTO user VALUES ('',	'$userLogin' , '$userPassword')";
			$stmt = $pdo -> query ($sql);
		// $sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
		// $stmt = $pdo -> query ($sql);
		}
		else {
			echo "Введите пароль для регистрации аккаунта!!!";
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
				$user_id = $row['id'];
				$login = $row['login'];

			}
			if ($row['password'] === $userPassword){
				$_SESSION['$userLogin'] = $userLogin;
				$_SESSION['$userPassword'] = $userPassword;
			}
			else {echo "Пароль введен не верно!!!";}

		}
		else 
			{echo "Логин не существует";}
	}
// else 
// 	{echo "Введите логин, пароль";}
////////////////////////////////////////////////////////////////////


/////////////////////////// Добавить задачу (пользователь)////////////////
	if (!empty($_POST['addTask'])) {
		$textTask = $_POST['textTask'];
		$userLogin = $_SESSION['$userLogin'] ;
		$userPassword = $_SESSION['$userPassword'];
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
		$stmt = $pdo -> query ($sql);
		$dateAdd = date("Y-m-d H:i:s");
		foreach ($stmt as $row) {
			$user_id = $row['id'];
			$login = $row['login'];
			$sql = "INSERT INTO task VALUES ('',	'$user_id' , '', ' $textTask', '1', '$dateAdd')";
			$stmt = $pdo -> query ($sql);
			$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
			$stmt = $pdo -> query ($sql);
		}
	}
/////////////////////////////////////////////////////////////


	if (!empty($_GET['id']) and ($_GET['action'] == delete))
	{
		$id = $_GET['id'];
		$userLogin = $_SESSION['$userLogin'] ;
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
		$stmt = $pdo -> query ($sql);
		foreach ($stmt as $row) {
			$user_id = $row['id'];
			$login = $row['login'];
		}
		$sql = "DELETE FROM task WHERE (id = '$id')";
		$stmt = $pdo -> query ($sql);
	}

	else if (!empty($_GET['id']) and ($_GET['action'] == done)){
		$id = $_GET['id'];
		$userLogin = $_SESSION['$userLogin'] ;
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
		$stmt = $pdo -> query ($sql);
		foreach ($stmt as $row) {
			$user_id = $row['id'];
			$login = $row['login'];
		}
		$sql =  "UPDATE task SET is_done ='0' WHERE (id ='$id')";
		$stmt = $pdo -> query ($sql);
	}

	else if (!empty($_GET['id']) and ($_GET['action'] == edit)){
		$id = $_GET['id'];
		$userLogin = $_SESSION['$userLogin'] ;
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "SELECT id , login, password FROM user WHERE login = '$userLogin'";
		$stmt = $pdo -> query ($sql);
		foreach ($stmt as $row) {
			$user_id = $row['id'];
			$login = $row['login'];
		}

		if ($_SERVER['REQUEST_METHOD'] != POST) {
		$saveEdit = "<form action='' method=POST><input type=text name = editText><input type=submit value = 'Сохранить изменения'  name = editTask></form>";
		 echo "$saveEdit";}

		if ($_POST['editTask'] and $_POST['editText'] ) {
			$editText = $_POST['editText'];
			$sql =  "UPDATE task SET description ='$editText' WHERE (id ='$id')";
			$stmt = $pdo -> query ($sql);
      
		}
	}


	if (!empty($_SESSION['$userLogin'])) {
		$templ = $twig -> loadTemplate ('main_table_task.html');
		getTable($user_id, $login, $host, $nameBase, $root, $password, $nameTable, $templ);
	}




	if (empty($_SESSION['$userLogin'])){
		$templ = $twig -> loadTemplate ('register.html');
		echo $templ -> render(array(
			));
	}


//////////Закрыть сессию//////////
	if ($_POST['exit']){
		session_destroy();
	}
/////////////////////////////////


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