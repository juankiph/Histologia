<?php
//Ahora session_start continua la sesion que creamos el login.php
if (!isset($_SESSION))  {
    session_start();
}
//leo lo que guarde en la variable nombre
$nombreDelUsuario = $_SESSION['usuario'];
?>
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
        <br>
        <br>
        <br>
        <br>
        <h1>SESION INICIADA</h1>
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
                        <li><a href="./">Cerrar sesión <span class="sr-only"></span></a></li>
<!--                        <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrate</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="glyphicon glyphicon-user"></span>
                                <?php echo $nombreDelUsuario;?>
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
        </nav>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>