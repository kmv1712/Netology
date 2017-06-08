<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

  <?php 
   // error_reporting(E_ALL);
      
  // echo $_GET['name'];
  $list = $_GET['name'];

  $textJson = file_get_contents($list);
  $textJson = json_decode ( $textJson, true);
  // echo '<pre>';
  // echo print_r($textJson);
  // echo '</pre>';

  ?>

  <h3><?php echo $textJson[0]["nameTest"]; ?></h3>

  <form action="" method="POST">
    <fieldset>
      <legend><?php echo $textJson[0]["quetion"]; ?></legend>
      <label><input type="radio" name="q1" value=<?php echo $textJson[0][version][0]; ?>> <?php echo $textJson[0][version][0]; ?></label>
      <label><input type="radio" name="q1" value=<?php echo $textJson[0][version][1]; ?>> <?php echo $textJson[0][version][1]; ?></label>
      <label><input type="radio" name="q1" value=<?php echo $textJson[0][version][2]; ?>> <?php echo $textJson[0][version][2]; ?></label>
      <label><input type="radio" name="q1" value=<?php echo $textJson[0][version][3]; ?>> <?php echo $textJson[0][version][3]; ?></label>
    </fieldset>
    <fieldset>
      <legend><?php echo $textJson[1]["quetion"]; ?></legend>
      <label><input type="radio" name="q2" value=<?php echo $textJson[1][version][0]; ?>><?php echo $textJson[1][version][0]; ?></label>
      <label><input type="radio" name="q2" value=<?php echo $textJson[1][version][1]; ?>><?php echo $textJson[1][version][1]; ?></label>
      <label><input type="radio" name="q2" value=<?php echo $textJson[1][version][2]; ?>><?php echo $textJson[1][version][2]; ?></label>
      <label><input type="radio" name="q2" value=<?php echo $textJson[1][version][3]; ?>><?php echo $textJson[1][version][3]; ?></label>
    </fieldset>
    <input type="submit" value="Отправить">


    <?php 
    // echo "<br>";
    // echo $_POST['q1']."<br>";
    // echo $_POST['q2']."<br>";
    // echo $textJson[0][answer]."<br>";
    // echo $textJson[1][answer];
    $answerOne = $_POST['q1'];
    $answertwo = $_POST['q2'];
    
    echo "<br>";
    if ($answerOne == $textJson[0][answer] && $answertwo ==$textJson[1][answer])
      echo "Все ответы верны, вы молодец!";
    else {
      if ($answerOne == $textJson[0][answer] && $answertwo != $textJson[1][answer])
     echo "Вы ошиблись во втором вопросе";
     else {
       if ($answerOne != $textJson[0][answer] && $answertwo == $textJson[1][answer])
       echo "Вы ошиблись в первом вопросе";
       else {
        echo 'Ошиблись во всех вопросах';
       }
     }
     }
     ?>

   </body>
   </html>


   <!-- Файл list.json
   [{
    "test": "2.1",
    "nameTest": "ВВИ изоляции",
    "Quetion": "Напряжения испытания В10кВ ?",
    "version": ["37.8", "28.8", "31.5", "36.6"],
    "answer":  "37.8"
  },
  {
    "test": "2.1",
    "nameTest": "ВВИ изоляции",
    "Quetion": "Напряжения испытания В10кВ ?",
    "version": ["37.8", "28.8", "31.5", "36.6"],
    "answer":  "37.8"
  }
  ]
-->
