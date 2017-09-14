<?php 

header("Content-Type:text/html;charset=UTF8");
include 'config.php';
include 'functions.php';


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

// echo $twig->render('books.html', array('books' => $books));
?>