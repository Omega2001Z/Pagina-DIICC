<!DOCTYPE html>
<html lang="es">
<?php

	session_start();
    $file = __FILE__;
    $pagetitle = "ACADEMICOS - DIICC UDA";
    include_once "../config/config.php";
    include_once "../include/functions.php";

	if (!isset($_SESSION['usuario'])){
		header(sprintf('Location:%s', fromroot($file, "index.php", True)));
	}
	include_once fromroot($file, "include/dashboard/head.php", TRUE);
?>

<body>
    <div class="container-contenido">
        <?php include_once fromroot($file, "include/dashboard/header.php", TRUE); ?>
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <?php include_once fromroot($file, "include/dashboard/navbar.php", TRUE); ?>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                   <div class="container-boton">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                            Añadir Funcionario
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="text-align:center;" class="modal-title" id="exampleModalLabel">Nuevo Funcionario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                            <input style="width: 200px; text-align:center;" id="nombre" name="nombre" class="input-text js-input" placeholder="Nombre" type="text" required>
                                        </div>
                                        <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                            <input style="width: 200px; text-align:center;" id="correo" name="correo" class="input-text js-input" placeholder="Correo" type="text" required>
                                        </div>
                                        <div class="form-field  " style="text-align:center; margin-top: 5px;">
                                            <input style="width: 200px; text-align:center;" id="cargo" name="cargo" class="input-text js-input" placeholder="Cargo" type="text" required>
                                        </div>
                                        <div style="margin-left: 110px;" class="form-field "><br>
                                            <input   name="imagen" type="file" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn " data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn">Ingresar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead   >
                            <tr style="height: 40px; ">
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Acción</th>

                                
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php
                            $sql = "select * from funcionarios where es_academico = 2"; // mejorar query falta nombre del que subio la noticia
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr >
                                    <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['Nombre']; ?></small></p>
                                    </td>
                                    <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['correo']; ?></small></p>
                                    </td>
                                    <td>
                                        <p class="card-text" style="text-align: center; width: 50px;"><small class="text-muted"><?php echo $mostrar['fono']; ?></small></p>
                                    </td>
                                    <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['cargo']; ?></small></p>
                                    </td>
                                     <td >
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['descripcion']; ?></small></p>
                                    </td>
                                     <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['grado_academico']; ?></small></p>
                                    </td>
                                     <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['area_interes']; ?></small></p>
                                    </td>
                                    

                                    <td style="text-align: center; "><img style="width: 150px; height: 150px; padding-left:25px;" src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></td>
                                    
                                    
                                   
                                    <td>
                                        <div class="btn-group btn-group-sm" style="text-align: center;" role="group">
                                            <a class="btn btn-secondary"style="color:seagreen;" href="#"><i class="bi bi-pencil"></i></a>
                                            <a class="btn btn-danger" href="#"><i class="bi bi-x-circle"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                    
                </div>
            </section>
        </div>
    </div>
</body>

<?php include_once fromroot($file, "include/dashboard/footer.php", TRUE); ?>
</html>