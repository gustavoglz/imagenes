<?php
include"conexion.php";

$name = $_FILES["image"] ["name"];
$type = $_FILES["image"] ["type"];
$size = $_FILES["image"] ["size"];
$temp = $_FILES["image"] ["tmp_name"];
$error = $_FILES["image"] ["error"];

$nombrecompuesto = date('His'). "-" .$name;

if ($error > 0 )
	die ("Error $error");
else
{
	//$allowed = array ('image/pjpeg', 'image/jpeg', 'image/JPEG', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
    
	$permitido = array ('image/pjpeg', 'image/jpeg', 'image/JPEG', 'image/JPG');
	if (in_array($_FILES['image']['type'], $permitido)) 
	{
				move_uploaded_file($temp,"posters/".$nombrecompuesto);
				
	}
		else
	{
		die ("El formato no es permitido o el archivo es muy grande");
	}
	
	
}
$query = mysql_query("INSERT INTO  peliculas (titulo, fecha_estreno, sinopsis, poster) VALUES ('" . $_POST['titulo'] ."','" . $_POST['fecha_estreno'] . "','". $_POST['sinopsis'] . "','". $nombrecompuesto . "')");
header('Location:index.php');
?>

