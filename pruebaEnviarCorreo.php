<html>
    <head>
        
        
    </head>    
    <body>
        <div id="centro">
        <input name="email" placeholder="Correo" id="correo_usuario" required class="form-control input-lg"/>
        
        <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="pillarCorreo();">Enviar</button>
        </div>
    </body>
    
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>    
<script>
function pillarCorreo(){
            var _correo_usuario = $('#correo_usuario').val();
           // var _usuario_tipo = $('#usuario_tipo').val();
           // console .log(_usuario_nombre);
           
           $('#centro').load("enviarCorreo.php",{
              correo_usuario : _correo_usuario
              // usuario_tipo : _usuario_tipo
           });
       }
</script>
</html>