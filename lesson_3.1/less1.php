<?php header("Content-Type: text/html; charset=utf-8");


class News
{
public $heading;
public $news; //свойство
public function simpleMethod() {
echo '<h2>' . "<?php $object -> heading; ?>" . '</h2>';
echo "<?php $object -> news; ?>";
}
}

$object = new News();
$object -> heading = "Лето пришло!!"; 
$object -> news ="Сегодня к нам пришло лето, все радуються и веселяться. ";
echo $object -> simpleMethod(); 


?>