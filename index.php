<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background: black;
                background-image: url(img/image1.jpg);
            }
        </style>
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                <div class="col-md-12"><h2 class="text-center">EJEMPLO DE INICIO DE SESION EN PHP</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    
                    
                    <!--<form action="index2.php" method="post">-->
                        <br>
                        <input id="usuario_nombre" class="form-control" type="text" placeholder="DNI">
                        <br>
                        <br>
                        <input id="usuario_clave" class="form-control"type="password" placeholder="PW">
                        <br>
                        <br>
                        <button class="btn btn-success btn-block" onclick="chequeaPass();"> ENTRAR </button>
                    <!--</form>-->
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
         
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        function chequeaPass(){
            var _usuario_nombre = $('#usuario_nombre').val();
            var _usuario_clave = $('#usuario_clave').val();
            //console.log(usuario_nombre);
            //console.log(usuario_clave);
            
            $('#centro').load("login.php",{
                usuario_nombre : _usuario_nombre,
                usuario_clave : _usuario_clave
            });
            
            
        }
    </script>
</html>
