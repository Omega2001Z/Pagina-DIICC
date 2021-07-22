<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$sql = 'SELECT * from usuarios WHERE correo = "%s"';
$res = $conexion->query(sprintf($sql, $_SESSION['usuario']->correo));
$res = $res->fetch_assoc();

if (!empty($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
    $password = $res['password'];
}

$sql = sprintf(
    '
        UPDATE usuarios set 
            nombre = \'%s\',
            apellido = \'%s\',
            correo = \'%s\',
            password = \'%s\'
        WHERE correo = "%s";
        ',
    $_POST['nombre'],
    $_POST['apellido'],
    $_POST['correo'],
    $password,
    $_SESSION['usuario']->correo
);

$conexion->query($sql);
header(sprintf('Location:%s', fromroot($file, "dashboard/Perfil.php", True)));

?>

