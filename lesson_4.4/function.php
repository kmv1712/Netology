<?php 

function test() {
	echo "ok";
}



function getBase(){

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
	


function getTable(){
	$nameBase = trim(strip_tags($_POST['nameBase']));
	$pdo = new PDO("mysql:host 	= localhost; charset = utf8", "root");

	if (!empty($nameBase)){
	  $nameBase = $_POST['nameBase'];
		$sql = "SHOW TABLES FROM $nameBase";
		$result = $pdo -> query ($sql);


  
	foreach ($result as $row){
		echo "<br>Таблица в $nameBase: <a href=\"?nameBase=$nameBase&nameTable=".$row[0] ."\"> $row[0]</a><br>";
	}
	} 
 
  $nameTable = $_GET['nameTable'];
  $nameBase = $_GET['nameBase'];

  if (isset($nameTable) and isset($nameBase)){
  $pdo = new PDO("mysql:host 	= localhost; dbname=$nameBase; charset = utf8", "root");
	$sql = "DESCRIBE $nameTable";
	$stmt = $pdo -> query ($sql);
  // var_dump( $nameTable);



	




	echo "<table>";
		echo "<thead>";
			echo "<tr>";
				echo "<td>Field</td>";
				echo "<td>Type</td>";
				echo "<td>Null</td>";
				echo "<td>Key</td>";
				echo "<td>Default</td>";
				echo "<td>Extra</td>";
			echo "</tr>";
		echo "</thead>";

		
		foreach ($stmt as $row) {
 	// echo( "<tr> <td> $row[0] </td><td>$row[1] </td><td>$row[2]</td> <td>$row[3]</td><td> $row[4]</td><td> $row[5]</td> </tr>");
			echo "<tr>";
			for ($i=0; $i < 6 ; $i++) { 
				echo( "<td> <a href=\"?nameBase=$nameBase&nameTable=$nameTable&nameCell=". $row[$i] . "\"> $row[$i] </a></td>");
			}
			echo "</tr>";

		}


$nameCell = $_GET['nameCell'];
echo "<p>Кликните мышкой на ссылку в столбце Field для действием над строкой</p>";
// var_dump($_POST);
// var_dump($nameCell);

if ($nameCell){


if ($_POST['del']){
// Удаляем строку в таблице
$sql = "ALTER TABLE $nameTable DROP COLUMN $nameCell";
$pdo -> query ($sql); 
echo "<br>";
echo "Вы удалили в таблице $nameTable поле:";
echo "<br>";
echo($nameCell);


}
else if ($_POST['editNameCell']){

	

echo "<form action='' method=POST>";
echo "<lable>Введите новое название поля</lable>";
echo "<br>";
echo "<input type=text name = newNameCell>";
echo "<br>";
echo "<lable>Введите новый тип (INT, VARCHAR, TEXT, DATE)</lable>";
echo "<br>";
echo "<input type=text name = newTypeCell>";
echo "<br>";
echo "<input type=submit value=Изменить>	";	


}

if ($_POST['newNameCell'] and $_POST['newTypeCell']){
	$newNameCell = $_POST['newNameCell'];
  $newTypeCell = $_POST['newTypeCell'];
	echo "ok";
	$sql = "ALTER TABLE $nameTable CHANGE $nameCell $newNameCell $newTypeCell NOT NULL DEFAULT 0";
  $pdo -> query ($sql); 
}
// var_dump($_POST);

	
	echo "</table>";
	

echo "<form action='' method = post>";

	echo "<input type=submit value=Удалить поле name =del >";

	echo "<input type=submit value=Изменить название поля или тип name =editNameCell>";

	echo "<input type=submit value=Обновить таблицу name =update>";


echo "</form>";


}

}
}


?>