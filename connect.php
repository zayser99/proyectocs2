<?php 
    $server = "localhost";  
    $user = "root";
    $password= "";
    $db="minutas";
    $conexion = new mysqli($server, $user, $password, $db);
    
    if($conexion->connect_errno){
        die("la conexion ha fallado".$conexion->connect_errno);
    } 

    return $conexion;
?>
    