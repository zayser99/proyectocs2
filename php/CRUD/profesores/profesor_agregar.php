<?php
$mysqli = include_once "../../connect.php";



$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero = $_POST["numero"];

$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];


$sentencia = $mysqli->prepare("INSERT INTO profesores
(profe_id, profe_nombre, profe_apellido, profe_numero, profe_correo, profe_usuario, profe_password)
VALUES
(null, ?, ?, ?, ?, ?, ?)");
$sentencia->bind_param("ssssss", $nombre, $apellido, $numero, $correo, $usuario, $password);
$sentencia->execute();

//sustituir por locacion del formulario
//header("Location: listar.php");
