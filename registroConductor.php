<?php
 if (!isset($_SESSION)) {
    session_start();
    
}
include 'conexionHostinger.php';
 error_reporting(0);
//  $id = $_POST['id'];
//  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $edad = $_POST['edad'];
  $fuma = $_POST['fuma'];
  $habla = $_POST['habla'];
  $musica = $_POST['musica'];
  $nobel = $_POST['nobel'];
  $password = $_POST['password'];
  
  
//Da fallo si encriptamos la contraseña 0, así que hemos decidido quitar el encriptado de las contraseñas  
//  $pass = crypt($pass, "cantero");
//  $pass = password_hash($pass, PASSWORD_DEFAULT);
  
if(!$_POST['submit']){
    
  
}

else {
 //Consulta sql para que me de los datos de la tabla
$sql = "INSERT INTO conductor (nombre,apellido,email,edad,fuma,habla,musica,nobel,password)
VALUES ('$nombre', '$apellido', '$email', '$edad', '$fuma','$habla','$musica','$nobel', '$password')";

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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a href="sesionIniciada.php"><input type="button" class="btn btn-lg btn-primary btn-block" value="Volver"></a>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="tipoLetraLogin">
                           Registro de Usuarios
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <br>
            <br>
            
             <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="registroConductor.php" method="POST">
                        Nombre: <input type="text" class="form-control" name="nombre" value="" required><br><br>
			Apellido: <input type="text" class="form-control" name="apellido" value="" required><br><br>
                        Email: <input type="email" class="form-control" name="email" value="" required><br><br>
                        Edad: <input type="number" class="form-control" name="edad" value="" required><br><br>
                        Fuma: <input type="text" class="form-control" name="fuma" value="" required><br><br>
                        Habla: <input type="text" class="form-control" name="habla" value="" required><br><br>
                        Musica: <input type="text" class="form-control" name="musica" value="" required><br><br>
                        Nobel: <input type="text" class="form-control" name="nobel" value="" required><br><br>
                        Contraseña: <input type="password" class="form-control" name="password" value="" required><br><br>
<!--                        Tipo: <input type="text" class="form-control" name="permiso" value="" required><br>-->
	<br>
        <input type="submit" name="submit" value="Registrarse" class="btn btn-lg btn-primary btn-block"/>
                    </form>                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>




</html>