<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Inicio Administrador</title>
	<!-- bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			background-color: #ceecee;
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

		.boton input:hover {
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

	<!-- navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"> <img src="assets/images/cti.png" alt="" width="30" height="24"
					class="d-inline-block align-text-top"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['user'];

if(!isset($usuario)){
header("location: IndexPrincipal.php");
}else{
echo ($usuario);

}
?>
							<span
								class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
								10
								<span class="visually-hidden">unread messages</span>
							</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class="dropdown-item" href="#">Mi perfil</a></li>
							<li><a class="dropdown-item" href="#">Mis Actas pendientes</a></li>
							<li><a class="dropdown-item" href="#">Actas por Autorizar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<center>
		<font face="Oswald">
			<h1 class="titulo">Bienvenido al Gestor de Minutas Académicas</h1>
		</font>
		<img src="http://www.unacar.mx/unacar/imagenes/imagenes_varias/collage_unacar.png"
			style="width: 1300px; height: 500px;">
	</center>
	</div><br>

	<center>
		<div class="linea">
			<img src="https://terapiaocupacionaluct.files.wordpress.com/2015/10/acta.png?w=480"
				style="width: 230px; height: 230px;">

	</center>

	<center>
		<div class="linea">
			<p><i>Actas</i></p>
		</div>
	</center>

	<center>
		<div class="boton">
			<form action="php/row_actas.php" method="POST" class="linea">
				<input type="submit" value="Acceder" />
			</form>

		</div>
	</center>
	<br><br><br>
	<center>
		<div class="boton">
			<form action="salir.php" method="POST" class="linea">
				<input type="submit" value="Cerrar Sesión" />
			</form>
		</div>
	</center>
</body>

</html>