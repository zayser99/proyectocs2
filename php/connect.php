<?php 
    $server = "localhost";  
    $user = "root";
    $password= "";
    $db="pruebadbcs2";
    $conexion = new mysqli($server, $user, $password, $db);
    
    if($conexion->connect_errno){
        die("la conexion ha fallado".$conexion->connect_errno);
    } 

    return $conexion;
?>
    