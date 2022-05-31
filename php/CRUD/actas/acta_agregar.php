<?php
$mysqli = include_once "../../connect.php";

session_start();
$username = $_SESSION['user'];
$lugar = '';
$titulo = '';

$sentencia = $mysqli->prepare("INSERT INTO actas
(acta_id, acta_fecha, acta_lugar, acta_titulo)
VALUES
(null, NOW(), ?, ?)");
$sentencia->bind_param("ss", $lugar, $titulo);
$sentencia->execute();

//consultamos los datos para meterlos en un objeto
 $resultado = $mysqli->query("SELECT max(acta_id) AS Id FROM actas");
 $actas = $resultado->fetch_all(MYSQLI_ASSOC);

 foreach($actas as $acta){
 	$id= $acta["Id"];
 }

 $resultado2 = $mysqli->query("SELECT acta_fecha FROM actas WHERE acta_id = ".$id);
 $actas2 = $resultado2->fetch_all(MYSQLI_ASSOC);

 foreach($actas2 as $acta){
 	$fecha= $acta["acta_fecha"];
 }

 $resultado3 = $mysqli->query("SELECT * FROM profesores WHERE profe_usuario = '".$username."'");

 $profes3 = $resultado3->fetch_all(MYSQLI_ASSOC);

 foreach($profes3 as $profe){
 	$idProfe= $profe["profe_id"];
 }

$sentencia2 = $mysqli->prepare("INSERT INTO profesores_actas
(profe_id, acta_id, creador, estuve)
VALUES
(?, ?, 1, 1)");
$sentencia2->bind_param("ii", $idProfe, $id);
$sentencia2->execute();

//sustituir por locacion del formulario
header("Location: ../../../InicioAgregar.php? id=".$id);
