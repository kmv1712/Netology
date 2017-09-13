<?php 

require_once 'Twig\Autoloader.php'; //Подключаем TWIG
Twig_Autoloader::register(); //Определяет автоматическую загрузку классов
$loader = new Twig_Loader_Filesystem('templates'); //Подключаем папку с шаблонами(Загрузчик)

$twig = new Twig_Environment($loader, 
	array(
		'cache' => 'compilation_cache',
		'auto_reload' => true
		)); 



try {
	$dbh = new PDO('mysql:dbname=tasks; host=localhost', 'root');
} catch (PDOException $e) {
	echo "Error: Could not connect. " . $e->getMessage();
}


	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



return [
'mysql' => [
'host' => 'localhost',
'dbname' => 'tasks',
'user' => 'root',
]
];



