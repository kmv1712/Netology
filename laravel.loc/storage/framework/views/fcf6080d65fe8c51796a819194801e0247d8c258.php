<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
		table {
			border-collapse: collapse; /* Отображать двойные линии как одинарные */
		}
		thead {
			background: #d3dce3; /* Цвет фона */
			text-align: left; /* Выравнивание по левому краю */
		}
		td, tr {
			border: 1px solid #800; /* Параметры границы */
			padding: 4px; /* Поля в ячейках */
		} 
</style>
<body>
	

	<table>
		<thead>
			<tr>
			  <td>id</td>
				<td>ФИО</td>
				<td>Номер телефона</td>
			</tr>
		</thead>
<?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($table-> id); ?></td>
<td><?php echo e($table-> name); ?></td>
<td><?php echo e($table-> number); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<form action="<?php echo e(route('tableAdd')); ?>" >
<input type="submit" value= "Добавить контакт" >
</form>

<form action="<?php echo e(route('tableStore')); ?>" method="POST">
	<input type="submit" value="Редактировать контакт">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
</form>



</body>
</html>