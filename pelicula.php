<?php 
	include "conexion.php";
	$query = mysql_query("SELECT * from peliculas WHERE id=" . $_GET["id"] );
	$query2 = mysql_query("SELECT * from peliculas WHERE id=" . $_GET["id"] );

 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php
		
		while ($renglon2 = mysql_fetch_array($query2)){
			echo "<title>" . $renglon2['titulo'] . "</title>";
		}
		
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php
		
		while ($renglon = mysql_fetch_array($query)){
			echo "<h1 class='titulo'>" . $renglon['titulo'] . "</h1>";
		}
		
		?>
		

	</body>
</html>

