<?php 

header("Content-Type:text/html;charset=UTF8");
include 'config.php';
include 'functions.php';

$pdo = new PDO("mysql:host 	= localhost; dbname=tasks; charset = utf8", "root");
$sql = "DESCRIBE task";
$stmt = $pdo -> query ($sql);



$tasks = array(
	array('number' => 'Книга 1', 'title' => 'Гарри Поттер и философский камень', 'date' => '30.06.1997'),
	array('number' => 'Книга 2', 'title' => 'Гарри Поттер и Тайная комната', 'date' => '2.07.1998'),
	array('number' => 'Книга 3', 'title' => 'Гарри Поттер и узник Азкабана', 'date' => '8.07.1999'),

);

$templ = $twig -> loadTemplate ('main_table_task.html');
echo $templ -> render(array('tasks' => $tasks, 'stmt' => $stmt));

// echo $twig->render('books.html', array('books' => $books));
?>