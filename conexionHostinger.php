<?php 	$dbhost = "mysql.hostinger.es";
	$dbuser = "u992734438_bbdd";
	$dbpass = "123456";
	$db 	= "u992734438_bbdd";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "La conexion no se ha podido realizar correctamente";
	} else {
            echo "Conectado correctamente con la base de datos";
}
?>