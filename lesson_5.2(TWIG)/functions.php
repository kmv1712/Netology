<?php 
include 'config.php';



function getTable($user_id, $login, $host, $nameBase, $root, $password, $nameTable, $templ){
	
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT * FROM $nameTable WHERE user_id = '$user_id' ";
	$stmt = $pdo -> query ($sql);
	while ($row = $stmt->fetchObject()) {
		$data[] = $row;
	}
	unset($pdo);

	// $templ = $twig -> loadTemplate ('main_table_task.html');
	echo $templ -> render(array(
		'data' => $data,
		'login' => $login
		));
}

