<?php include "conexion.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Listado de Géneros</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php include "menu.php" ?>
		<h1>Listado de Géneros</h1>
		<?php

		$query = mysql_query("SELECT * from generos");

		while ($renglon = mysql_fetch_array($query)){
			echo "<div class='titulo'>" . $renglon['nombre'] . "</div>";
			echo "<br />";
		}
		?>
	</body>
</html>


