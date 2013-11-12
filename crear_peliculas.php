<?php
include "conexion.php";
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
			<input type="file" name="image" id="image"><br>
	<p><input type="submit" value="Continuar"></p>
		</body>
		<html>
			
			
			
		
			
		


			 
		
				



