<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                            <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="header-top-right text-right">
                        <ul>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeuu1sPGDU3e2R0Tz8ja5oUdVX0PBNcYaj-aiErw89I4rr56w/viewform?embedded=true" target="_blank">Sugerencias</a></li>
                            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJ4pKZWImnq67HAen8p9rUejfvMxjNRzKr3Btfl0Bb8QriA/viewform?embedded=true" target="_blank">Admisión</a></li>
                            <li><a href=<?php echo fromroot($file, "login.php"); ?>>Iniciar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-sticky fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="logo">
                        <a href="http://www.uda.cl/" target="_blank">
                            <img id="imglogo" src=<?php echo fromroot($file, "img/logo/logoudablanco.png"); ?> />
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav>
                                <ul>
                                    <li><a href=<?php echo fromroot($file, "index.php"); ?>>Inicio</a></li>

                                    <li><a href=<?php echo fromroot($file, "noticias.php"); ?>>Noticias</a></li>
                                    <li><a href=<?php echo fromroot($file, "Departamento.php"); ?>>Departamento</a></li>
                                    <li><a>Carrera</a>
                                        <ul>
                                            <li><a>Pregrado</a>
                                                <ul>
                                                    <li><a href=<?php echo fromroot($file, "pregrado/Ingenieria-Ejecucion.php"); ?>>Ingeniería en Ejecución</a> </li>
                                                    <li><a href=<?php echo fromroot($file, "pregrado/Ingenieria-Civil.php"); ?>>Ingeniería civil en Informática</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href=<?php echo fromroot($file, "postitulo/diplomado-gestion.php"); ?>>Postitulo</a>
                                                <ul>
                                                    <li><a href=<?php echo fromroot($file, "postitulo/diplomado-inteligencia-negocios.php"); ?>>Diplomado en tecnología para inteligencia de negocios</a></li>
                                                    <li><a href=<?php echo fromroot($file, "postitulo/diplomado-gestion.php"); ?>>Diplomado en gestión de tecnologias de la información</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=<?php echo fromroot($file, "postgrado/tecnologia.php"); ?>>Postgrado</a>
                                                <ul>
                                                    <li><a href=<?php echo fromroot($file, "postgrado/tecnologia.php"); ?>>Magister en tecnologias de la informacion e innovación</a></li>
                                                    <li><a href=<?php echo fromroot($file, "postgrado/informatica.php"); ?>>Magister en Informática y Ciencias de la Computación</a></li>
                                                    <li><a href=<?php echo fromroot($file, "postgrado/procesos-software.php"); ?>>Diplomado en procesos integrales de software</a></li>
                                                    <li><a href=<?php echo fromroot($file, "postgrado/gestion-innovacion.php"); ?>>Diplomado en gestión de innovacion y emprendimiento</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hidden-sm"><a href=<?php echo fromroot($file, "academicos.php"); ?>>Equipo</a>
                                        <ul>
                                            <li><a href=<?php echo fromroot($file, "academicos.php"); ?>>Profesores</a></li>
                                            <li><a href=<?php echo fromroot($file, "funcionarios.php"); ?>>Administrativos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=<?php echo fromroot($file, "publicaciones.php"); ?>>Investigaciones</a>
                                        <ul>
                                            <li><a href=<?php echo fromroot($file, "publicaciones.php"); ?>>Publicaciones</a></li>
                                            <li><a href=<?php echo fromroot($file, "proyectos.php"); ?>>Proyectos</a></li>

                                        </ul>
                                    </li>
                                    <li><a href=<?php echo fromroot($file, "trabajo.php"); ?>>Portal de trabajo</a></li>
                                    </li>
                                </ul>


                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- MENU PRINCIPAL-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>