<?php
 if (!isset($_SESSION)) {
    session_start();
    
}
include 'conexion.php';
 error_reporting(0);
//  $id = $_POST['id'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $color = $_POST['color'];
  $antiguedad = $_POST['antiguedad'];
  $capacidad = $_POST['capacidad'];
  $foto = $_POST['foto'];
 
  
  
//Da fallo si encriptamos la contraseña 0, así que hemos decidido quitar el encriptado de las contraseñas  
//  $pass = crypt($pass, "cantero");
//  $pass = password_hash($pass, PASSWORD_DEFAULT);
  
if(!$_POST['submit']){
    
  
}

else {
 //Consulta sql para que me de los datos de la tabla
$sql = "INSERT INTO coche (marca,modelo,color,antiguedad,foto,capacidad)
VALUES ('$marca','$modelo', '$color', '$antiguedad', '$capacidad', '$foto')";

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
                    <a href="sesionIniciada.php"><input type="button" class="btn btn-success btn-block" value="Volver"></a>
                </div>
                <div class="col-md-4"></div>
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
                    <form action="registroCoche.php" method="POST">
                        Marca: <input type="text" class="form-control" name="marca" value="" required><br><br>
                        Modelo: <input type="text" class="form-control" name="modelo" value="" required><br><br>
			Color: <input type="text" class="form-control" name="color" value="" required><br><br>
                        Antiguedad: <input type="text" class="form-control" name="antiguedad" value="" required><br><br>
                        Capacidad: <input type="number" class="form-control" name="capacidad" value="" required><br><br>
                        foto: <input type="file" class="form-control" name="foto" value="" required><br><br>
                        
	<br>
        <input type="submit" name="submit" value="Registrarse" class="btn btn-success btn-block"/></center>
</form>                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>




</html>
