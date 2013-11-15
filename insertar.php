<?php
include"conexion.php";

$name = $_FILES["image"] ["name"];
$type = $_FILES["image"] ["type"];
$size = $_FILES["image"] ["size"];
$temp = $_FILES["image"] ["tmp_name"];
$error = $_FILES["image"] ["error"];

$allowed = array ('image/pjpeg', 'image/jpeg', 'image/JPEG', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');

$nombreunico = date('His'). "-" .$name;

if ($error > 0 )
{
	die ("Error ");
}
else
{
	if(in_array($_FILES['image']['type'], $allowed ) ){
		move_uploaded_file($temp,"posters/".$nombreunico);	
	}else{
		die ("El formato no es permitido");
	}

		
}

$query = mysql_query("INSERT INTO  peliculas (titulo, fecha_estreno, sinopsis, poster,director_id,genero_id) VALUES ('" . $_POST['titulo'] ."','" . $_POST['fecha_estreno'] . "','". $_POST['sinopsis'] . "','". $nombreunico ."','". $_POST['id_director'] . "','". $_POST['id_genero'] ."')");
header('Location:index.php');
?>

