<?php include "conexion.php";
$colores = array('#65b24b', '#0d89e8', '#e8d60d', '#b8b8b8', '#e11382', '#e16513');
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Listado de Películas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php include "menu.php" ?>
		<h1>Listado de Pel&iacute;culas</h1>
		<?php

		$query = mysql_query("SELECT * from peliculas");

		while ($renglon = mysql_fetch_array($query)){
			
			echo "<div class='pelicula' style='background:".  $colores[array_rand($colores)] . ";'>";
			
			echo "<div class='titulo'>" . $renglon['titulo'] . "</div>";
			echo "<div class='poster'> <img height='140' src='/conexion/posters/" . $renglon['poster'] . "' /></div>";
			echo "<div class='fecha_estreno'>" . $renglon['fecha_estreno'] . "</div>";
			echo "<div class='sinopsis'> <p>" .  $renglon['sinopsis'] . " </p> </div>";
			echo "<a href='pelicula.php?id=" . $renglon['id']  . "'>Ver más</a>";
			echo " | ";
			echo "<a href='editar.php?id=" . $renglon['id']  . "'>Editar</a>";
			echo " | ";
			echo "<a href='borrar.php?id=" . $renglon['id']  . "'>Borrar</a>";
			echo "</div>";
		}
		?>
		<div class="clear"></div>
	</body>
</html>



