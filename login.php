<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Iniciar Sesión - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";

    if (isset($_SESSION['usuario'])){
        header(sprintf('Location:%s', fromroot($file, "dashboard/index.php", True)));
    }
?>
    <body>
        <!-- HEADER -->
        <?php include_once "include/header2.php"; ?>
        <!-- HEADER -->
		<!-- Banner Area Start
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>login</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		Banner Area End -->
        <!-- Login start -->
        <div class="login-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>Inicia sesión</h2>
                                </div>
                                <?php
                                    if (isset($_SESSION['errorLogin'])) {
                                    echo "<div class='alert alert-danger'>".$_SESSION['errorLogin']."</div>";
                                    unset($_SESSION['errorLogin']);
                                }
                                ?>
                                <div class="login-form">
                                    <form action="database/login.php" method="POST" autocomplete="off">
                                        <input type="email" name="correo" placeholder="Correo institucional">
                                        <input type="password" name="password" placeholder="Contraseña">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Recuérdame</label>
                                                <a href="#">Olvidaste la clave?</a>
                                            </div>
                                            <div class="button-box text-center">
                                                <button type="submit" class="default-btn">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login end --> 
        
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
