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
			width: 100px;
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
		$fecha = $_GET["fecha"];
	?>
	<div>
		<center><font face="Oswald"><h1 class="titulo">Agregar actas</h1></font>
		</center>
	</div>

	<center><div name="registrar">
		<p class="fw-bold mb-1"> <?php echo $id?></p>
		<p class="fw-bold mb-1"> <?php echo $fecha?></p>
		<p><font face="Oswald" size="6"><b><i>ASUNTOS A TRATAR:<br>
		<form action="php/CRUD/asuntos/asunto_agregar.php? idActa=<?php echo $id ?> & fecha=<?php echo $fecha ?>" method="POST" class="linea">
        <div class="boton">
        <input type="submit" value="+" /></div>
			<textarea name="detalle" rows="10" cols="50"></textarea>
		</form></i></b></font></p>


	<!-- consultamos los datos para meterlos en un objeto -->
    <?php
    $conexion = include_once "php/connect.php";
    $resultado = $conexion->query("SELECT asunto_id, asunto_detalle FROM asuntos WHERE acta_id=".$id);
    $asuntos = $resultado->fetch_all(MYSQLI_ASSOC);
    ?>

    <div class="container my-5">
        <div class="shadow-4 rounded-3 overflow-hidden">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Detalles</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($asuntos as $asunto) { ?>

                        <tr>

                            <td>
                                <p class="text-muted mb-0"><?php echo $asunto["asunto_detalle"] ?></p>
                            </td>


                            <td>
                            
                                
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='CRUD/asuntos/asunto_eliminar.php? id=<?php echo $asunto['asunto_id'] ?>'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                    Eliminar
                                </button>


                            </td>
                            </td>
                        </tr>


                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>




    	<p><font face="Oswald" size="6"><b><i>ACUERDOS REALIZADOS:<br>
		<form action="php/CRUD/acuerdos/acuerdo_agregar.php? idActa=<?php echo $id ?> & fecha=<?php echo $fecha ?>" method="POST" class="linea">
        <div class="boton"><input type="submit" value="+" /></div>
			<textarea name="detalle" rows="10" cols="50"></textarea>
		</form></i></b></font></p>


		<!-- consultamos los datos para meterlos en un objeto -->
    <?php
    $resultado = $conexion->query("SELECT acuerdo_id, acuerdo_detalle FROM acuerdos WHERE acta_id=".$id);
    $acuerdos = $resultado->fetch_all(MYSQLI_ASSOC);
    ?>

    <div class="container my-5">
        <div class="shadow-4 rounded-3 overflow-hidden">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Detalles</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($acuerdos as $acuerdo) { ?>

                        <tr>

                            <td>
                                <p class="text-muted mb-0"><?php echo $acuerdo["acuerdo_detalle"] ?></p>
                            </td>


                            <td>
                          
                                
                                <button type="button" class="btn btn-outline-danger" onclick="window.location.href='CRUD/acuerdos/acuerdo_eliminar.php? id=<?php echo $acuerdo['acuerdo_id'] ?>'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                    Eliminar
                                </button>


                            </td>
                            </td>
                        </tr>


                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>




		<p><font face="Oswald" size="6"><b><i>ASISTENTES:</i></b></font><br></p>
		<!-- consultamos los datos para meterlos en un objeto -->
		<?php
    	$resultado = $conexion->query("SELECT acta_id, profe_id, profe_nombre, profe_apellido, profe_correo, creador, estuve FROM profesores NATURAL JOIN profesores_actas WHERE acta_id=".$id);
    	$profesores = $resultado->fetch_all(MYSQLI_ASSOC);

    	$resultado2 = $conexion->query("SELECT profe_id, profe_nombre, profe_apellido FROM profesores;");
    	$profesores2 = $resultado2->fetch_all(MYSQLI_ASSOC);
    	?>

		
		<form action="php/CRUD/profesor_acta/profesoresActas_agregar.php? idActa=<?php echo $id ?> & fecha=<?php echo $fecha ?>" method="POST" class="linea">
			<select name="idProfe">
			<?php


			foreach ($profesores2 as $profe) {

			?>
  				<option value="<?php echo $profe['profe_id'] ?>"><?php echo $profe["profe_nombre"] . " " . $profe["profe_apellido"] ?></option>

  				<?php } ?>
		</select>
        
			<input type="submit" value="+" style="background-color: green;"/>
		</form>

    <div class="container my-5">
        <div class="shadow-4 rounded-3 overflow-hidden">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Status</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($profesores as $profe) { ?>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"> <?php echo $profe["profe_nombre"] . " " . $profe["profe_apellido"] ?> </p>
                                        <p class="text-muted mb-0"><?php echo $profe["profe_correo"] ?></p>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] == 1) {
                                ?>
                                    <span class="badge rounded-pill bg-primary">creador</span>
                                <?php
                                } elseif ($profe["estuve"] == 1) { ?>
                                    <span class="badge rounded-pill bg-secondary">Asistio</span>
                                <?php
                                } else {
                                ?>
                                    <span class="badge rounded-pill bg-warning text-dark">No Asistio</span>
                                <?php
                                } ?>


                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] != 1) {
                                ?>
                                    <button type="button" class="btn btn-outline-danger" onclick="window.location.href='php/CRUD/profesor_acta/profesoresDeActas_eliminar.php? ida=<?php echo $profe['acta_id'] ?>& idp=<?php echo $profe['profe_id'] ?>& fecha=<?php echo $fecha ?>'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                        Eliminar
                                    </button>
                                <?php
                                }  ?>

                            </td>
                            </td>

                            <td>
                                <?php
                                if ($profe["creador"] != 1) {
                                ?>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><button class="dropdown-item" type="button" onclick="window.location.href='php/CRUD/profesor_acta/profesoresActas_editar.php? idProfe=<?php echo $profe['profe_id'] ?>& idActa=<?php echo $profe['acta_id'] ?>& estuve=<?php echo 1 ?>& fecha=<?php echo $fecha ?>'">Asistio</button></li>
                                            <li><button class="dropdown-item" type="button" onclick="window.location.href='php/CRUD/profesor_acta/profesoresActas_editar.php? idProfe=<?php echo $profe['profe_id'] ?>& idActa=<?php echo $profe['acta_id'] ?>& estuve=<?php echo 0 ?>& fecha=<?php echo $fecha ?>'">No Asistio</button></li>
                                        </ul>
                                    </div>
                                <?php
                                }  ?>

                            </td>

                        </tr>


                    <?php } ?>




                </tbody>
            </table>
        </div>
    </div>



		<br><br>
	</div></center>

	<center><div class="boton">
		<form action="php/row_actas.php" method="POST" class="linea">
			<input type="submit" value="Listo" />
		</form>
	</div></center>
    <br>




	<!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>