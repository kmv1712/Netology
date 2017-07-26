<?php 

function test() {
	echo "ok";
}



function getBase(){
// test();
	if (isset($_POST['nameBase'])) {
		$_POST['nameBase'] = trim(strip_tags($_POST['nameBase']));
    $pdo = new PDO("mysql:host 	= localhost; charset = utf8", "root");
		$nameBase = $_POST['nameBase'];
		$sql = "CREATE DATABASE $nameBase";
		$pdo -> query ($sql);
	
	}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$enterNameBase = $_POST['enterNameBase'];
// echo "$enterNameBase";
$nameTable = $_POST['nameTable'];
// echo "$nameTable";

if (!empty($enterNameBase) and !empty($nameTable) ){
$enterNameBase = trim(strip_tags($enterNameBase));
$nameTable = trim(strip_tags($nameTable));
$pdo = new PDO("mysql:host 	= localhost; dbname=$enterNameBase; charset = utf8", "root");
$sql ="CREATE TABLE $nameTable ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `estimation` float NOT NULL, `budget` tinyint(4) NOT NULL DEFAULT '0', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query ($sql); }
else {echo "<p>Заполните поля</p>";}
}
}
	



?>