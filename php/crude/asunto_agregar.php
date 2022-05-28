<?php
$mysqli = include_once "../connect.php";


$detalle = $_POST["detalle"];
$idActa = $_POST["idActa"];


$sentencia = $mysqli->prepare("INSERT INTO asuntos
(asunto_id, asunto_detalle, acta_id)
VALUES
(null, ?, ?)");
$sentencia->bind_param("si", $detalle, $idActa);
$sentencia->execute();

//sustituir por locacion del formulario
//header("Location: listar.php");
