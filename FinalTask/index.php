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

$userQuestion = 'Задать вопрос';


if (empty($_POST['userName']) or empty($_POST['userMail']) or empty($_POST['userSelectCategorie']) or empty($_POST['userFormQuestion'])){

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
print_r($_POST);

echo "$userName";
echo "$userMail";
echo "$userSelectCategorie";
echo "$userFormQuestion";

$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
$sql = "INSERT INTO `userQuestion`(`id`, `userName`, `mail`, `userFormQuestion`, `question`) VALUES ('','$userName','$userMail', '$userFormQuestion', '$userSelectCategorie')";
$stmt = $pdo -> query ($sql);
unset($pdo);

$sendFormUser = "Ваш вопрос отправлен, после ответа на него он появиться на сайте";

$userName = null;
$userMail = null;
$userSelectCategorie = null;
$userFormQuestion = null;

$_POST['userName'] = null;
$_POST['userMail']= null;
$_POST['userSelectCategorie']= null;
$_POST['userFormQuestion']= null;

$_POST = null;
unset($_POST);

$templ = $twig -> loadTemplate ('questions.html');
echo $templ -> render(array(
	'data' => $data,
	'questions' => $questions,
	'userQuestion' => $userQuestion,
	'sendFormUser' => $sendFormUser
	));
}


