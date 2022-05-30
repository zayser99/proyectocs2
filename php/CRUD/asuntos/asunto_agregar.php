<?php
$mysqli = include_once "../../connect.php";


$detalle = $_POST["detalle"];
$idActa = $_GET["idActa"];
$fecha = $_GET["fecha"];


$sentencia = $mysqli->prepare("INSERT INTO asuntos
(asunto_id, asunto_detalle, acta_id)
VALUES
(null, ?, ?)");
$sentencia->bind_param("si", $detalle, $idActa);
$sentencia->execute();

//sustituir por locacion del formulario
header("Location: ../../../Agregar.php? id=".$idActa ."& fecha=".$fecha);
