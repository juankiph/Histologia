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
                <div class="col-md-12"><h1 class="text-center" >ADIVINA!</h1></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    
                    <div>
                    
                       
                    
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
            //console.log(_usuario_nombre);
            //console.log(_usuario_clave);
            
            $('#centro').load("login.php",{
                usuario_nombre : _usuario_nombre,
                usuario_clave : _usuario_clave
            });
            
            
        }
    </script>
</html>
