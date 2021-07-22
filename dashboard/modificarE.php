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
                        $sql = sprintf("select * from eventos where id=%s", $_GET['id']);
                        $resultado = mysqli_query($conexion, $sql);
                        $mostrar = mysqli_fetch_array($resultado);
                        ?>
                        <form class="form" action="../database/proyectos/modificar.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name='id' <?php echo sprintf('value="%s"', $_GET['id']); ?>>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">@</span>
                                <input type="text" name='nombre' class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" <?php echo sprintf('value="%s"',  $mostrar['nombre']); ?>>
                            </div>
                           <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3"><i class="bi bi-paint-bucket"></i></span>
                                <input  class="form-control" name="fecha" placeholder="fecha" <?php echo sprintf('value="%s"',  strftime('%I:%M %p %d/%m/%Y', strtotime($mostrar['fecha']))) ?>>
                            </div>
                             <div class="input-group" style="width: 100%;">
                                <select style="width: 100%; text-align:center;" class="form-select" name="hora_inicio" id="hora_inicio" aria-label="Floating label select example">
                                    <option value="8:00" selected>8:00</option>
                                    <?php
                                        for ($i = 9; $i < 24; ++$i) {
                                            $hour = "$i:00";
                                            if ($mostrar['hora_inicio'] == $hour){
                                                echo sprintf('<option value="%s">%s</option>', $hour, $hour);
                                            }else{
                                                echo sprintf('<option value="%s">%s</option>', $hour, $hour);
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <select style="width: 100%; text-align:center;" class="form-select" name="hora_termino" id="hora_termino" aria-label="Floating label select example">
                                    <option style="text-align: center;" value="8:00" selected>8:00</option>
                                    <?php
                                        for ($i = 9; $i < 24; ++$i) {
                                            $hour = "$i:00";
                                            echo sprintf('<option value="%s">%s</option>', $hour, $hour);
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon4"><i class="bi bi-paint-bucket"></i></span>
                                <input  class="form-control" name="lugar" placeholder="lugar" <?php echo sprintf('value="%s"',  $mostrar['lugar']); ?>>
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