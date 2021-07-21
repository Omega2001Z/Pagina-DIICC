<!DOCTYPE html>
<html lang="es">
<?php

	session_start();
    $file = __FILE__;
    $pagetitle = "ADMINISTRACIÓN - DIICC UDA";
    include_once "../config/config.php";
    include_once "../include/functions.php";

	if (!isset($_SESSION['usuario'])){
		header(sprintf('Location:%s', fromroot($file, "index.php", True)));
	}
	include_once fromroot($file, "include/dashboard/head.php", TRUE);
?>
<body background="../img/dpto/dpto.jpg">
	<?php include_once fromroot($file, "include/dashboard/header.php", TRUE); ?>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<?php include_once fromroot($file, "include/dashboard/navbar.php", TRUE); ?>
</body>
<?php include_once fromroot($file, "include/dashboard/footer.php", TRUE); ?>
</html>