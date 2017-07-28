<?php 


function test() {
	echo "ok";
}



function getBase(){

include __DIR__ . "/host.php";
	if (isset($_POST['nameBase'])) {
		$_POST['nameBase'] = trim(strip_tags($_POST['nameBase']));
    $pdo = new PDO("mysql:host = $host; charset = utf8" , "$root", "$password");
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
$pdo = new PDO("mysql:host 	= $host; dbname=$enterNameBase; charset = utf8", "$root", "$password");
$sql ="CREATE TABLE $nameTable ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `estimation` float NOT NULL, `budget` tinyint(4) NOT NULL DEFAULT '0', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query ($sql); }
else {echo "<p>Заполните поля</p>";}
}
}
	


function getList(){
include __DIR__ . "/host.php";


	$pdo = new PDO("mysql:host 	= $host; charset = utf8", "$root", "$password");

	if (isset($_POST['nameBase'])){
	  $nameBase = $_POST['nameBase'];
		$sql = "SHOW TABLES FROM $nameBase";
		$result = $pdo -> query ($sql);


  
	foreach ($result as $row){
		echo "<br>Таблица в $nameBase: <a href=\"?nameBase=$nameBase&nameTable=".$row[0] ."\"> $row[0]</a><br>";
	}
	} 
 
}

function getTable(){
include __DIR__ . "/host.php";



  if (isset($_GET['nameTable']) and isset($_GET['nameBase'])){
  $nameTable = $_GET['nameTable'];
  $nameBase = $_GET['nameBase'];
  $pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
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
			echo "<p>Кликните мышкой на ссылку в столбце Field для действием над строкой</p>";

	}





// var_dump($_POST);
// var_dump($nameCell);

if (isset($_GET['nameCell'])){
$nameCell = $_GET['nameCell'];

if (isset($_POST['del'])){
// Удаляем строку в таблице
$sql = "ALTER TABLE $nameTable DROP COLUMN $nameCell";
$pdo -> query ($sql); 
echo "<br>";
echo "Вы удалили в таблице $nameTable поле:";
echo "<br>";
echo($nameCell);
}

else if (isset($_POST['editNameCell'])){
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

if (isset($_POST['newNameCell']) and isset($_POST['newTypeCell'])){
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
?>