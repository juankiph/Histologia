<?php
    //Si no hay sesion la inicio
    if(!isset($_SESSION)){
        session_start();
        echo 'Sesion empezada';
    }
    //Si no existen las variables de sesion, borro las cookies
    if(!isset($_SESSION['Usuario'])){
        unset($_COOKIE['Galleta']);
        unset($_COOKIE['Password']);
        unset($_COOKIE['Tipo']);
        echo 'Cookies fuera';
    }
    if(isset($_COOKIE['Galleta']) and isset($_COOKIE['Pass'])){
        if($_COOKIE['Tipo'] == 0){
            require './sesionIniciada.php';
            echo 'Estás dentro';
        }
        else{
            require 'http://www.as.com';
            echo 'Sesion empezada';
        }
    }   
    else {
        require './index.php';
        unset($_COOKIE['Galleta']);
        unset($_COOKIE['Password']);
        unset($_COOKIE['Tipo']);
        echo 'ELIMINADO';
    }
    
?>
