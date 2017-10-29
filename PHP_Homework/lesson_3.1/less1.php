<?php header("Content-Type: text/html; charset=utf-8");


class News
{
	public $heading;
  public $news; 
  
  public function echoMethod() {
  echo '<h2>' . $this -> heading . '</h2>'. "<br>" . $this -> news;

	
}
}

$object = new News();
$object -> heading = "Лето пришло!!"; 
$object -> news ="Сегодня к нам пришло лето, все радуються и веселяться. ";

echo $object -> echoMethod(); 


?>