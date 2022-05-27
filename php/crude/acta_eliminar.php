<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "../connect.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM actas WHERE acta_id =?");
$sentencia->bind_param("i", $id);
$sentencia->execute();

echo $id;
//header("Location: ../row_actas.php");