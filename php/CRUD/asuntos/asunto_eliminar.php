<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "../../connect.php";

$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM asuntos WHERE asunto_id =?");
$sentencia->bind_param("i", $id);
$sentencia->execute();


//susutituir por locaicon de la tabla
// header("Location: ../row_actas.php");