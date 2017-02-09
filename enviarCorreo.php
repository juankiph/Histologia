<?php

include ('misfunciones.php');
include ('conexionHostinger.php');
$mysqli = conectaBBDD();

$correo_usuario = $_POST['correo_usuario'];

$resultado_consulta = $mysqli ->query ("SELECT * FROM pasajero where email='$correo_usuario' ");
$numero_dnis = $resultado_consulta -> num_rows;


if($numero_dnis > 0){
    $r = $resultado_consulta -> fetch_array();
            $usuario_email = $r['email'];
//Si el correo coincide con el que hay en la base de datos
//Se cambiara la contraseña por una generada automaticamente
//en la funcion randomPassword()            
            if($usuario_email == $correo_usuario){
                echo 'Se ha comprobado que el correo esta en la base de datos';

//Esta función crea una contraseña de manera random 
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //declaramos $pass como un array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    //la contraseña sera de 8 caracteres
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //convertimos el array en un string
}

$contrasena = randomPassword();
//En esta query hacemos el cambio de contraseña por la que se ha generado
//en la funcion de arriba
$sql = "UPDATE pasajero set password='$contrasena' where email='$correo_usuario'; ";
 mysqli_query($conn,$sql);
 
 if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Se ha cambiado la contraseña correctamente</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



//El mensaje sera el cuerpo del correo, tendremos que tratarlo como un html
$mensaje = "<html>"
        . "Apreciado usuario:<br><br> La contraseña de su cuenta ha cambiado. "
        . "<br>Su nueva contraseña es: $contrasena <br><br>Le sugerimos que cambie la contraseña lo antes posible."
        . "<br><br> Un saludo, el equipo de seguridad de UFUber. "
        . "</html>";
//la cabecera tiene la codificación y de donde se esta enviando el correo
$cabecera = "From: UFUber <contactoufuber@gmail.com>\r\n";
$cabecera .="Content-Type:text/html;charset=utf-8\r\n";

            
if(mail("$correo_usuario","Correo de prueba",$mensaje,$cabecera)){
    echo "<h1><p align='center'>Correo enviado correctamente</p></h1>";
}
else{
    echo "<p align='center'>Error al enviar el mensaje</p>";
}
            }else{
                echo 'El correo no esta en la base de datos';
                
            }
}else{
    echo 'No existe ese correo en la base de datos';
}

?>
