<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$sql = "DELETE FROM noticias WHERE id = %s";
$result = $conexion->query(sprintf($sql,  $_GET['id']));

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorNoticias.php", True)));

?>