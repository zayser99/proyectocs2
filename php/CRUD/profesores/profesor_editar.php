<?php
$mysqli = include_once "../../connect.php";


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero = $_POST["numero"];

$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];


$sentencia = $mysqli->prepare("UPDATE profesores SET
profe_nombre = ?,
profe_apellido = ?,
profe_numero = ?,
profe_correo = ?,
profe_usuario = ?,
profe_password = ?
WHERE profe_id = ?");
$sentencia->bind_param("ssssssi", $nombre, $apellido, $numero, $correo, $usuario, $pass, $id);
$sentencia->execute();


//sustituir por url de form
// header("Location: listar.php");