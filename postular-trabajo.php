<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Nombre Trabajo - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";

    if (!isset($_GET['id'])) {
        header(sprintf('Location:%s', fromroot($file, "postular-trabajo.php", True)));
    }

$sql = sprintf('SELECT * from trabajos WHERE id=%s;', $_GET['id']);
$result = $conexion->query($sql);
$result = $result->fetch_assoc();
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
                                <h2>Postulación de trabajo</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-details-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="blog-details-img">
                            <img <?php echo sprintf('src="%s"', $result["img_path"]); ?> alt="blog-details">
                        </div>
                        <div class="blog-details-content">
                            <h2><?php echo $result['cargo']; ?></h2>
                            <h6>Empresa: <?php echo $result['empresa']; ?> <h6>
                            <h6>Ciudad: <?php echo $result['ciudad']; ?> <h6>
                            <h6>Publicación: <?php echo strftime('%d/%m/%Y a las %I:%M %p', strtotime($result['fecha'])); ?> <h6>
                            <?php
                                foreach (explode("\r\n", $result['descripcion']) as $d) {
                                    echo sprintf('<p>%s</p>', $d);
                                }

                            ?>
                        </div>
                        <!--
                        <div class="reply-area">
                            <h3>¿Te interesa?</h3>
                            <p>Deja aquí tus datos.<br> No te molestes en llamar, nosotros te contactamos. </p>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Nombre</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Correo</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Mensaje de postulación</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>Enviar mensaje</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <!-- Ultimos trabajos publicados -->
                        <div class="single-blog-widget mb-50">
                            <h3>Ultimos trabajos publicados</h3>
                            <?php
                            $sql = 'SELECT * from trabajos ORDER BY fecha ASC LIMIT 6;';
                            $result = $conexion->query($sql);

                            while ($r = mysqli_fetch_array($result)) {
                            ?>

                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="postular-trabajo.php?id=<?php echo $r['id']; ?>"><img src=<?php echo fromroot($file, $r["img_path"]); ?> alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <a href="postular-trabajo.php?id=<?php echo $r['id']; ?>">
                                            <h4><?php echo $r['cargo']; ?></h4>
                                        </a>
                                        <p><?php echo strftime('%I:%M %p %d/%m/%Y', strtotime($r['fecha'])); ?></p>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
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