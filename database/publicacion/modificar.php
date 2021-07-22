<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";


$id = $_POST['id'];

if (!empty($_FILES['img'])){
	$errors = array();
	$file_name = $_FILES['img']['name'];
	$file_size = $_FILES['img']['size'];
	$file_tmp = $_FILES['img']['tmp_name'];
	$file_type = $_FILES['img']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['img']['name'])));
	$file_path = wp_normalize_path($_SESSION['root']."/img/upload/publicaciones/").$file_name;

	$extensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $extensions) === false) {
		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
	}

	if (empty($errors) == true) {
		copy($file_tmp, $file_path);
		$image = "img/upload/publicaciones/" . $file_name;
		$sql = "UPDATE `publicaciones` SET `img_path` = '{$image}' WHERE `publicaciones`.`id` = {$id};";
		$result = $conexion->query($sql);
	} else {
		$errors[] = "No se pudo subir la imagen";
	}
	
}

$sql = 'UPDATE publicaciones SET  titulo= \'%s\', revision =  \'%s\',fecha =\'%s\',acceso =\'%s\',id_academico=\'%s\' WHERE id = %s';
$sql = sprintf($sql, $_POST['titulo'], $_POST['revision'],$_POST['fecha'],$_POST['acceso'],$_POST['autor'], $id);
$result = $conexion->query($sql);

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorPublicaciones.php", True)));
?>