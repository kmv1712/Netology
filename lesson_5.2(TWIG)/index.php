<?php 

header("Content-Type:text/html;charset=UTF8");
include 'config.php';
include 'functions.php';



$templ = $twig -> loadTemplate ('register.html');
echo $templ -> render(array(
	));

if ($_POST and !empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['register'])){
	print_r($_POST);
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$userLogin = $_POST['login'];
	$userPassword = $_POST['password'];

	$sql = "INSERT INTO user VALUES ('',	'$userLogin' , '$userPassword')";
	$stmt = $pdo -> query ($sql);
}
else 
	{echo "Введите логин, пароль";}

$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
$sql = "SELECT * FROM $nameTable";

$stmt = $pdo -> query ($sql);
while ($row = $stmt->fetchObject()) {
	$data[] = $row;

}
unset($pdo);



$templ = $twig -> loadTemplate ('main_table_task.html');
echo $templ -> render(array(
	'data' => $data
	));


?>