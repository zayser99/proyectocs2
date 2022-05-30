<?php
$mysqli = include_once "../../connect.php";


$idActa = $_GET["idActa"];
$fecha = $_GET["fecha"];
$idProfe = $_POST["idProfe"];
$creador = 0;
$estuve = 0;


$sentencia = $mysqli->prepare("INSERT INTO profesores_actas
(profe_id, acta_id, creador, estuve)
VALUES
(?, ?, ?, ?)");
$sentencia->bind_param("iiii", $idProfe, $idActa, $creador, $estuve);
$sentencia->execute();

//sustituir por locacion del formulario
header("Location: ../../../Agregar.php? id=".$idActa ."& fecha=".$fecha);
