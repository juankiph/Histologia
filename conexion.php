<?php 	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$db 	= "ufuber";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "La conexion no se ha podido realizar correctamente";
	} else {
            echo "Conectado correctamente con la base de datos";
}
?>