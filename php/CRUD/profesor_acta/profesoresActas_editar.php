<?php
$mysqli = include_once "../../connect.php";


$idProfe = $_POST["idProfe"];
$idActa = $_POST["nombre"];
$estuve = $_POST["estuve"];





$sentencia = $mysqli->prepare("UPDATE profesores_actas SET
estuve = ?
WHERE profe_id = ? and acta_id = ?");
$sentencia->bind_param("iii", $estuve, $idProfe, $idActa);
$sentencia->execute();


//sustituir por url de form
// header("Location: listar.php");