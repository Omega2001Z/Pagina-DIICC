<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$fecha = $_POST['fecha'];

$sql = 'UPDATE eventos
		SET nombre="%s",fecha="%s",hora_inicio="%s",hora_termino="%s",lugar="%s"
		WHERE id=%s;';
$result = $conexion->query(sprintf($sql, $_POST['nombre'],$fecha ,$_POST['hora_inicio'],$_POST['hora_termino'],$_POST['lugar']));
header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorEventos.php", True)));
?>