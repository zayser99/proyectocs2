<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Agregar</title>
	<style type="text/css">
		body
		{
			background-image: url(https://s1.1zoom.me/b5149/175/School_White_background_Pencils_Multicolor_568201_1600x1200.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;
		}
		.boton input
		{
			width: 230px;
			height: 50px;
			text-align: center;
			font-size: x-large; font-weight: bold;
			font-family: Oswald;
			line-height: 1.6em;
			background-color: green;
			border-radius: .5em;
			cursor: pointer;
			transition: background-color 1s;
		}
		.boton input:hover
		{
			background-color: red;
		}
		.linea
		{
			display: inline-block;
		}
		p
		{
			font-size: 2em;
			font-weight: bold;
			font-family: Oswald;
			
		}
	</style>
</head>
<body>
	<?php
	$id = $_GET["id"];

	$mysql = include_once "php/connect.php";
	$resultado = $mysql->query("SELECT * FROM actas WHERE acta_id = ".$id);
 	$actas = $resultado->fetch_all(MYSQLI_ASSOC);

 	foreach($actas as $acta) {
 		$fecha=$acta["acta_fecha"];
 		$titulo=$acta["acta_titulo"];
 		$lugar=$acta["acta_lugar"];
 	}
 	?>
	 <center>
	<p><form action="php/CRUD/actas/acta_editar.php? id=<?php echo $id;?>" method="POST" class="linea">
		<font face="Oswald" size="6"><b><i>TITULO:<br>
			<input type="text" name="titulo" value="<?php echo $titulo;?>" required></input><br>

			<font face="Oswald" size="6"><b><i>LUGAR:<br>
			<input type="text" name="lugar" value="<?php echo $lugar;?>" required></input><br><br>
			<div class="boton">
			<input  type="submit" value="Siguiente" />
			</div><br>
	</form></i></b></font></p>
	 </center>
</body>
</html>