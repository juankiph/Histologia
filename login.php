<?php
include('misFunciones.php');
$mysqli = conectaBBDD();


        //leo los parametros que me pasa el index.php
         $usuario_nombre = $_POST['usuario_nombre'];
         $usuario_clave = $_POST['usuario_clave'];

         
         
         //hago la consulta a la bbdd
         $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where DNI = '$usuario_nombre' ");
         $num_dnis = $resultado_consulta -> num_rows;
         //como solo puede haber como mucho un DNI em este resultado porque el DNI es campo clave lo pongo con un if; si no, se tiene que tratar 
         //todo el resultado de la query con un bucle for por ejemplo
         if($num_dnis > 0){
             //la query es valida y me ha devuelto por lo menos un dni
             //entonces mostrare el menu normal
             //voy a leer el campo DNI y el campo password de la BBDD
             $r = $resultado_consulta -> fetch_array();
             $DNI = $r['DNI'];
             $Password = $r['Password'];
             if($usuario_clave == $Password){
                 
                 //inicializo la sesion
                 session_start();
                 echo $usuario_nombre;
                 //guardo los datos del usuario que ha hecho el login correcto
                 $_SESSION['DNI'] = $DNI;
                 $_SESSION['Nombre'] = $r['Nombre'];
                 $_SESSION['Email'] = $r['Email'];
                 require 'menu_inicio.php';
             }
             else {
                 require 'mensaje_error.php';
             }
             
         }
         else{
             require 'mensaje_error.php';
         }

?>

