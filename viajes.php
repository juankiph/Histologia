<?php
if (!isset($_SESSION)) {
    session_start();
    
}

include 'conexion.php';
include('misfunciones.php');
    $mysqli = conectaBBDD();
 error_reporting(0);
//  $id = $_POST['id'];
// $id_viaje = $_POST['id_viaje'];
// $id_conductor = $_POST['id_conductor'];
// $id_pasajero = $_POST['id_pasajero'];
// $id_coche = $_POST['id_coche'];
// $fecha = $_POST['fecha'];
// $hora = $_POST['hora'];
// $origen = $_POST['origen'];
// $destino = $_POST['destino'];
         
  
//Da fallo si encriptamos la contraseña 0, así que hemos decidido quitar el encriptado de las contraseñas  
//  $pass = crypt($pass, "cantero");
//  $pass = password_hash($pass, PASSWORD_DEFAULT);
  
if(!$_POST['submit']){
    
}
?>
<html>
     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/general.css">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel ="stylesheet" href="css/miHojaDeEstilos.css">
    <link href="https://fonts.googleapis.com/css?family=Impact, fantasy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
    <title></title>
    <style>
   
	
        body{
            background-image: url(imagenes/share.jpg);
            background-size: cover;
            overflow-y: scroll;
        }
        .scroll-content {
            overflow-y: auto;
            width:100%;
            
        }
        div.jtable-main-container {
            height:100%;
            align: center;
        }
        .margenContainer{
            margin-top: 12%;
            
        }
        .letraEquipo{
            margin-top: 4%;
            font-family: 'Righteous';
            font-size: 60px;
            color:orange;
            -webkit-text-stroke: 2px black;
        }
        .divScroll {
            overflow-y:scroll;
            height:385px;
            width:auto;
        }
        div.centraTabla{
        
            
            button{
                
  padding: 10px 30px;
  font-size: 4em;
  color: #006432;
  margin-top: 50px;
  margin-left: 100px;
}

@media (max-width: 699px){
  button{
    padding: 10px 30px;
    font-size: 2em;
    color: #006432;
    margin-top: 10px;
    margin-left: 10px;
  }
}
        }

    </style>
</head>
<body>
    <div class="container" id="inicio">
        <div class="row">
            <div class="col-lg-2" style="margin-top: 3%; margin-left: 2%;">
                <button class="btn btn-primary btn-lg text-center hoverVolver" onclick="volver();">Volver</button>
            </div>
              <div class="col-lg-8">
                <h2 class="letraEquipo text-center ">VIAJES DISPONIBLES</h2>
            </div>
            <div class="col-lg-2"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2" style="text-align: center"></div>
                <div class=" col-lg-8 table-responsive margenContainer" >
                <div class="divLogin divScroll">
                    <table class="table table-striped  table-hover table-bordered table-hover table-condensed" style="font-family: 'Righteous';font-size: 25;">
                    <tr>
                     <?php
                     
            $consulta_viajes = $mysqli -> query("SELECT conductor.foto, viaje.* from conductor, viaje where conductor.id_conductor= viaje.id_conductor");
            
            
            $num_viajes = $consulta_viajes -> num_rows;
            
            echo '<table class="table text-center table-striped table-hover table-bordered">';
            echo '<tr class="success">';
            echo '<th>foto</th>';
            echo '<th>id viaje</th>';
            echo '<th>id conductor</th>';
            echo '<th>id pasajero</th>';
            echo '<th>id coche</th>';
            echo '<th>hora</th>';
            echo '<th>origen</th>';
            echo '<th>destino </th>';
            echo '<th>eliminar</th>';
            echo '</tr>';
            for ($i = 0; $i < $num_viajes; $i++){
               $fila = $consulta_viajes -> fetch_array();            
               $foto = $fila['foto'];
               $id_viaje = $fila['id_viaje'];
               $id_conductor = $fila['id_conductor'];
               $id_pasajero = $fila['id_pasajero'];
               $id_coche = $fila['id_coche'];
               $hora= $fila['hora'];
               $origen= $fila['origen'];
               $destino = $fila['destino'];
               echo '<tr class="warning" id="boton_'.$i.'" >';
               echo '<td><a href="index.php"><img src="imagenes/'.$foto.'.jpg" style="width:50px;"/></a></td>';
               echo '<td>'.$id_viaje . '</td>';
               echo '<td>'.$id_conductor. '</td>';
               echo '<td>'.$id_pasajero. '</td>';
               echo '<td>'.$id_coche. '</td>';
               echo '<td>'.$hora. '</td>';
               echo '<td>'.$origen . '</td>';
               echo '<td>'.$destino. '</td>';
               echo '<td><button  onClick="borra('.$i.','.$id_viaje.');" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash" ></i></button></td>';
              
               echo '</tr>';
            }
            echo '</table>'
            
        ?>
                    
                </table>
                </div>
            </div>
             <div class="col-lg-2" style="text-align: center"></div>

        </div>
        </div>
            
</body>

<script>
    function volver() {
        $('#inicio').load('index.php');
    } 
        function window_open(url){
   window.open( "mensaje_error.php", "nombrePop-Up", "width=380,height=500, top=50%,left=50%");
  }
	document.getElementById("botonWindowOpen").onclick = function() {window_open()};
</script>
