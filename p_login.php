<?php
$mysqli = include_once "connect.php";
session_start();
$user = $_POST["user"];
$pass = $_POST["password"];
$pass = hash('sha512',$pass);

try{
	$querylog = mysqli_query($mysqli,"SELECT * FROM profesores WHERE profe_usuario = '$user' AND profe_password = '$pass'");
	
	$resultados = mysqli_query($mysqli,"SELECT profe_usuario FROM profesores WHERE profe_usuario LIKE '$user'");
	while($consulta = mysqli_fetch_array($resultados))
{
    $nombre=$consulta['profe_usuario'];
}
	$nrows = mysqli_num_rows($querylog);
	if(($nrows == 1)){
		#echo ($nombre);
		$_SESSION['user'] = $nombre;
		header("location: Index.php");
		}else{
		echo "<script> alert('Datos incorrectos');window.location.href='LoginAd.php';</script>";
		#header("location: inicio.php");
		}

}catch(Exception $error){}
?>