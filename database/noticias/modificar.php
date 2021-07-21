<?php
session_start();
$file = __FILE__;
include_once "../../include/functions.php";
include_once "../../config/config.php";

// Datos login
$id       = $_POST['id'];
$titulo       = $_POST['titulo'];
$descripcion     = $_POST['descripcion'];

/*if ($_FILES['img']['size'] != 0 && $_FILES['img']['error'] != 0)
{
    if(is_file(addslashes($_FILES["img"]["tmp_name"]))) {
		$img= addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
		$query="UPDATE noticias SET imagen=$img WHERE id=$id";
		$conexion->query($query);
	}
}*/
// Insertar usuario
$sql = $conexion->prepare(
	"UPDATE `noticias` SET `titulo` = ?, `descripcion` = ? WHERE `noticias`.`id` = {$id};"
);
$sql->bind_param( "ss", $titulo, $descripcion);
$sql->execute();

header(sprintf('Location:%s', fromroot($file, "dashboard/AdminGestorNoticias.php", True)));
?>

