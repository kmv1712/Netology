<?php session_start();
error_reporting(0);
// echo "<pre>";
// echo $_SESSION ['a'];
// echo $_SESSION ['b'];
// echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>

</head>
<body>
	<form action="lesson_5.1.php" method="POST">
		<label>Введите адрес для поиска:</label>
		<input type="text" name = "coordinates" size="40">
		<input type="submit" value="Найти">
	</form>	

	<?php

// echo "<pre>";
// print_r ($_SERVER);
// echo "</pre>";
	include 'autoload.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo $_POST['coordinates'];
		$api = new Yandex\Geo\Api();

// Или можно икать по адресу
		$api->setQuery($_POST['coordinates']);

// Настройка фильтров
		$api
    ->setLimit(1) // кол-во результатов
    ->setLang(\Yandex\Geo\Api::LANG_US) // локаль ответа
    ->load();

    $response = $api->getResponse();
$response->getFoundCount(); // кол-во найденных адресов
$response->getQuery(); // исходный запрос
$response->getLatitude(); // широта для исходного запроса
$response->getLongitude(); // долгота для исходного запроса



$collection = $response->getList();
// var_dump($collection[0]);
// $OK = $collection[0];
// echo "$OK";
// $_SESSION ['a'] = $OK;
// $_SESSION ['b'] = $collection["Latitude"];
foreach ($collection as $item) {
	echo '<br>';
    echo $item->getAddress(); // вернет адрес
    echo '<br>';
    echo 'Широта: ' . $item->getLatitude() . '<br>'; // широта
    $_SESSION ['a'] = $item->getLatitude();
    echo 'Долгота: ' . $item->getLongitude() . '<br>'; // долгота
    $_SESSION ['b'] = $item->getLongitude();
    $item->getData(); // необработанные данные
  }
}
else { echo "";}

?>

    <script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [<?php echo $_SESSION ['a'] ; ?>,<?php echo $_SESSION ['b'] ; ?>],
                zoom: 16
            }); 
            
            myPlacemark = new ymaps.Placemark([<?php echo $_SESSION ['a']?>,<?php echo $_SESSION ['b']?>], {
                hintContent: 'Москва!',
                balloonContent: 'Столица России'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
<div id="map" style="width: 600px; height: 400px"></div>

</body>
</html>