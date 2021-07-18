<!DOCTYPE html>
<html lang="es">
<?php
session_start();
$file = __FILE__;
include_once "../include/functions.php";
include_once "../config/config.php";
?>

<head>
    <meta charset="UTF-8">
    <title>Departamento de Informatica</title>
    <link rel="stylesheet" href="../css/dashboard/administrador_Menu.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/animate.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/meanmenu.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/magnific-popup.css");  ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/owl.carousel.min.css");  ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/font-awesome.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/et-line-icon.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/reset.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/ionicons.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/material-design-iconic-font.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo fromroot($file, "css/responsive.css"); ?>>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src=<?php echo fromroot($file, "js/vendor/modernizr-2.8.3.min.js"); ?>></script>
</head>

<body>
    <div class="container-contenido">
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu">☰</label>
                </div>
                <div class="logo">
                    <img src="../img/logo/logoudablanco2.png" alt="">
                </div>
                <nav class="menu">
                    <a href="AdministradorMenu.html">Inicio</a>
                    <a href="#">Mi perfil</a>
                    <a href="#">Desconectarse</a>
                </nav>
            </div>
        </header>
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="AdminGestorNoticias.php">Noticias</a>
                    <a href="AdminGestorPublicaciones.php">Publicaciones</a>
                    <a href="AdminGestorProyectos.php">Proyectos</a>
                    <a href="AdminGestorBT.php">Bolsa de trabajo</a>
                    <a href="AdminGestorAcademicos.php">Academicos</a>
                    <a href="AdminGestorFuncionarios.php">Funcionarios</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <div class="fondo">
            <img src="../img/dpto/dpto.jpg" alt="">
        </div>
        <div class="container-center rounded">
            <section class="seccion">
                <div class="container-Noticias">
                    <div class="container-boton">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcourse-modal">Añadir Bolsa de Trabajo</button>
                    </div>
                    <table class="table">
                        <thead style="background-color: steelblue;">
                            <tr style="height: 40px;">
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Fecha de publicacion</th>
                                <th scope="col">Empresa</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php
                            $sql = "select * from trabajos ORDER BY id DESC"; // mejorar query falta nombre del que subio la noticia
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td style="text-align: center;"><img style="width: 150px; height: 150px; padding-left:25px;" src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></td>
                                    <td>
                                        <h4 class="card-title" style="text-align: center;"><?php echo $mostrar['cargo']; ?> </h4>
                                    </td>
                                    <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['fecha']; ?></small></p>
                                    </td>
                                    <td>
                                        <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['empresa']; ?></small></p>
                                    </td>
                                    <td>
                                    <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo $mostrar['ciudad']; ?></small></p>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" style="text-align: center;" role="group">
                                        <a class="btn btn-secondary"style="color:seagreen;" href="#"><i class="bi bi-pencil"></i></a>
                                            <a class="btn btn-danger" href="#"><i class="bi bi-x-circle"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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