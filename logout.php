<?php
session_start();
session_destroy();
unset($_COOKIE['Galleta']);
unset($_COOKIE['Password']);
unset($_COOKIE['Tipo']);
?>
<center><label><a href="index.php">Se ha cerrado la sesión correctamente </a></label></center>
