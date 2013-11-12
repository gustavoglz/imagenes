<?php 
	include "conexion.php";
	$id = $_POST["id"];
	
	$query = mysql_query("UPDATE peliculas SET titulo='" . $_POST["titulo"] . "',sinopsis='" . $_POST["sinopsis"] . "',fecha_estreno='". $_POST["fecha_estreno"] . "' WHERE id=" . $_POST["id"] );
	
	header ("Location:editar.php?id=$id");

 ?>

