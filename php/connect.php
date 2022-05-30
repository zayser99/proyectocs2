<?php 
    $server = "localhost";  
    $user = "root";
    $password= "";
    $db="minutas";
    $conexion = new mysqli($server, $user, $password, $db);
    
    if($conexion->connect_errno){
        die("la conecion ha fallado".$conexion->connect_errno);
    } 

    return $conexion;
?>
    