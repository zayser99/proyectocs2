<?php
if (!isset($_GET["idp"]) and !isset($_GET["ida"])) {
    exit("No hay ids");
}
$mysqli = include_once "../../connect.php";

$ida = $_GET["ida"];
$idp = $_GET["idp"];
$fecha = $_GET["fecha"];

$sentencia = $mysqli->prepare("DELETE FROM profesores_actas WHERE acta_id =? and profe_id =?");
$sentencia->bind_param("ii", $ida, $idp);
$sentencia->execute();



header("Location: ../../../Agregar.php? id=".$ida ."& fecha=".$fecha);