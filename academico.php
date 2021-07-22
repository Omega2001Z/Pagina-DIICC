<!doctype html>
<html class="no-js" lang="es">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académico - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>



    <body>
        <!-- Header -->
        <?php include_once "include/header2.php"; ?>
        <!-- Header Area End -->
        <!-- Banner Area Start
        <div class="banner-area-wrapper">
            <div class="banner-area text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Detalles </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Banner Area End -->
        <!-- Teacher Start -->
        <?php 
            $sql = sprintf("select * from funcionarios where id=%s",$_GET['id']);
            $resultado = mysqli_query($conexion, $sql);
            $mostrar = mysqli_fetch_array($resultado); 
        ?>
        <div class="teacher-details-area pt-150 pb-60">
            <div class="container">
                <div class="col">
                    <div class="row-flex">

                        <div class="col teacher-details-img">
                            <img alt="teacher" style="width: 100%;" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                        </div>

                        <div class="col teacher-details-content">
                            <style type="text/css">
                                table,
                                th,
                                td {
                                    border: 1px solid black;
                                }
                            </style>
                            <h2><?php echo $mostrar['Nombre']; ?></h2>
                            <h5>Profesor</h5>
                            <h4></h4>
                            <p><?php echo $mostrar['descripcion']; ?></p>
                            <ul>
                                <li><span>Grado Academico: </span><?php echo $mostrar['grado_academico']; ?>
                                </li>
                                <li><span>Areas de interes: </span><?php echo $mostrar['area_interes']; ?>
                                </li>
                            </ul>

                            <div class="col">
                                <div class="teacher-contact">
                                    <h4>Informacion de contacto:</h4>
                                    <p><span>Correo: </span><?php echo $mostrar['correo']; ?></p>
                                    <p><span>FONO: </span><?php echo $mostrar['fono']; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row-md-5 row-sm-5 row-xs-12">

                        <h3>Artículos</h3>
                        <table class="table" style="width: 100%">
                            <thead class="table-dark">
                                <tr align="center">
                                    <th>Título</th>
                                    <th>Autores</th>
                                    <th>Fecha de Publicación</th>
                                    <th>Ver artículo</th>
                                </tr>
                            </thead>
                            <?php
                            $query = "SELECT `titulo`, `autor`, `fecha`, `acceso` FROM `publicaciones` WHERE id_academico=%s";
                            $res = $conexion->query(sprintf($query,$_GET['id']));
                            while ($row = $res->fetch_assoc()) {
                            ?>
                                <tr align="center">
                                    <td><?php echo $row['titulo']; ?></td>
                                    <td><?php echo $row['autor']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><a href="<?php echo $row['acceso']; ?>">Ver Artículo</a></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>