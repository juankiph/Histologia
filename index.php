<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Primer commit desde mi rama

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FlashCard</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <title></title>
        <style>
#formLogin{padding: 15px; min-width:300px;}
        </style>
    </head>
    <body>
        <div id="centro"> 
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.php">LVNP</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Juegos</a></li>
                        <li><a href="#">Reglas</a></li> 
                        <li><a href="#">Clasificacón</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrate</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="glyphicon glyphicon-user"></span>
                                Login
                            </a>
                            <div class="dropdown-menu" id="formLogin">
                                <div class="row">
                                    <div class="container-fluid">
                                        <!--<form>-->
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input class="form-control" name="username" id="usuario_nombre" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input class="form-control" name="password" id="usuario_clave" type="password"><br>
                                            </div>
                                            <button class="btn btn-success btn-sm" onclick="chequeaPassword();">Login</button>
                                        <!--</form>-->
                                    </div>
                                </div>
                            </div>
                        </li>
<!--        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function chequeaPassword(){
            var _usuario_nombre = $('#usuario_nombre').val();
            var _usuario_clave = $('#usuario_clave').val();
           // var _usuario_tipo = $('#usuario_tipo').val();
           // console .log(_usuario_nombre);
           
           $('#centro').load("login.php",{
               usuario_nombre : _usuario_nombre,
               usuario_clave : _usuario_clave
              // usuario_tipo : _usuario_tipo
           });
            
        }
    </script>
</html>

