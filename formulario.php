<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<?php
		include('conexion.php');
	?>
	<h1>Formulario</h1>
	<ul>
		<li>
			<a href="index.php">Inicio</a>
		</li>
		<li>
			<a href="formulario.php">Formulario</a>
		</li>
	</ul>
	<form action="store.php" method="POST">
		<label for="tarea">Tarea:</label>
		<input type="text" name="tarea"><br>
		<label for="descripcion">Descripción:</label>
		<input type="text" name="descripcion"><br>
		<label for="etiqueta">Etiqueta:</label>
		<select name="etiqueta">
			<option value="Escuela">Escuela</option>
			<option value="Personal">Personal</option>
			<option value="Trabajo">Trabajo</option>
		</select><br>
		<input type="submit" value="Envíar">
	</form>
</body>
</html>