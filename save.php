<?php
include("db.php");
if (isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $codigo=$_POST['codigo'];
    $cantidad=$_POST['cantidad'];
    $empresa=$_POST['empresa'];
    $descripcion=$_POST['descripcion'];

    $query="INSERT INTO `daw2s`(`id`, `nombre`, `codigo`, `cantidad`, `empresa`, `descripcion`) 
        VALUES (NULL,'$nombre','$codigo','$cantidad','$empresa','$descripcion')";
    /*comprobacion*/
    $resultado=mysqli_query($conexion,$query);
    /*if(!$resultado){
        die("Query Fail");
    }*/

    /*Mensaje*/
    $_SESSION['mensaje']='LA TAREA HA SIDO GUARDADA';
    $_SESSION['tipo_mensaje']='Secondary';

    header("Location:index.php");
}
?>