
<?php
 
include ('misfunciones.php');
$mysqli = conectaBBDD();
 
//leo los parametros que me pasa el index.php
$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST ['usuario_clave'];
 
//Hago la consulta a la BBDD
$resultado_consulta = $mysqli ->query ("SELECT * FROM usuario WHERE DNI = '$usuario_nombre' ");
$numero_dnis = $resultado_consulta -> num_rows;
 
//como solo puede haber un solo DNI en este resultado porque el DNI es campo clave lo
//pongo con un if; si no, se teiene que tratar todo el resultado de la query
//con un bucle for por ejemplo
if($numero_dnis > 0){
            //la query es valida y me ha devuelto por lo menos un dni
            //entonces mostrare el menu normal
            //voy a leer el campo DNI y el campo pasword de la bbdd
            $r = $resultado_consulta -> fetch_array();
            $DNI = $r['DNI'];
            $password = $r['password'];
            if($usuario_clave == $password){
               
            require 'menu_inicio.php';
        }
       
        else {
            require 'mensaje_error.php';
        }
       
       
        }
        else {
            require 'mensaje_error.php';
        }
        ?>
 

