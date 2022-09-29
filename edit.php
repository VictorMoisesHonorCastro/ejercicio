<?php
    include("db.php");
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="SELECT * FROM daw2s WHERE id=$id";
        $result=mysqli_query($conexion,$query);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $nombre=$row['nombre'];
            $codigo=$row['codigo'];
            $cantidad=$row['cantidad'];
            $empresa=$row['empresa'];
            $descripcion=$row['descripcion'];
        }
    }

    if(isset($_POST['enviar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];
        $cantidad = $_POST['cantidad'];
        $empresa = $_POST['empresa'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE `daw2s` set `nombre`='$nombre', `codigo`='$codigo', `cantidad`='$cantidad', `empresa`='$empresa', `descripcion`='$descripcion' WHERE id=$id";
        mysqli_query($conexion,$query);
        header("Location: index.php");
    }
?>
<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="contenedor-formulario">
                    <header>
                        <h1>Actualize los datos </h1>
                    </header>
                    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                        <div class="form-group">
                            <input class="campo-texto" id="nombre" type="text" name="nombre" value="<?php echo $nombre?>" placeholder="Nombre" maxlength="100" required="" /> 
                            <input class="campo-texto" id="apellido" type="text" name="codigo" value="<?php echo $codigo?>" placeholder="Codigo" maxlength="100" required="" /> 
                            <input class="campo-texto" id="usuario" type="number" name="cantidad" value="<?php echo $cantidad?>" placeholder="Cantidad" maxlength="100" required="" /> 
                            <input class="campo-texto" id="email"  type="text" name="empresa" value="<?php echo $empresa?>"placeholder="Empresa" maxlength="100" required="" />
                            <input class="campo-texto" id="password" type="text" name="descripcion" value="<?php echo $descripcion?>" placeholder="Descripcion" maxlength="100" required="" /> 
                            <input type="reset" value="Limpiar" class="borrar" nombre="limpiar"/>
                            <input type="submit" value="Enviar" class="submit" name="enviar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>