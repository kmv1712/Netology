<?php header("Content-Type: text/html; charset=utf-8");

class ParentClass
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
	// public $name; 
	public $model;
	public $price; 
	public $colore; 

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

class Duck extends ParentClass 
{

	public $gender;
	public $colore;
	public $old; 
  public function printObjectDuck() {
		echo $this -> gender . PHP_EOL;
		echo $this -> colore . PHP_EOL;
		echo $this -> old . PHP_EOL;
      } 
} 


$duckOne = new Duck();
$duckOne -> name = 'Duck';
$duckOne -> gender = 'male';
$duckOne -> colore = 'brown';
$duckOne -> old = 3;
$duckOne -> price = 12000;
$duckOne -> printObject();
$duckOne -> printObjectDuck();

echo "<br>";
$duckTwo = new Duck();
$duckTwo -> name = 'Mallard';
$duckTwo -> gender = 'female';
$duckTwo -> colore = 'gray';
$duckTwo -> old = 4;
$duckTwo -> price = 16000;
$duckTwo -> printObject();
$duckTwo -> printObjectDuck();


class Product extends ParentClass 
{
	public $quantity;
public function printObjectProduct() {
		echo $this -> quantity . PHP_EOL;
		
      } 
} 

echo "<br>";
$productOne = new Product();
$productOne -> name= 'J7';
$productOne -> price = 30;
$productOne -> quantity = 4;
$productOne -> printObject();
$productOne -> printObjectProduct();


echo "<br>";
$productTwo = new Product();
$productTwo -> name = 'Lipton';
$productTwo -> price = 40;
$productTwo -> quantity = 4;
$productTwo -> printObject();
$productTwo -> printObjectProduct();

?>