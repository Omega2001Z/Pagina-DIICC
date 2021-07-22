<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Bolsa de Trabajo - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>
    <body>
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area-wrapper">
            <div class="banner-area text-center">   
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Portal de trabajo</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Banner Area End -->
        <!-- Blog Start -->
        <div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM `trabajos` ORDER BY fecha ASC"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){

                            echo sprintf(
                                '
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-blog mb-60">
                                        <div class="blog-img">
                                            <a href="postular-trabajo.php?id=%s"><img src="%s" alt="blog"></a>
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-top">
                                                <p><span class="post-autor">%s</span></p>
                                            </div>
                                            <div class="blog-bottom">
                                                <h2><p class="text-justify">%s</p></h2>
                                                <div class="container-bottom">
                                                    <a href="postular-trabajo.php?id=%s" class="btn btn-primary">Ir a la página</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ',
                                $mostrar['id'],
                                fromroot($file, $mostrar["img_path"], true),
                                strftime('Publicado el %d/%m/%Y a las %I:%M %p', strtotime($mostrar['fecha'])),
                                $mostrar['cargo'],
                                $mostrar['id'],
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>