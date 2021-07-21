<?php
    session_start();
    $file = __FILE__;
    include_once "../include/functions.php";

    if (isset($_SESSION['usuario']) ){

        unset($_SESSION['usuario']);
        #echo fromroot($file, "index.php", True);
        header(sprintf('Location:%s', fromroot($file, "index.php", True)));
        #exit();
    }
    
    
?>