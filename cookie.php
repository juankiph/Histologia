<?php

setcookie("nombre","$nombreDelUsuario",time()+72000,"");

?>
<script>
    
$("index.php").load("sesionIniciada.php");
    

</script>
