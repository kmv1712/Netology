<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 1);
include 'config.php';


//// Подключение к базе данных ////

// include 'lib/database/DataBase.php';
// $db = DataBase::connect(
// 	$mysql['host'],
// 	$mysql['dbname'],
// 	$mysql['user'],
// 	$mysql['pass']
// 	);

/////////////////////////////////////
// include 'controller/QuestionController.php';



$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
$sql = "SELECT * FROM $tableCategorie";
$stmt = $pdo -> query ($sql);
while ($row = $stmt -> fetchObject()) {
	$data[] = $row;
}

$sql = "SELECT * FROM $tableQuestion";
$stmt = $pdo -> query ($sql);
while ($row = $stmt -> fetchObject()) {
	$questions[] = $row;
}

unset($pdo);

if (!$_POST) {
	$templ = $twig -> loadTemplate ('questions.html');
	echo $templ -> render(array(
		'data' => $data,
		'questions' => $questions,
		'userQuestion' => $userQuestion
		));
}



if (!empty($_POST['userName']) and !empty($_POST['userMail']) and !empty($_POST['userSelectCategorie']) and !empty($_POST['userFormQuestion'])){
	$userName = strip_tags ($_POST['userName']);
	$userMail = strip_tags ($_POST['userMail']);
	$userSelectCategorie = strip_tags ($_POST['userSelectCategorie']);
	$userFormQuestion = strip_tags ($_POST['userFormQuestion']);

	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "INSERT INTO `userQuestion`(`id`, `userName`, `mail`, `userFormQuestion`, `question`) VALUES ('','$userName','$userMail', '$userFormQuestion', '$userSelectCategorie')";
	$stmt = $pdo -> query ($sql);
	unset($pdo);
}


if (!empty($_POST['userName']) and !empty($_POST['userMail'])){

	$adminLogin =  strip_tags ($_POST['userName']);
	$adminPassword =  strip_tags ($_POST['userMail']);

	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT id , login, password FROM admin WHERE login = '$adminLogin'";
	$stmt = $pdo -> query ($sql);
	$coun = $stmt -> rowCount();
	// echo "$coun";
	if ($coun > 0) {
		foreach ($stmt as $row) {
			if ($row['password'] === $adminPassword){
				$_SESSION['adminLogin'] = $adminLogin;
				$_SESSION['$adminPassword'] = $adminPassword;


				$templ = $twig -> loadTemplate ('list_admin.html');
				getTableAdmin( $adminLogin, $host, $nameBase, $root, $password, $nameTableAdmin, $templ);

				if ($_GET['action'] == 'del') 
				{
					$id = $_GET['id'];
					$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");	
					$sql = "DELETE FROM admin WHERE (id = '$id')";
					$stmt = $pdo -> query ($sql);
				}
				


				if ($_GET['action'] == 'del') 
				{
					$id = $_GET['id'];
					$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");	
					$sql = "DELETE FROM admin WHERE (id = '$id')";
					$stmt = $pdo -> query ($sql);
				}

				// if ($_POST['action'] == 'add') 
				// {
				// 	$id = $_POST['add'];

				// 	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");	
				// 	$sql = "DELETE FROM admin WHERE (id = '$id')";
				// 	INSERT INTO `admin`(`id`, `login`, `password`) VALUES ([value-1],[value-2],[value-3])
				// 	$stmt = $pdo -> query ($sql);
				// }





				$templ = $twig -> loadTemplate ('list_category.html');
				echo $templ -> render(array(
					));


				$templ = $twig -> loadTemplate ('list_question.html');
				echo $templ -> render(array(
					));


				$templ = $twig -> loadTemplate ('form_for_admin.html');
				echo $templ -> render(array(
					));

				$templ = $twig -> loadTemplate ('list_question_with_empty_answer.html');
				echo $templ -> render(array(
					));

			}
			else {echo "Пароль введен не верно!!!";}

		}
	}

	else 
		{echo "Логин не существует";}
}


function getTableAdmin( $adminLogin, $host, $nameBase, $root, $password, $nameTableAdmin, $templ)
{
	
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT * FROM $nameTableAdmin ";
	$stmt = $pdo -> query ($sql);
	while ($row = $stmt->fetchObject()) {
		$data[] = $row;
	}
	unset($pdo);

	// $templ = $twig -> loadTemplate ('main_table_task.html');
	echo $templ -> render(array(
		'data' => $data,
		'adminLogin' => $adminLogin
		));
}


