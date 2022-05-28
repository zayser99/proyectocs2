<?php
$mysqli = include_once "../../connect.php";


$fecha = $_POST["fecha"];
$lugar = $_POST["lugar"];
$titulo = $_POST["titulo"];

$sentencia = $mysqli->prepare("INSERT INTO actas
(acta_id, acta_fecha, acta_lugar, acta_titulo)
VALUES
(null,?, ?, ?)");
$sentencia->bind_param("sss", $fecha, $lugar, $titulo);
$sentencia->execute();

//sustituir por locacion del formulario
//header("Location: listar.php");
