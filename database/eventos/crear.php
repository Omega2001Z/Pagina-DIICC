<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$fecha = $_POST['fecha'];

$sql = 'INSERT INTO eventos (nombre,fecha,hora_inicio,hora_termino,lugar) values(\'%s\',\'%s\',\'%s\',\'%s\',\'%s\')';
$sql = sprintf($sql, $_POST['nombre'],$fecha,$_POST['hora_inicio'],$_POST['hora_termino'],$_POST['lugar']);
$result = $conexion->query($sql);
header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorEventos.php", True)));
?>
