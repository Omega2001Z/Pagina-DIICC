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
	$file_path = wp_normalize_path($_SESSION['root']."/img/upload/noticias/").$file_name;

	$extensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $extensions) === false) {
		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
	}

	if (empty($errors) == true) {
		copy($file_tmp, $file_path);
		$image = "img/upload/noticias/" . $file_name;
	}
}

$sql = 'INSERT INTO noticias(titulo,descripcion,img_path ,correo) VALUES (\'%s\', \'%s\', \'%s\', \'%s\')';
$sql = sprintf($sql, $_POST['titulo'], $_POST['descripcion'], $image, $_SESSION['usuario']->correo);
echo $sql;
$result = $conexion->query($sql);

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorNoticias.php", True)));
?>
