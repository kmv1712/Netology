
<?php 

class Car 
{
	public function __construct($name, $model, $price, $colore)
	{
		$this -> name =  $name;
		$this -> model =  $model;
		$this -> price =  $price;
		$this -> colore =  $colore;
	}


	public function getClass ()
	{
		echo $this -> name . PHP_EOL;
		echo $this -> model . PHP_EOL;
		echo $this -> price . PHP_EOL;
		echo $this -> colore . PHP_EOL;
		echo "<br>";
	}
} 


$carOne = new Car('BMW','A5', 300000, 'red');
$carOne-> getClass ();

$carTwo = new Car('Audi','A6', 700000, 'black');
$carTwo-> getClass ();



class TV 
{

	public function __construct($brand, $model, $price, $diagonal)
	{
		$this -> brand =  $brand;
		$this -> model =  $model;
		$this -> price =  $price;
		$this -> diagonal =  $diagonal;
	}


	public function getClass ()
	{
		echo $this -> brand . PHP_EOL;
		echo $this -> model . PHP_EOL;
		echo $this -> price . PHP_EOL;
		echo $this -> diagonal . PHP_EOL;
		echo "<br>";
	}
} 


$tvOne = new TV('Asus', 'W95', 20000, '37');
$tvOne ->getClass ();


$tvTwo = new TV('Tohiba', 'A98', 30000, '40');
$tvTwo ->getClass ();


class BallPen 
{
	public $brand;
	public $colore;
	public $price; 


	public function getClass ()
	{
		echo $this -> brand . PHP_EOL;
		echo $this -> colore . PHP_EOL;
		echo $this -> price . PHP_EOL;
		echo "<br>";
	}
} 


$ballPenOne = new BallPen();
$ballPenOne -> brand = 'Pilot';
$ballPenOne -> colore = 'black';
$ballPenOne -> price = 70;

$ballPenOne -> getClass ();

$ballPenTwo = new BallPen();
$ballPenTwo -> brand = 'Bloma';
$ballPenTwo -> colore = 'blue';
$ballPenTwo -> price = 50;

$ballPenTwo -> getClass ();


class Duck 
{
	public $gender;
	public $colore;
	public $old; 

	public function getClass ()
	{
		echo $this -> gender . PHP_EOL;
		echo $this -> colore . PHP_EOL;
		echo $this -> old . PHP_EOL;
		echo "<br>";
	}
} 


$duckOne = new Duck();
$duckOne -> gender = 'male';
$duckOne -> colore = 'brown';
$duckOne -> old = 3;

$duckOne-> getClass ();


$duckTwo = new Duck();
$duckTwo -> gender = 'female';
$duckTwo -> colore = 'gray';
$duckTwo -> old = 4;

$duckTwo-> getClass ();

class Product 
{
	public $nameProduct;
	public $price; 
	public $quantity;


	public function getClass ()
	{
		echo $this -> nameProduct . PHP_EOL;
		echo $this -> price . PHP_EOL;
		echo $this -> quantity . PHP_EOL;
		echo "<br>";
	}
} 


$productOne = new Product();
$productOne -> nameProduct = 'J7';
$productOne -> price = 30;
$productOne -> quantity = 4;
$productOne -> getClass ();

$productTwo = new Product();
$productTwo -> nameProduct = 'Lipton';
$productTwo -> price = 40;
$productTwo -> quantity = 4;
$productTwo -> getClass ();
?>