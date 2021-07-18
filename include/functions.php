<?php

function fromroot($rootfile ,$file, $value=False){

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['root'])){
        header('Location:../index.php');
    }

    $folder = dirname($rootfile);
    $folder = str_replace($_SESSION['root'], "", $folder);

    for($i=1; $i<count(explode("/", $folder)) ;$i++){
        $file = "../".$file;
    }
    if ($value){
        return $file;
    }
    return sprintf('"%s"',$file);
}

?>