<?php


function conectaBBDD(){
    require ('configuracion_local.php');
    require ('./configuracion_local.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $mysqli ->query("SET NAMES utf8");
    return $mysqli;
}
?>
