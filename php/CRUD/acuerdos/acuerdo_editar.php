<?php
$mysqli = include_once "../../connect.php";
$id = $_POST["id"];
$detalle = $_POST["detalle"];
$actaId = $_POST["actaId"];

$sentencia = $mysqli->prepare("UPDATE acuerdos SET
acuerdo_detalle = ?,
acta_id = ?
WHERE acuerdo_id = ?");
$sentencia->bind_param("sii", $detalle, $actaId, $id);
$sentencia->execute();


//sustituir por url de form
// header("Location: listar.php");