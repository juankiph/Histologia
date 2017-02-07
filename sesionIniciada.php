<?php
$_SESSION['nombre'] = $usuario;
$_SESSION['password'] = $password;
session_start();
if (isset($_SESSION)) {
    session_start();
    $_SESSION['nombre'] = $usuario;
    $_SESSION['password'] = $password;
} else {
    session_start();
    $_SESSION['nombre'] = $usuario;
    $_SESSION['password'] = $password;
}
if (isset($_SESSION['nombre']) and isset($_SESSION['password'])) {
    $nombre = $_SESSION['nombre'];
    $password = $_SESSION['password'];


//            echo  "<script>
//                document.getElementById('usuario_nombre').value = '$nombre';
//                 document.getElementById('usuario_clave').value = '$password';
//                document.getElementById('remember').checked = true;
//                </script>";
}
//Ahora session_start continua la sesion que creamos el login.php
//leo lo que guarde en la variable nombre
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UFUber</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <title></title>
        <style>
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <h1>SESION INICIADA <?php echo $nombre; ?> <br><br> Contraseña <?php echo $password ?> <br> Session<?php echo $nombre ?></h1>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="sesionIniciada.php">UFUber</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="registroConductor.php">Registro Conductor</a></li> 
                        <li><a href="registroCoche.php">Registro Coches</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
<!--                        <li><a href="registro.php"><span class="glyphicon glyphicon-log-in"></span> Registrate</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hector <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="cambiarContrasena.php">Cambiar contraseña</a></li>
<!--            <li><a href="#"></a></li>
            <li><a href="#"></a></li>-->
            <li class="divider"></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
        </li>
<!--        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </body>
    <script>
        $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    </script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>