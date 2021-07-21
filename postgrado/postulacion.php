<!doctype html>
<html class="no-js" lang="en">

<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Postulación Magíster en Informática y Ciencias de la Computación- DIICC UDA";
    include_once "../include/functions.php";
    include_once "../config/config.php";
    include_once "../include/head.php";
?>

    <body>
        
    <!-- HEADER -->
    <?php include_once "../include/header2.php";?>
    <!-- HEADER -->


    <!-- Blog Start -->
    <div id="postulacion" class="blog-area event-area three text-center pt-150 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-6 course-details-right formulario">
                    <h3>Formulario</h3>
                    <iframe  
                        src="https://docs.google.com/forms/d/e/1FAIpQLSdoJ4pKZWImnq67HAen8p9rUejfvMxjNRzKr3Btfl0Bb8QriA/viewform?embedded=true"
                        width="450" height="512" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                </div>

                <div class="col-md-6 course-details-right text-left formulario">
                    <h3>Requisitos de Postulación:</h3>
                    <ul>
                        <hr>
                        <h2>Estar en posesión del grado académico de Licenciado en
                            Ciencias de la Ingeniería y un título profesional universitario en el área de la
                            computación e informática o afín, con un mínimo de cuatro años de estudio, y con nivel
                            medio de lectura en inglés.</h2>
                        <hr>
                        <h2>Los estudiantes del plan de la carrera de Ingeniería civil en computación e informática
                            de la Universidad de Atacama podrán postular al programa si han cursado completamente el
                            quinto año de la carrera.</h2>
                        <hr>
                        <h2>Becas: Existen 5 cupos de becas para exención de matrículas. Proceso de postulación en
                            Marzo.</h2>
                        <hr>
                        <h2>Documentación: Solicitud de postulación, carta de intenciones, certificado de grado y título
                            (si procede), curriculum vitae, fotocopia cédula de identidad, certificado de notas si
                            procede, certificado de lectura de Inglés (si lo tiene)</h2>
                    </ul>
                    <hr>
                    <h3 class="red"><a
                            href="http://www.diicc.uda.cl/magister/wp-content/uploads/2019/12/Bases-Becas-2020.pdf">Bases
                            postulación becas</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- FOOTER -->
    <?php include_once "../include/footer.php";?>
    <!-- FOOTER -->
</body>

</html>