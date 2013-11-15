<?php
include "conexion.php";
$directores = mysql_query('SELECT * from directores', $conexion);
$generos = mysql_query('SELECT * from generos', $conexion);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Listado de Películas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<header>
		<?php include "menu.php" ?>

	</header>


	<form action="insertar.php" method="POST" enctype="multipart/form-data">
		<p>Titulo</p>
		<input type="text" name="titulo" id="titulo">
		<br>
		<p>Sinopsis</p>
		<textarea name="sinopsis" col="50" rows="4"></textarea>
		<br>
		<p>Fecha de Estreno</p>
		<input type="text" name="fecha_estreno" id="fecha_estreno">
		<br>
		<p>Poster</p>
		<input type="file" name="image" id="image"><br>
		
		<p>Director</p>
		<select name="id_director" id="id_director">
			<option value="">Selecciona uno</option>
			<?php
		while($reglon = mysql_fetch_array($directores)){
			echo "<option value ='" . $reglon["id"] . "'>" . $reglon["nombre"] . "</option>";
		}
		?>
	</select>

	<p>Género</p>
	<select name="id_genero" id="id_genero">
		<option value="">Selecciona uno</option>
		<?php
	while($reglon2 = mysql_fetch_array($generos)){
		echo "<option value ='" . $reglon2["id"] . "'>" . $reglon2["nombre"] . "</option>";
	}
	?>
</select>

<p><input type="submit" value="Continuar"></p>
</body>
<html>














