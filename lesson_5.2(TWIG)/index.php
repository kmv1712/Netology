<?php 
require_once 'Twig\Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader, array('cache' => 'compilation_cache', 'auto_reload' => true));

$tasks = array(
	array('number' => 'Книга 1', 'title' => 'Гарри Поттер и философский камень', 'date' => '30.06.1997'),
	array('number' => 'Книга 2', 'title' => 'Гарри Поттер и Тайная комната', 'date' => '2.07.1998'),
	array('number' => 'Книга 3', 'title' => 'Гарри Поттер и узник Азкабана', 'date' => '8.07.1999'),

);


echo $twig->render('tasks.html', array('tasks' => $tasks));
?>