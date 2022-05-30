
<?php
$mysqli = include_once "connect.php";
$name = $_POST["name"];
$ape = $_POST["ape"];
$telr = $_POST["telr"];
$correo = $_POST["correo"];
$user = $_POST["user"];
$password = $_POST["password"];
$password = hash('sha512',$password);

$insert = "INSERT INTO profesores(profe_id, profe_nombre, profe_apellido, profe_numero, profe_correo, profe_usuario, profe_password) VALUES ('','$name','$ape','$telr','$correo','$user','$password')";

$result = mysqli_query($mysqli, $insert);
header("Location:IndexPrincipal.php");
?>