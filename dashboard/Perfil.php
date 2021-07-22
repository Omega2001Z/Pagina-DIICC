<!DOCTYPE html>
<html lang="en">
<?php

	session_start();
    $file = __FILE__;
    $pagetitle = "ACADEMICOS - DIICC UDA";
    include_once "../config/config.php";
    include_once "../include/functions.php";

	if (!isset($_SESSION['usuario'])){
		header(sprintf('Location:%s', fromroot($file, "index.php", True)));
	}
	include_once fromroot($file, "include/dashboard/head.php", TRUE);

    $correo = $_SESSION['usuario']->correo;
    $sql = "select * from usuarios where correo = '{$correo}'";// mejorar query falta nombre del que subio la noticia
    $resultado = $conexion->query($sql);
    $mostrar = $resultado->fetch_assoc();

?>

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <style>

        .main{
            padding: 15px;
            font-family: Arial,Helvetica, sans-serif;
        }

        .sidebar{
            background-color: #333;
            color: white;
            height: 100%;
        }

        .sidebar a{
            margin-left:10px;
            display: block;
            color: white;
            padding-bottom: 10px;
            font-size: 30px;
            text-decoration: none;
        }

        .card{
            position: relative;
            display: flex;
            flex-direction: column;
        }
        .content{
            background-color: whitesmoke;
            padding: 20px;
        }

        .button{
            position:relative;
            padding:1em 1.5em;
            border:none;
            background-color:transparent;
            cursor:pointer;
            outline:0;
            font-size:18px;
            margin:1em .8em
        }

        .button.type1{
            color:white;
        }
        .button.type1.type1::after,.button.type1.type1::before{
            content:"";
            display:block;
            position:absolute;
            width:20%;
            height:20%;
            border:2px solid;
            transition:all .6s ease;
            border-radius:2px
        }

        .button.type1.type1::after{
            bottom:0;
            right:0;
            border-color:transparent #566473 #566473 transparent
        }

        .button.type1.type1::before{
            top:0;left:0;
            border-color:#566473 transparent transparent #566473
        }

        .button.type1.type1:hover:after,.button.type1.type1:hover:before{
            width:100%;
            height:100%
        }

        *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper{
            width: 450px;
            background: #fff;
            padding: 20px;
            box-shadow:0px 0px 10px rgba(0,0,0,0.1);
        }

        .wrapper .input-data{
            height: 40px;
            width: 100%;
            position: relative;
        }
        .wrapper .input-data input{
            height:100%;
            width: 100%;
            border-bottom: 2px solid silver;
            border: none;
            font-size: 17px;
        }

        .input-data input:focus ~ label,
        .input-data input:valid ~ label{
            transform: translateY(-20px);
            font-size: 15px;
            color: #4158d0;
        }

        .wrapper .input-data label{
            position: absolute;
            bottom: 10px;
            left: 0;
            color: grey;
            pointer-events: none;
            transition: all 0.3s ease;
        }
    </style>

</head>

<body background="../img/dpto/dpto.jpg">

    <div class="container-contenido">
        <?php include_once fromroot($file, "include/dashboard/header.php", TRUE); ?>
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <?php include_once fromroot($file, "include/dashboard/navbar.php", TRUE); ?>

    </div>

    <div class="container">
        <form class="main" action="../database/usuarios/modificar.php" method="post">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="../img/dpto/perfil.jpg" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h3>Nombre</h3>
                                <button class="button type1" type="submit">Guardar Cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <div class="card body">
                            <div class="row">
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="text" name="nombre" value="<?php echo $mostrar['nombre'];?>">
                                        <label for="">Nombre</label>
                                    </div>
                                    <hr>
                                    <div class="input-data">
                                        <input type="text" name="apellido" value="<?php echo $mostrar['apellido'];?>">
                                        <label for="">Apellido</label>
                                    </div>
                                    <hr>
                                    <div class="input-data">
                                        <input type="email" required name="correo" value="<?php echo $mostrar['correo'];?>">
                                        <label for="">Email</label>
                                    </div>
                                    <hr>
                                    <div class="input-data">
                                        <input type="text" name="password">
                                        <label for="">Contraseña</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    </div>
</html>
