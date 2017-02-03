<?php

if (!isset($_SESSION)) {
    session_start();}
        
         if (isset($_COOKIE['nombre']) and isset($_COOKIE['password'])) {
             require './sesionIniciada.php';
            $nombre = $_COOKIE['nombre'];
            $password = $_COOKIE['password']; 
          
            
//            echo  "<script>
//                document.getElementById('usuario_nombre').value = '$nombre';
//                 document.getElementById('usuario_clave').value = '$password';
//                document.getElementById('remember').checked = true;
//                </script>";
                    
        }
        else{
            require './index.php';
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
