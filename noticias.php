<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Noticias - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";

    if (!isset($_GET['page'])){
        $page = 0;
    }
    else{
        $page = $_GET['page'];
    }
?>

<body>
    <!-- Header -->
    <?php include_once "include/header.php"; ?>
    <!-- Header Area End -->

    <!-- Banner -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Noticias</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Blog Start -->
    <div class="blog-area pt-50 pb-50">
        <div class="container">
            <div class="row">

                <?php
                $sql = sprintf("SELECT * FROM noticias LIMIT 10 OFFSET %d",$page*10); 
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>


                    <!-- Título noticia1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog mb-60">
                            <div class="blog-img">
                                <?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '"></a>'; ?><img src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>Escrito por <?php echo $mostrar['correo']; ?> / <?php echo $mostrar['fecha']; ?></p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '">' . $mostrar['titulo'] . '</a>'; ?></h2>
                                    <!-- Ojos con el error de index del while si existen noticias -->
                                    <?php echo '<a href="noticia.php?id=' . $mostrar["id"] . '">Leer más...</a>'; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                <!-- cierre del while -->

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <?php 
                            #$total = mysqli_query($conexion, 'SELECT count(*) from noticias;');
                            if ($page == 0){
                                ++$page;
                            }
                                $page = $page + 1;
                                echo '<li><a href="noticias.php">1</a></li>';
                            if ($resultado->num_rows != 0){
                                echo sprintf('<li><a href="noticias.php?page=%d">%d</a></li>', $page, $page);
                            }
                            ?>
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
</body>

</html>