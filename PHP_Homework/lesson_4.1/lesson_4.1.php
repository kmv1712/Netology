<?php header("Content-Type: text/html; charset=utf-8");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<style>
	table { 
		border-spacing: 0;
		border-collapse: collapse;
	}

	table td, table th {
		border: 1px solid #ccc;
		padding: 5px;
	}

	table th {
		background: #eee;
	}
</style>

<body>
	<table>
		<tbody>
			<tr>
				<th>Название</th>
				<th>Автор</th>
				<th>Год выпуска</th>
				<th>Жанр</th>
				<th>ISBN</th>
			</tr>

			<?php 
			$pdo = new PDO("mysql:host=localhost; dbname=books; charset = utf8", "root");
			$sql = "SELECT * FROM books";
			$stmt = $pdo -> query ($sql); 
			foreach ($stmt as $row) {
				echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["author"] . "</td>";
				echo "<td>" . $row["year"] . "</td>";
				echo "<td>" . $row["isbn"] . "</td>";
				echo "<td>" . $row["genre"] . "</td>";
				echo "</tr>";		
				}	
				?>		

			</tbody>
		</table>


	</body>
	</html>