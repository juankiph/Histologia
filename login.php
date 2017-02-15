<?php
include ('misfunciones.php');
$mysqli = conectaBBDD();

//leo los parametros que me pasa el index.php
$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST ['usuario_clave'];

//Hago la consulta a la BBDD
$resultado_consulta = $mysqli ->query ("SELECT * FROM usuario_pasajero WHERE nombre = '$usuario_nombre' ");
$numero_dnis = $resultado_consulta -> num_rows;

//como solo puede haber un solo DNI en este resultado porque el DNI es campo clave lo 
//pongo con un if; si no, se teiene que tratar todo el resultado de la query
//con un bucle for por ejemplo
if($numero_dnis > 0){
            //la query es valida y me ha devuelto por lo menos un dni
            //entonces mostrare el menu normal
            //voy a leer el campo DNI y el campo pasword de la bbdd
            $r = $resultado_consulta -> fetch_array();
            $usuario = $r['nombre'];
            $password = $r['password'];
          
            if($usuario_clave == $password && $usuario_nombre == $usuario){
                
            
            //Inicializo la sesion
            session_start();
            //Guardo los datos del usuario que han hecho correcto
            $_SESSION['nombre'] = $usuario;
            $_SESSION['password'] = $password;
            
//            $_SESSION['email'] = $r ['email'];
            
            require './sesionIniciada.php';
            require './cookie.php';
        }       
        
        }
        else {
            require 'mensaje_error.php';
            
        }
        ?>
