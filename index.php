<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
</head>
<body>
	<?php
		include('conexion.php');
	?>
	<h1>Index</h1>
	<ul>
		<li>
			<a href="index.php">Inicio</a>
		</li>
		<li>
			<a href="formulario.php">Formulario</a>
		</li>
	</ul>
	<?php
		$sql = "SELECT * FROM tareas";
		$stmt = $conn->prepare($sql);
  		$stmt->execute();
 
  		// Configura los resultados como un arreglo asociativo
  		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		echo "<table>";
		echo "<tr>";
		echo "<td>Tarea</td> <td>Descripción</td> <td>Etiqueta</td>";
		echo "</tr>";
  		// $stmt->fetchAll() Obtiene el arreglo asociativo
  		foreach ($stmt->fetchAll() as $row) {
			echo "<tr>";
			echo "<td> $row[tarea] </td> <td> $row[descripcion] </td> <td> $row[etiqueta] </td> <br>";
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>