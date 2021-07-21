<!doctype html>
<html class="no-js" lang="span">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Proyectos - DIICC UDA";
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
                                    <h2>Proyectos</h2> 
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
                    <div class="col-md-8">
                        <div class="container proyectos">
                        <div class="row">
                                  <?php
                        $sql = "SELECT * FROM `proyectos` ORDER BY id ASC"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){ ?>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-blog mb-60">
                                    <div class="blog-img">
                                        <?php echo '<a href="' . $mostrar["link"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar['img_path']);?>>
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-top">
                                             <p><?php echo $mostrar['year'];?></p>
                                        </div>
                                        <div class="blog-bottom">
                                            <h2><?php echo '<a href="' . $mostrar["link"] . '">' . $mostrar['nombre'] . '</a>'; ?></h2>
                                <?php echo '<a href="' . $mostrar["link"] . '">Seguir Leyendo</a>'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                        
                    </div>
                </div>
            <div class="col-md-4">
                        <div class="blog-sidebar left">
                            <div class="single-blog-widget mb-50">
                                <h3>Buscar</h3>
                                <div class="blog-search">
                                    <form id="search" action="#">
                                        <input type="search" placeholder="Ej: BLOCKCHAIN..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="single-blog-widget mb-50">
                                <div class="single-blog-banner">
                                    <a href="http://www.uda.cl/index.php?option=com_content&view=article&id=47&Itemid=118" id="blog"><img src="img/blog/blog-img.jpg" alt="blog"></a>
                                    <h2><br> Admision 2020<br> </h2> 
                                </div>
                            </div>
                            <!-- Ultimos Posts -->
                            <div class="single-blog-widget mb-50">
                                <h3>Ultimos Proyectos publicados</h3>
                        <?php
                        $sql = "SELECT * FROM `proyectos` ORDER BY id ASC"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){ ?>

                                <div class="single-post mb-30" style="width: 200px; height: 200px;">
                                    <div class="single-post-img">
                                         <?php echo '<a href="' . $mostrar["link"] . '"></a>';?><img src=<?php echo fromroot($file, $mostrar['img_path']);?>>
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                         <h4><?php echo '<a href="' . $mostrar["link"] . '">' . $mostrar['nombre'] . '</a>'; ?></h4> 
                                         <p><?php echo $mostrar['year'];?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <div class="pagination">
                            <ul>
                                <li><a href="#">1</a></li> <!-- Por el momento es una sola pagina para el prototipo-->
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
