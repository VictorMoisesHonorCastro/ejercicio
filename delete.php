<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM daw2s WHERE id=$id";
        $result=mysqli_query($conexion,$query);
        if(!$result){
            die("ELIMINACION FALLIDA");
        }

        $_SESSION['message'] = 'SEHA ELIMINADO CORRECTAMENTE';
        $_SESSION['message_type'] = 'Secondary';
        header("Location: index.php");
    }

?>