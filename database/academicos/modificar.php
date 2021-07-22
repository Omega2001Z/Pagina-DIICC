<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$id = $_POST['id'];
$sql = "SELECT * from funcionarios where id = {$id}";
$result = $conexion->query($sql);
$result = $result->fetch_assoc();
$image = $result["img_path"];

if (!empty($_FILES['img'])){
	$errors = array();
	$file_name = $_FILES['img']['name'];
	$file_size = $_FILES['img']['size'];
	$file_tmp = $_FILES['img']['tmp_name'];
	$file_type = $_FILES['img']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['img']['name'])));
	$file_path = wp_normalize_path($_SESSION['root']."/img/upload/funcionarios/").$file_name;

	$extensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $extensions) === false) {
		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
	}

	if (empty($errors) == true) {
		copy($file_tmp, $file_path);
		$image = "img/upload/funcionarios/" . $file_name;
		$sql = "UPDATE `funcionarios` SET `img_path` = '{$image}' WHERE `funcionarios`.`id` = {$id};";
		$result = $conexion->query($sql);
	} else {
		$errors[] = "No se pudo subir la imagen";
	}
	
}

$sql = 'UPDATE funcionarios SET Nombre = \'%s\', descripcion =  \'%s\', fono =  \'%s\', cargo =  \'%s\', correo =  \'%s\', grado_academico =  \'%s\', area_interes =  \'%s\', img_path = \'%s\' WHERE id = %s';
$sql = sprintf($sql, $_POST['nombre'], $_POST['descripcion'], $_POST['fono'], $_POST['cargo'], $_POST['correo'], $_POST['grado_academico'], $_POST['area_interes'], $image , $id);
$result = $conexion->query($sql);

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorAcademicos.php", True)));
?>