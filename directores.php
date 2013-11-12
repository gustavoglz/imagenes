<?php include "conexion.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Listado de Directores</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php include "menu.php" ?>
		<h1>Listado de Directores</h1>
		<?php

		$query2 = mysql_query("SELECT * from directores");

		while ($renglon2 = mysql_fetch_array($query2)){
			echo "<div class='titulo'>" . $renglon2['nombre'] . "</div>";
			echo "<br />";
		}
		?>
	</body>
</html>


