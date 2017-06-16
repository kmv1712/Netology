
<?php 

interface CarInterface 
{
	public function carFunction($name, $model, $price, $colore);
}

class Car implements CarInterface 
{
	public function carFunction($name, $model, $price, $colore); 
} 


$carOne = new Car();
$carOne -> name ('BMW');
$carOne -> model = ('A5');
$carOne -> price = (300000);
$carOne -> colore = ('red');
print_r($carOne);

echo "<br>";
$carTwo = new Car();
$carTwo -> name = 'Audi';
$carTwo -> model = 'A6';
$carTwo -> price = 700000;
$carTwo -> colore = 'black';
print_r($carTwo);
echo "<br>";

interface TVInterface 
{
	public function TVFunction($brand, $model, $price, $diagonal);
}

class TV  implements TVInterface  
{
	public function TVFunction($brand, $model, $price, $diagonal); 
} 

$tvOne = new TV();
$tvOne -> brand = 'Asus';
$tvOne -> model = 'W95';
$tvOne -> price = 20000;
$tvOne -> diagonal = '37';
print_r($tvOne);

echo "<br>";
$tvTwo = new TV();
$tvTwo -> brand = 'Tohiba';
$tvTwo -> model = 'A98';
$tvTwo -> price = 30000;
$tvTwo -> diagonal = '40';
print_r($tvTwo);
echo "<br>";

interface BallPenInterface 
{
	public function ballPenFunction($brand, $colore, $price);
}

class BallPen  implements BallPenInterface  
{
	public function ballPenFunction($brand, $colore, $price); 
} 

$ballPenOne = new BallPen();
$ballPenOne -> brand = 'Pilot';
$ballPenOne -> colore = 'black';
$ballPenOne -> price = 70;
print_r($ballPenOne);

echo "<br>";
$ballPenTwo = new BallPen();
$ballPenTwo -> brand = 'Bloma';
$ballPenTwo -> colore = 'blue';
$ballPenTwo -> price = 50;
print_r($ballPenTwo);
echo "<br>";


interface DuckInterface 
{
	public function duckFunction($gender, $colore, $old);
}

class Duck implements DuckInterface  
{
	public function duckFunction($gender, $colore, $old);
} 

$duckOne = new Duck();
$duckOne -> gender = 'male';
$duckOne -> colore = 'brown';
$duckOne -> old = 3;
print_r($duckOne);

echo "<br>";
$duckTwo = new Duck();
$duckTwo -> gender = 'female';
$duckTwo -> colore = 'gray';
$duckTwo -> old = 4;
print_r($duckTwo);

interface ProductInterface 
{
	public function productFunction($nameProduct, $price, $quantity);
}

class Product  implements ProductInterface  
{
	public function productFunction($nameProduct, $price, $quantity);
} 

echo "<br>";
$productOne = new Product();
$productOne -> nameProduct = 'J7';
$productOne -> price = 30;
$productOne -> quantity = 4;
print_r($productOne);

echo "<br>";
$productTwo = new Product();
$productTwo -> nameProduct = 'Lipton';
$productTwo -> price = 40;
$productTwo -> quantity = 4;
print_r($productTwo);
?>