<?php
 if (!isset($_SESSION)) {
    session_start();
    
}
include 'conexion.php';
 error_reporting(0);
//  $id = $_POST['id'];
//  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
//  $idplaystation = $_POST['idplaystation'];
//  $edad = $_POST['edad'];
//  $correo = $_POST['correo'];
  $password = $_POST['password'];
  
  
//Da fallo si encriptamos la contraseña 0, así que hemos decidido quitar el encriptado de las contraseñas  
//  $pass = crypt($pass, "cantero");
//  $pass = password_hash($pass, PASSWORD_DEFAULT);
  
if(!$_POST['submit']){
    
  
}

else {
 //Consulta sql para que me de los datos de la tabla
$sql = "INSERT INTO usuario_pasajero (nombre,apellido,email,password)
VALUES ('$nombre', '$apellido', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Usuario añadido satisfactoriamente</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Dar de alta</title>
        <meta charset="UTF-8">
        
        <title>Registro UFUber</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">
        <link rel ="stylesheet" href="css/general.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <style>
            
            
            
        </style>
</head>

<body>
    <div class="container" id="centro">
        <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="sesionIniciada.php"><input type="button" class="btn btn-success btn-block" value="Volver"></a>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="tipoLetraLogin">
                           Registro Usuarios
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <br>
            <br>
            
             <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="registroPasajero.php" method="POST">
<!--                        Usuario: <input type="text" class="form-control" name="usuario" value="" required><br><br>-->
                        Nombre: <input type="text" class="form-control" name="nombre" value="" required><br><br>
			Apellido: <input type="text" class="form-control" name="apellido" value="" required><br><br>
<!--                        IDPlaystation: <input type="text" class="form-control" name="idplaystation" value="" required><br><br>
                        Edad: <input type="number" class="form-control" name="edad" value="" required><br><br>-->
                        Email: <input type="email" class="form-control" name="email" value="" required><br><br>
                        Contraseña: <input type="password" class="form-control" name="password" value="" required><br><br>
<!--                        Tipo: <input type="text" class="form-control" name="permiso" value="" required><br>-->
	<br>
        <input type="submit" name="submit" value="Registrarse" class="btn btn-success btn-block"/></center>
</form>                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>

include './conexion.php';
error_reporting(0);
//  $id = $_POST['id'];
//  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
//  $idplaystation = $_POST['idplaystation'];
//  $edad = $_POST['edad'];
//  $correo = $_POST['correo'];
  $password = $_POST['password'];
  
  
//Da fallo si encriptamos la contraseña 0, así que hemos decidido quitar el encriptado de las contraseñas  
//  $pass = crypt($pass, "cantero");
//  $pass = password_hash($pass, PASSWORD_DEFAULT);
  
if(!$_POST['submit']){
    
  
}

else {
 //Consulta sql para que me de los datos de la tabla
$sql = "INSERT INTO pasajero (nombre,apellido,email,password)
VALUES ('$nombre', '$apellido', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Usuario añadido satisfactoriamente</center></h1>";
    $mensaje = "<html>"
        . "Bienvenido a UFUber<br><br> Su nombre de usuario es $nombre "
        . "<br> <br><br>"
        . "<br><br> Un saludo, el equipo de seguridad de UFUber. "
        . "</html>";
//la cabecera tiene la codificación y de donde se esta enviando el correo
$cabecera = "From: UFUber <contactoufuber@gmail.com>\r\n";
$cabecera .="Content-Type:text/html;charset=utf-8\r\n";

            
if(mail("$email","Bienvenido a UFUber",$mensaje,$cabecera)){
    echo "<h1><p align='center'>Correo enviado correctamente</p></h1>";
}
else{
    echo "<p align='center'>Error al enviar el correo</p>";
}
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Dar de alta</title>
        <meta charset="UTF-8">
        
        <title>Registro UFUber</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="css/general.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <style>  
        </style>
</head>

<body>
    <div class="container" id="centro">
        <div class="row text-center">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <br>
                    <br>
<!--                    <a href="index.php"><input type="button" class="btn btn-success btn-block" value="Volver"></a>-->
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="tipoLetraLogin">
                           Registro Usuarios
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <br>
            <br>
            
             <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="registroPasajero.php" method="POST">
<!--                        Usuario: <input type="text" class="form-control" name="usuario" value="" required><br><br>-->
                        Nombre: <input type="text" class="form-control" name="nombre" value="" required><br><br>
			Apellido: <input type="text" class="form-control" name="apellido" value="" required><br><br>
<!--                        IDPlaystation: <input type="text" class="form-control" name="idplaystation" value="" required><br><br>
                        Edad: <input type="number" class="form-control" name="edad" value="" required><br><br>-->
                        Email: <input type="email" class="form-control" name="email" value="" id="correo_usuario" required><br><br>
                        Contraseña: <input type="password" class="form-control" name="password" value="" required><br><br>
<!--                        Tipo: <input type="text" class="form-control" name="permiso" value="" required><br>-->
	<br>
        <input type="submit" name="submit" value="Registrarse" class="btn btn-lg btn-primary btn-block" onclick="pillarCorreo();"/></center>
</form>                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
    
<script>
//function pillarCorreo(){
//            var _correo_usuario = $('#correo_usuario').val();
//           // var _usuario_tipo = $('#usuario_tipo').val();
//           // console .log(_usuario_nombre);
//           
//           $('#centro').load("enviarCorreoRegistro.php",{
//              correo_usuario : _correo_usuario
//              // usuario_tipo : _usuario_tipo
//           });
//       }
</script>



</html>
