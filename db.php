<?php
session_start();





$servidor="localhost";
$usuario="root";
$password="";
$bd="daw2s";

//Conexion
$conexion= new mysqli($servidor,$usuario,$password,$bd);
/*if($conexion->connect_error){
    die("No se ha podido rralizar la conexion_" .mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($conexion,"utf8");
    echo "se ha establecido correctamente la conexion a la base de datos";
}*/
?>