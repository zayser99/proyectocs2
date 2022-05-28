<?php
$mysqli = include_once "../connect.php";

$idActa = $_POST["idActa"];
$idProfe = $_POST["idProfe"];
$creador = $_POST["creador"];
$estuve = $_POST["estuve"];





$sentencia = $mysqli->prepare("INSERT INTO profesores_actas
(profe_id, acta_id, creador, estuve)
VALUES
(?, ?, ?, ?)");
$sentencia->bind_param("iiii", $idProfe, $idActa, $creador, $estuve);
$sentencia->execute();

//sustituir por locacion del formulario
//header("Location: listar.php");
