<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Funcionarios - DIICC UDA";
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
                                    <h2>FUNCIONARIOS</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Teacher Start -->
        <div class="teacher-area pt-150 pb-105">
            <div class="container">
                <div class="row">
                    <?php
                        $sql = "select * from funcionarios WHERE es_academico = 0";
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                    ?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a><img src=<?php echo fromroot($file, $mostrar['img_path']);?> alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a><?php echo $mostrar['Nombre'];?></a></h2>
                                <h4><?php echo $mostrar['cargo'];?></h4>
                                <h4><?php echo $mostrar['correo'];?></h4>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   <!-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesJohn.html"><img src="img/teacher/teacher4.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesJohn.html">John Castro</a></h2>
                                <h4>Profesor</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesWilson.html"><img src="img/teacher/teacher5.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesWilson.html">Wilson Castillo</a></h2>
                                <h4>Director del Departamento</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesMonasterio.html"><img src="img/teacher/teacher6.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesMonasterio.html">Manuel Monasterio</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesAndres.html"><img src="img/teacher/teacher7.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesAndres.html">Andres Alfaro</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesCarlos.html"><img src="img/teacher/teacher8.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesCarlos.html">Carlos Ortiz</a></h2>
                                <h4>Ingeniero en Sistemas</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesJaque.html"><img src="img/teacher/teacher9.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesJaque.html">Jaqueline Manriquez</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
        </div>
                    
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
