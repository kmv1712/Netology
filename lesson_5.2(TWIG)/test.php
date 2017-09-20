 <?php 
 include 'config.php';

///////////////////////////////////////////////////////////////////
////////// Полностью выводим значения из таблицы task ///////////////
 /////////////////////////////////////////////////////////////////
 $pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
 $sql = "SELECT * FROM $nameTable";
 $stmt = $pdo -> query ($sql);


// echo '<pre>';
// echo  var_dump($stmt);
// echo '</pre>';
 echo "<table>";
 echo "<thead>";
 echo "<tr>";
 echo "<td>Описание задачи</td>";
 echo "<td>Дата добавления</td>";
 echo "<td>Статус</td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td>Ответственный</td>";
 echo "<td>Автор</td>";
 echo "<td>Закрепить задачу за пользователем</td>";
 echo "</tr>";
 echo "</thead>";

 foreach ($stmt as $row) {
 	echo "<tr>";
 	echo "<td>" . $row["description"] . "</td>"; // Описание задачи
 	echo "<td>" . $row["date_added"] . "</td>"; // Дата добавления задачи

  // Условие для статуса Выполнено или В процессе
 	if ($row["is_done"] == 1) { $row["is_done"] = 'В процессе';} 
 	else {$row["is_done"] = 'Выполнено';}
 	echo "<td>" . $row["is_done"] . "</td>";

// Выводит действия Изменить, Выполнить, Удалить
 	echo "<td><a name=\"edit\" href=\"lesson_4.2.php?edit=".$row["id"]."\">Изменить</a></td>";
 	echo "<td><a name=\"done\" href=\"lesson_4.2.php?done=".$row["id"]."\">Выполнить</a></td>";
 	echo "<td><a name=\"del\" href=\"lesson_4.2.php?del=".$row["id"]."\">Удалить</a></td>";


// Вывести Ответсвенного 
 	echo "<td>" . $row["user_id"] . "</td>";

// Вывести Автора
 	echo "<td>" . $row["user_id"] . "</td>";

// Вывести список пользователей за которыми закрепить задачу
 	echo "<td> Другой пользователь </td>";

 	echo "</tr>";		
 }	

 echo "</table>";
///////////////////////////////////////////////////////////////////////////
 //////////////////////////////////////////////////////////////////////////



 /////////////////////////// Регистрация 19.09.17.//////////////////////////////////
if ($_POST and !empty($_POST['login']) and !empty($_POST['register'])){
	// print_r($_POST);
	$userLogin = $_POST['login'];
	$userPassword = $_POST['password'];
	$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
	$sql = "SELECT id FROM user WHERE login = '$userLogin'";
	$stmt = $pdo -> query ($sql);
	$coun = $stmt -> rowCount();
	// echo "$coun";
	if ($coun > 0) {
		echo 'Логин занят, придумайте новый логин';
	} else {
		$pdo = new PDO("mysql:host 	= $host; dbname=$nameBase; charset = utf8", "$root", "$password");
		$sql = "INSERT INTO user VALUES ('',	'$userLogin' , '$userPassword')";
		$stmt = $pdo -> query ($sql);
		echo "Вы успешно зарегистрировались на сайте";
   	}
}
else 
	{echo "Введите логин, пароль";}
/////////////////////////////////////////////////////////////////////////