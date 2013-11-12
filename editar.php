<?php 
	include "conexion.php";
	$id = $_GET["id"];
	$query = mysql_query("SELECT * from peliculas WHERE id=" . $_GET["id"] );
	while ($reglon = mysql_fetch_array($query)){
		$titulo = $reglon['titulo'];
		$sinopsis = $reglon['sinopsis'];
		$fecha_estreno = $reglon['fecha_estreno'];
	}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		
		<?php include "menu.php" ?>
	<form action="update.php" method="POST">
		<input type="hidden" id="id" name="id" value="<?php echo $id ?>"></input>
		<h1>Titulo</h1>
		<input type="text" id="titulo" name="titulo" value= "<?php echo $titulo; ?>"></input>
		<h1>Sinopsis</h1>
		<textarea id="sinopsis"  name="sinopsis"><?php echo $sinopsis; ?></textarea>
		<h1>Fecha Estreno</h1>
		<input type="text" id="fecha_estreno" name="fecha_estreno" value= "<?php echo $fecha_estreno; ?>"></input>
		<br />
		<br />
		<br />
		<input type="submit" value="Actualizar"></input>
		
	</form>
		

	</body>
</html>
