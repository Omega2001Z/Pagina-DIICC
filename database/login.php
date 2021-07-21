<?php
    session_start();
    $file = __FILE__;
    include_once "../include/functions.php";
    include_once "../config/config.php";

    // Datos login
    $userLogin = $_POST['correo'];
    $passLogin = $_POST['password'];

    // Extraer contraseña
    $sql = sprintf('SELECT * FROM usuarios WHERE correo = "%s"', $userLogin);
    $resultado = $conexion->query($sql);

    // Contraseña no encontrada
    if ($resultado->num_rows == 0) {
        $_SESSION['errorLogin'] = "Nombre y/o contraseña no válidos.";
        echo "sin resultado";
        header(sprintf('Location:%s', fromroot($file, "login.php", True)));
    }
    else{
        $resultado = $resultado->fetch_assoc();
        if (password_verify($passLogin, $resultado['password'])){

            $_SESSION['usuario'] = (object) [
                'correo' => $resultado['correo'],
                'nombre' => $resultado['nombre'],
                'apellido' => $resultado['apellido'],
                'tipo' => $resultado['tipo']
            ];
            header(sprintf('Location:%s', fromroot($file, "dashboard/index.php", True)));
            exit();
        }
        else {
            $_SESSION['errorLogin'] = "Contraseña incorrecta";
            header(sprintf('Location:%s', fromroot($file, "login.php", True)));
        }
    }
?>