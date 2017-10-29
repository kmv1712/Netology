<?php 

require_once 'Twig\Autoloader.php'; //Подключаем TWIG
Twig_Autoloader::register(); //Определяет автоматическую загрузку классов
$loader = new Twig_Loader_Filesystem('templates'); //Подключаем папку с шаблонами(Загрузчик)

$twig = new Twig_Environment($loader, 
	array(
		'cache' => 'compilation_cache',
		'auto_reload' => true
		)); 


$host = 'localhost';
$root = 'root';
$password ='';
$nameBase = 'tasks';
$nameTable = 'task';