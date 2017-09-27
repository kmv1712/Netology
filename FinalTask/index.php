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

$templ = $twig -> loadTemplate ('questions.html');
echo $templ -> render(array(
	'data' => $data,
	'questions' => $questions
	));




