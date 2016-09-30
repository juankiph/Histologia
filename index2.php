<?php
include('misFunciones.php');
$mysqli = conectaBBDD();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
    </head>
    <body> 
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2 class="text-center">EJEMPLO DE INICIO DE SESION EN PHP</h2></div>
            </div>
        <?php
         $usuario_nombre = $_POST['usuario_nombre'];
         $usuario_clave = $_POST['usuario_clave'];
                 
         $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where DNI = '$usuario_nombre' ");
         $num_dnis = $resultado_consulta -> num_rows;
         if($num_dnis > 0){
             //la query es valida y me ha devuelto por lo menos un dni
             //entonces mostrare el menu normal
             //voy a leer el campo DNI y el campo password de la BBDD
             $r = $resultado_consulta -> fetch_array();
             $DNI = $r['DNI'];
             $Password = $r['Password'];
             if($usuario_clave = $Password){                
                         
        ?>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="text-center">BIENVENIDO A LA WEB DE HISTOLOGIA</h1>
                </div>
                <div class="col-md-4"></div>
            </div>
        
        <?php
         }
         else {
        ?>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 class="text-center">EL USUARIO O LA CONTRASEÑA NO SON CORRECTOS</h3>
                </div>
                <div class="col-md-4"></div>
            </div>
        
        <?php
             
         }}
        ?>
        </div>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
