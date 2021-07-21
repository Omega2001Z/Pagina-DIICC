<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
$file = __FILE__;
$pagetitle = "Ingeniería Civil en Computación e Informática - DIICC UDA";
include_once "../include/functions.php";
include_once "../config/config.php";
include_once "../include/head.php";
echo '<script src="../js/malla.js"></script>';
?>

<body>
    <!-- HEADER -->
    <?php include_once "../include/header2.php"; ?>
    <!-- HEADER -->
    <!-- Blog Start -->
    <div class="blog-details-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="blog-details-img">

                        </div>
                        <div class="blog-details-content">
                            <h2>Ingeniería Civil en Computación e Informática </h2>
                            <br>
                            <h3>Descripción de la Carrera:</h3>
                            <br>
                            <p>La carrera de Ingeniería Civil en Computación e Informática tiene como objetivo crear un ingeniero que este orientado a diseñar, desarrollar y gestionar soluciones computacionales integradas, esto incluye: desarrollo de sistemas, elaboración de planes informáticos y adaptación de nuevas tecnologías en su campo de acción. </p>
                            <h3>Perfil del profesional:</h3>
                            <br>
                            <p>El Ingeniero Civil en Computación e Informática de la Universidad de Atacama se destaca por su formación orientada en el desarrollo de la innovación y la excelencia, para lo cual se le entregan las herramientas necesarias para contribuir al desarrollo de nuestra región y país en forma dinámica y responsable.</p>
                            <p class="quote">El Ingeniero Civil en Computación e Informática de la Universidad de Atacama es un profesional con alto compromiso con la calidad, y una disposición permanente por mantener vigentes sus conocimientos en tecnologías y gestión. Demuestra capacidad para aplicar el conocimiento innovadoramente en su formación y reconoce el emprendimiento. Aplica los principios de las matemáticas y ciencias del a ingeniería, situaciones propias de un ingeniero civil.</p>
                            <p>Está capacitado para gestionar y desarrollar proyectos que involucran sistemas de información y productos de software que cumplan estándares de calidad para satisfacer requerimientos del entorno. Además, de formular y gestionar proyectos informáticos en el ámbito de las TICARs orientadas a soluciones en el área de la informática y ciencias de la Computación.</p>
                            <p>El Ingeniero Civil en Computación e Informática de la UDA destaca por el énfasis en la formación de un profesional responsable, proactivo y formado bajo los fundamentos éticos que sustentan la disciplina. La formación entregada, permitirá al egresado: plantear y defender su posición con argumentos sólidos y fundados, siendo un real aporte a los equipos multidisciplinarios que integra. A su vez, este profesional estará capacitado para comunicarse a través del idioma inglés.</p>
                            <h3>Áreas de desarrollo del profesional:</h3>
                            <p>
                                <li> Desarrollo de Sistemas de Software.</li>
                                <li>Gestión TICAR.</li>
                                <li> Ciencias de la Computación.</li>
                            </p>

                            <h3>Campo ocupacional: </h3>
                            <br>
                            <p>El Ingeniero Civil en Computación e Informática se puede desarrollar profesionalmente en todos los sectores empresariales, tales como: Industria, Comercio, Gobierno, Salud y en donde se requiera de tecnología para la gestión de la administración y automatización de operaciones.</p>
                            <figure>
                                <h3>Ponderaciones:</h3>
                                <img src=<?php echo fromroot($file, "img/blog/tabla-diicc-1.png"); ?>>
                            </figure>
                            <br>
                            <h3>Malla Curricular. (Sujeto a posibles Cambios)</h3>
                            <button type="button" id="malla-modal-btn" class="btn btn-outline-danger me-2" data-toggle="modal" data-target="#malla-modal">Malla Curricular. (Sujeto a posibles Cambios)</button>
                            <br>
                            <a href=<?php echo fromroot($file, "img/blog/Malla-Ing.-Civil-Comp-e-Inf.pdf"); ?>>Descargar malla hasta el 2017 </href></a>
                            <br>
                            <a href=<?php echo fromroot($file, "img/blog/Malla-INFORMATICA.pdf"); ?>>Descargar malla desde el 2018 </href></a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">

                        <!-- <div class="single-blog-widget mb-47">
                                imagen
                            </div> -->
                        <div class="single-blog-widget mb-47">
                            <div class="single-blog-banner">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJ4pKZWImnq67HAen8p9rUejfvMxjNRzKr3Btfl0Bb8QriA/viewform?embedded=true" id="blog"><img src=<?php echo fromroot($file, "img/blog/blog-img.jpg"); ?> alt="blog"></a>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- FOOTER -->
    <?php include_once "../include/footer.php"; ?>
    <!-- FOOTER -->

    <div class="modal" id="malla-modal" tabindex="-1" role="dialog">
        <div id="malla-dialog" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Malla Curricular 2018</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include_once fromroot($file, "include/mallas/2018.php", true); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>