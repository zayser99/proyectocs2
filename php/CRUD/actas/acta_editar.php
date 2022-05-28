<?php
$mysqli = include_once "../../connect.php";


$id = $_POST["id"];
$fecha = $_POST["fecha"];
$lugar = $_POST["lugar"];
$titulo = $_POST["titulo"];


$sentencia = $mysqli->prepare("UPDATE actas SET
acta_fecha = ?,
acta_lugar = ?,
acta_titulo = ?
WHERE acta_id = ?");
$sentencia->bind_param("sssi", $fecha, $lugar, $titulo, $id);
$sentencia->execute();


//sustituir por url de form
// header("Location: listar.php");