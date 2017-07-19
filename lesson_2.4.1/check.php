<?php 
header("Content-Type: text/html; charset=utf-8");
// session_start();
echo $_POST['name'];
echo $_SESSION['point'];
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
// 	header ($_SERVER['SERVER_PROTOCOL'] . '405 Method Not Allowed');
// 	echo 'Please use POST';
// 	exit;

// }

// if(empty($_POST['code']) || empty($_POST['first_name'])) {
// header($_SERVER['SERVER_PROTOCOL'] . '400 Bad Request');
// echo 'Code or first_name not found!';
// exit;
// }

// $code = (int)$_POST['code'];

// if ($code === $codeGenerator -> getPreviousCode()) {
// 	echo 'Corect';
// }
// else {
// 	echo 'You are robot!';
// }
