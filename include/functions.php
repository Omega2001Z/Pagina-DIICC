<?php

function wp_normalize_path( $path ) {
    $path = str_replace( '\\', '/', $path );
    $path = preg_replace( '|(?<=.)/+|', '/', $path );
    if ( ':' === substr( $path, 1, 1 ) ) {
        $path = ucfirst( $path );
    }
    return $path;
}

function fromroot($rootfile ,$file, $value=False){

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['root'])){
        header('Location:../index.php');
    }
    $folder = dirname($rootfile);
    $folder = str_replace(wp_normalize_path($_SESSION['root']), "", wp_normalize_path($folder));
    for($i=1; $i<count(explode("/", $folder)) ;$i++){
        $file = "../".$file;
    }
    if ($value){
        return $file;
    }
    return sprintf('"%s"',$file);
}

?>