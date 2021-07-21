<!doctype html>
<html class="no-js" lang="span">

<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Publicaciones - DIICC UDA";
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
                                <h2>Publicaciones</h2>
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
                        $sql = "SELECT * FROM `publicaciones` ORDER BY id ASC"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){ ?>


                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb-60">
                        <div class="blog-img">
                             <?php echo '<a href="publicaciones.php?id=' . $mostrar["id"] . '"></a>'; ?><img src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></a>
                            <div class="blog-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p><?php echo $mostrar['autor']; ?> / <?php echo $mostrar['fecha'];?> / <?php echo $mostrar['revision'];?></p>
                            </div>
                            <div class="blog-bottom">
                                <h2><?php echo '<a href="' . $mostrar["acceso"] . '">' . $mostrar['titulo'] . '</a>'; ?></h2>
                                <?php echo '<a href="' . $mostrar["acceso"] . '">Seguir Leyendo</a>'; ?>
                            </div>
                        </div>
                    </div>
                </div>
              
                                

                    <?php  }?>
               
           
            <div class="row">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">1</a></li><!-- Por el momento es una sola pagina para el prototipo-->

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Blog End -->
    <!-- FOOTER -->
    <?php include_once "include/footer.php"; ?>
    <!-- FOOTER -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>