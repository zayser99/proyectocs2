<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Inicio Principal</title>
	<!-- bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			background-image: url(https://www.evirtualplus.com/wp-content/uploads/2016/09/gestores-de-referencias-bibliograficas-dominando-tus-anotaciones.png.webp);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;
		}

		.boton input {
			width: 230px;
			height: 50px;
			text-align: center;
			font-size: 2em;
			font-weight: bold;
			font-family: Oswald;
			line-height: 1.6em;
			background-color: green;
			border-radius: .5em;
			cursor: pointer;
			transition: background-color 1s;
		}
		.boton2 input {
			width: 230px;
			height: 50px;
			text-align: center;
			font-size: 2em;
			font-weight: bold;
			font-family: Oswald;
			line-height: 1.6em;
			background-color: rgb(0, 107, 128);
			border-radius: .5em;
			cursor: pointer;
			transition: background-color 1s;
		}

		.boton input:hover {
			background-color: red;
		}
		.boton2 input:hover {
			background-color: red;
		}

		.linea {
			display: inline-block;
		}

		p {
			font-size: 2em;
			font-weight: bold;
			font-family: Oswald;
		}
	</style>
</head>

<body>
<?php
error_reporting(0);
session_start();

$usuario = $_SESSION['user'];

if(!isset($usuario)){
#header( "refresh:1;url=".$_SERVER['PHP_SELF'] );
}else{
echo ($usuario);
header("location: Index.php");
}
?>
	<br><br><br>
	<center>
		<font face="Oswald">
			<h1 class="titulo">Bienvenido al Gestor de Minutas Académicas</h1>
		</font>
		
	</center>
	</div><br>

	<center>
		<div class="linea">
			<img src="https://condominioexpress.files.wordpress.com/2020/05/administrador-del-condominio.jpg?w=639"
				style="width: 230px; height: 230px;">
			
	</center>

	<center>
		<div class="linea">
			<p><i>Profesor
					
					</i></p>
		</div>
	</center>

	<center>
		<div class="boton">
			<form action="LoginAd.php" method="POST" class="linea">
				<input type="submit" value="Acceder" />
			</form>
		</div>
	</center>
	<br>
	<center>
		<div class="boton2">
			<form action="registro_profe.php" method="POST" class="linea">
				<input type="submit" value="Registrarme" />
			</form>
		</div>
	</center>
</body>

</html>