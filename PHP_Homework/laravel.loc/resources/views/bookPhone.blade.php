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
@foreach($tables as $table)
<tr>
<td>{{$table-> id}}</td>
<td>{{$table-> name}}</td>
<td>{{$table-> number}}</td>
</tr>
@endforeach
</table>

<form action="{{route('tableAdd')}}" >
<input type="submit" value= "Добавить контакт" >
</form>

<form action="{{route('tableStore')}}" method="POST">
	<input type="submit" value="Редактировать контакт">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>



</body>
</html>