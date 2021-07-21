<!DOCTYPE html>
<html lang="es">
<?php
session_start();
$file = __FILE__;
include_once "../include/functions.php";
include_once "../config/config.php";
include_once "../include/dashboard/head.php";
?>

<body>
    <div class="container-contenido">
        <?php include_once "../include/dashboard/header.php"; ?>
        <div class="capa"></div>
        <!--	--------------->
        <?php include_once "../include/dashboard/navbar.php"; ?>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                    <div class="container-formulario">
                        <?php
                        $sql = sprintf("select * from trabajos where id=%s", $_GET['id']);
                        $resultado = mysqli_query($conexion, $sql);
                        $mostrar = mysqli_fetch_array($resultado);
                        ?>
                        <form class="form" action="../database/trabajo/modificar.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name='id' <?php echo sprintf('value="%s"', $_GET['id']); ?>>
                            <div class="input-group">
                                <input class="form-control" type="file" name="img">
                                <span class="input-group-addon" id="basic-addon1"><i class="bi bi-file-image"></i></span>
                            </div>
                            <div class="input-group">

                                <span class="input-group-addon" id="basic-addon2">@</span>
                                <input type="text" name='titulo' class="form-control" placeholder="Titulo" aria-describedby="basic-addon1" <?php echo sprintf('value="%s"',  $mostrar['cargo']); ?>>
                            </div>
                           <div class="input-group">
                                <span class="input-group-addon" id="basic-addon6"><i class="bi bi-paint-bucket"></i></span>
                                <input  class="form-control" name="empresa" placeholder="Empresa" <?php echo sprintf('value="%s"',$mostrar['empresa']); ?>>
                            </div>
                             <div class="input-group">
                                <span class="input-group-addon" id="basic-addon6"><i class="bi bi-paint-bucket"></i></span>
                                <input  class="form-control" name="ciudad" placeholder="ciudad" <?php echo sprintf('value="%s"',$mostrar['ciudad']); ?>>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3"><i class="bi bi-paint-bucket"></i></span>
                                <textarea class="form-control" name="descripcion" placeholder="Descripcion" style="height: 250px;"><?php echo   $mostrar['descripcion']; ?></textarea>
                            </div>

                            <div class="container-bttn p-3 row">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

<script src=<?php echo fromroot($file, "js/vendor/jquery-1.12.0.min.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/bootstrap.min.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/jquery.meanmenu.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/jquery.magnific-popup.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/ajax-mail.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/owl.carousel.min.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/jquery.mb.YTPlayer.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/jquery.nicescroll.min.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/plugins.js"); ?>></script>
<script src=<?php echo fromroot($file, "js/main.js"); ?>></script>

</html>