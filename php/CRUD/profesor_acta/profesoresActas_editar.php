<?php
$mysqli = include_once "../../connect.php";


$idProfe = $_GET["idProfe"];
$idActa = $_GET["idActa"];
$estuve = $_GET["estuve"];
$fecha = $_GET["fecha"];




$sentencia = $mysqli->prepare("UPDATE profesores_actas SET
estuve = ?
WHERE profe_id = ? and acta_id = ?");
$sentencia->bind_param("iii", $estuve, $idProfe, $idActa);
$sentencia->execute();

//sustituir por url de form
header("Location: ../../../Agregar.php? id=".$idActa ."& fecha=".$fecha);