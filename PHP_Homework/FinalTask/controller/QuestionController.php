<?php 

class QuestionController
{
  private $model = null;

	function __construct($db)
	{
		include 'model/Question.php';
		$this->model = new Question($db);
	}



}