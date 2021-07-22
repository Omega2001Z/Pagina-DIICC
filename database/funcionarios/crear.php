<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

$image = "";

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
	}
}

$sql = 'INSERT INTO funcionarios(Nombre,img_path,correo,cargo,es_academico) VALUES (\'%s\', \'%s\', \'%s\', \'%s\', \'%s\')';
$sql = sprintf($sql, $_POST['nombre'], $image,$_POST['correo'],$_POST['cargo'],0);
echo $sql;
$result = $conexion->query($sql);

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorFuncionarios.php", True)));
?>
