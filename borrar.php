<?php
include"conexion.php";

$id = $_GET["id"];
$query = mysql_query("SELECT * from peliculas WHERE id=" . $_GET["id"] );
while ($reglon = mysql_fetch_array($query)){

	$img = $reglon['poster'];
}

mysql_query("DELETE FROM peliculas WHERE id = '" . $_GET['id'] ."'");
unlink("posters/".$img);
header('Location: index.php');
?>