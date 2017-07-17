<?php header("Content-Type: text/html; charset=utf-8");
// <!-- 2) Интерфейсы содержат только методы без их реализации, для создания интерфейсов необходимо знать свойства объектов. -->

abstract class ParentClass
{ 
	public $name;
	public $price;
	
  public function printObject() {
		echo $this -> name . PHP_EOL;
		echo 'Стоимость: ' . $this -> price . ' руб.' . PHP_EOL;
	}
}

class Car extends ParentClass
{
	public function printObjectCar() {
		echo $this -> model . PHP_EOL;
		echo $this -> colore . PHP_EOL;
	}

} 


$carOne = new Car();
$carOne -> name = 'BMW';
$carOne -> model = 'A5';
$carOne -> price = 300000;
$carOne -> colore = 'red';
$carOne -> printObject();
$carOne -> printObjectCar();

echo "<br>";
$carTwo = new Car();
$carTwo -> name = 'Audi';
$carTwo -> model = 'A6';
$carTwo -> price = 700000;
$carTwo -> colore = 'black';
$carTwo -> printObject();
$carTwo -> printObjectCar();
echo "<br>";

class TV extends ParentClass
{
	public $model;
	public $diagonal; 
	public function printObjectTV() {
		echo $this -> model . PHP_EOL;
		echo $this -> diagonal . PHP_EOL;
	}
} 


$tvOne = new TV();
$tvOne -> name = 'Asus';
$tvOne -> model = 'W95';
$tvOne -> price = 20000;
$tvOne -> diagonal = '37';
$tvOne -> printObject();
$tvOne -> printObjectTV();

echo "<br>";
$tvTwo = new TV();
$tvTwo -> name = 'Tohiba';
$tvTwo -> model = 'A98';
$tvTwo -> price = 30000;
$tvTwo -> diagonal = '40';
$tvTwo -> printObject();
$tvTwo -> printObjectTV();
echo "<br>";

class BallPen extends ParentClass 
{

	public $colore;
	public function printObjectBallPen() {
		echo $this -> colore . PHP_EOL;
} 
}

$ballPenOne = new BallPen();
$ballPenOne -> name = 'Pilot';
$ballPenOne -> colore = 'black';
$ballPenOne -> price = 70;
$ballPenOne -> printObject();
$ballPenOne -> printObjectBallPen();


echo "<br>";
$ballPenTwo = new BallPen();
$ballPenTwo -> name = 'Bloma';
$ballPenTwo -> colore = 'blue';
$ballPenTwo -> price = 50;
$ballPenTwo -> printObject();
$ballPenTwo -> printObjectBallPen();

echo "<br>";

interface DuckInterface 
{
	public function duckFunction($gender, $colore, $old);
}

class Duck implements DuckInterface  
{
	public function duckFunction($gender, $colore, $old)
	{
		echo $this -> gender . ' ' . $this -> colore . ' ' . $this -> old ;
}
} 

$duckOne = new Duck();
$duckOne -> gender = 'male';
$duckOne -> colore = 'brown';
$duckOne -> old = 3;
$duckOne -> duckFunction($gender, $colore, $old);

echo "<br>";
$duckTwo = new Duck();
$duckTwo -> gender = 'female';
$duckTwo -> colore = 'gray';
$duckTwo -> old = 4;
$duckTwo -> duckFunction($gender, $colore, $old);;

interface ProductInterface 
{
	public function productFunction($nameProduct, $price, $quantity);
}

class Product  implements ProductInterface  
{
	public function productFunction($nameProduct, $price, $quantity)
	{
		echo $this -> nameProduct . ' ' . $this -> price . ' ' . $this -> quantity ;
  }
} 

echo "<br>";
$productOne = new Product();
$productOne -> nameProduct = 'J7';
$productOne -> price = 30;
$productOne -> quantity = 4;
$productOne -> productFunction($nameProduct, $price, $quantity);

echo "<br>";
$productTwo = new Product();
$productTwo -> nameProduct = 'Lipton';
$productTwo -> price = 40;
$productTwo -> quantity = 4;
$productTwo -> productFunction($nameProduct, $price, $quantity);


?>