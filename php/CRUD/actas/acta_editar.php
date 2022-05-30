<?php
$mysqli = include_once "../../connect.php";


$id = $_GET["id"];
$lugar = $_POST["lugar"];
$titulo = $_POST["titulo"];


$sentencia = $mysqli->prepare("UPDATE actas SET
acta_lugar = ?,
acta_titulo = ?
WHERE acta_id = ?");
$sentencia->bind_param("ssi", $lugar, $titulo, $id);
$sentencia->execute();

$resultado2 = $mysqli->query("SELECT acta_fecha FROM actas WHERE acta_id = ".$id);
 $actas2 = $resultado2->fetch_all(MYSQLI_ASSOC);

 foreach($actas2 as $acta){
 	$fecha= $acta["acta_fecha"];
 }

//sustituir por url de form
header("Location: ../../../Agregar.php? id=".$id ."& fecha=".$fecha);