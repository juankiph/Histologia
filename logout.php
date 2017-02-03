<?php
session_start();
$_SESSION['nombre'] = $usuario;
$_SESSION['password'] = $password;


session_destroy();
setcookie("nombre", "$usuario", time()-360000000);

setcookie("password", "$password", time()-3600000);
?>
<center><label><a href="index.php">Se ha cerrado la sesión correctamente </a></label></center>
