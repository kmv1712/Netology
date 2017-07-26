<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<form action="<?php echo e(route('tableStore')); ?>" method="POST">
	
	<lable>Введите id контакта, который хотите изменить:</lable>
	<input type="text" name = "id">			
  <br>	
  <lable>Введите ФИО:</lable>
	<input type="text" name = "name">		
  <br>	
	<lable>Введите новый номер телефона:</lable>
	<input type="text" name = "number">		
  <br>	
  <br>	
  <button type="submit"> Изменить контакт</button>	
   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
</form>



</body>
</html>