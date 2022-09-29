<?php include ("db.php")?>

<?php include ("includes/header.php")?>
    <div class="container p-4">
        <?php if(isset($_SESSION['mensaje'])) {?>
            <div class="alert alert-<?=$_SESSION["tipo_mensaje"];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION["mensaje"] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset();}?>
        <div class="row">
            <div class="col-md-6">
                    <div style="text-align:center;padding:10px;">
                        <div >
                            <div class="contenedor-formulario">
                                <header>
                                    <h1>Ingrese los datos </h1>
                                </header>
                                <form action="save.php" method="POST">
                                    <div class="form-group">
                                        <input class="campo-texto" id="nombre" type="text" name="nombre" placeholder="Nombre" maxlength="100" required="" /> 
                                        <input class="campo-texto" id="apellido" type="text" name="codigo" placeholder="Codigo" maxlength="100" required="" /> 
                                        <input class="campo-texto" id="usuario" type="number" name="cantidad" placeholder="Cantidad" maxlength="100" required="" /> 
                                        <input class="campo-texto" id="email" type="text" name="empresa" placeholder="Empresa" maxlength="100" required="" />
                                        <input class="campo-texto" id="password" type="text" name="descripcion" placeholder="Descripcion" maxlength="100" required="" /> 
                                        <input type="reset" value="Limpiar" class="borrar" nombre="limpiar"/>
                                        <input type="submit" value="Enviar" class="submit" name="enviar" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>IDENTIFICADOR</th>
                            <TH>NOMBRE DEL PRODUCTO</TH>
                            <TH>CODIGO DEL PRODUCTO</TH>
                            <TH>CANTIDAD DEL PRODUCTO</TH>
                            <TH>FABRICANTE</TH>
                            <TH>Descripcion</TH>
                        </tr>
                    </thead>                        
                    <TBody>
                        <?php
                            $query="SELECT * FROM `daw2s`";
                            $resultados1=mysqli_query($conexion,$query);
                            while($row=mysqli_fetch_array($resultados1)){?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['codigo']?></td>
                                <td><?php echo $row['cantidad']?></td>
                                <td><?php echo $row['empresa']?></td>
                                <td><?php echo $row['descripcion']?></td>
                                <td>
                                    <a href="edit.php?id=<?php  echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete.php?id=<?php  echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </TBody>
                </table>
            </div>
        </div>
    </div>
<?php include ("includes/footer.php")?>
