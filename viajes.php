<?php
if (!isset($_SESSION)) {
    session_start();
}

include 'conexion.php';
include('misfunciones.php');
$mysqli = conectaBBDD();
error_reporting(0);
if (!$_POST['submit']) {
    
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel ="stylesheet" href="css/general.css">
<link rel ="stylesheet" href="css/bootstrap.min.css">
<link rel ="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<link rel ="stylesheet" href="css/miHojaDeEstilos.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Impact, fantasy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">

<link rel="stylesheet" href="DataTables/DataTables-1.10.13/css/jquery.dataTables.min.css" type="text/css"> 

<title></title>

<style>
    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #pac-input2 {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }
    #pac-input3 {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 100px;
    }

    #pac-input2:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
    button{

        padding: 10px 30px;
        font-size: 4em;
        color: #006432;
        margin-top: 50px;
        margin-left: 100px;
    }
    div.jtable-main-container {
        height:100%;
        align: center;
    }
    .margenContainer{
        margin-top: 10%;

    }
    .letraEquipo{
        margin-top: 4%;
        font-family: 'Righteous';
        font-size: 60px;
        color:orange;
        -webkit-text-stroke: 2px black;
    }
    #target {
        width: 345px;
    }
    .ui-spinner:hover,  .ui_tpicker_timezone:hover > select {
        border: 1px solid #2196F3
    }


    body{
        background-image: url(imagenes/share.jpg);
        background-size: cover;
        overflow-y: scroll;
    }
    .scroll-content {
        overflow-y: auto;
        width:100%;

    }
    .divScroll {
        overflow-y:scroll;
        height:385px;
        width:auto;
    }
    div.centraTabla{
        padding: 10px 30px;
        font-size: 2em;
        color: #006432;
        margin-top: 10px;
        margin-left: 10px;
    }

    @media (min-width: 768px) {
        .form-search .combobox-container,
        .form-inline .combobox-container {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: top;
        }
        .form-search .combobox-container .input-group-addon,
        .form-inline .combobox-container .input-group-addon {
            width: auto;
        }
    }

    .combobox-selected .caret {
        display: none;
    }


    /* :not doesn't work in IE8 */

    .combobox-container:not(.combobox-selected) .glyphicon-remove {
        display: none;
    }

    .typeahead-long {
        max-height: 300px;
        overflow-y: auto;
    }

    .control-group.error .combobox-container .add-on {
        color: #B94A48;
        border-color: #B94A48;
    }

    .control-group.error .combobox-container .caret {
        border-top-color: #B94A48;
    }

    .control-group.warning .combobox-container .add-on {
        color: #C09853;
        border-color: #C09853;
    }

    .control-group.warning .combobox-container .caret {
        border-top-color: #C09853;
    }

    .control-group.success .combobox-container .add-on {
        color: #468847;
        border-color: #468847;
    }

    .control-group.success .combobox-container .caret {
        border-top-color: #468847;
    }


</style>

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
    <br>
    <div id="datosViaje"  style="background-color: rgba(51,153,153,0.6); border-radius: 20px; color: white; font-weight: bold;">
        <br>
        <div class="row">
            <div class=" col-lg-1"></div>
            <div class=" col-lg-5">
                <p>Introduzca un origen</p>
                <input id="pac-input" class="controls" type="text" placeholder="Introduzca Un Origen" style="margin: 0px; color: black">
                <br>
                <br>
                <p>Introduzca un destino</p>
                <input id="pac-input2" class="controls" type="text" placeholder="Introduzca Un Destino" style="margin: 0px;color: black">
            </div>
            <div class=" col-lg-5">
                <p>Introduzca una fecha de viaje</p>
                <input size="18" type="text" value="2017-06-15 14:45" class="form_datetime" style="width: 100% ;color:black">     
                <br>
                <br>
                <p>Nº plazas libres</p>
                <select class="form-control" style="width: 100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>  
            </div>
            <div class=" col-lg-1"></div>
        </div>
        <br>
        <div class="row">
            <div class=" col-lg-1"></div>
            <div class=" col-lg-10">
                <button class="btn btn-block btn-primary" style="margin: 0px;">Registra tu viaje</button>  
            </div>
            <div class=" col-lg-1"></div>
        </div>
        <br>
    </div>
    <br>
            <?php
            $consulta_viajes = $mysqli->query("SELECT usuario.foto, usuario.nombre , coche.modelo, coche.marca , viaje.* from usuario, coche, viaje where usuario.id_usuario= viaje.id_usuario");
            $num_viajes = $consulta_viajes->num_rows;
            ?>
    <div id="divTabla" style="background-color: rgba(51,153,153,0.6); border-radius: 20px;">
        <br>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>                
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <br>
                <table class="table text-center table-striped table-responsive table-hover table-bordered" id="tablaViajes">
                    <thead>
                        <tr class="success">
                        <th>foto</th>
                        <th>nombre</th>
                        <th>marca</th>
                        <th>modelo</th>
                        <th>hora</th>
                        <th>origen</th>
                        <th>destino </th>
                        <th>eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                for ($i = 0; $i < $num_viajes; $i++) {
                    $fila = $consulta_viajes->fetch_array();
                    $foto = $fila['foto'];
                    $nombre = $fila['nombre'];
                    $marca = $fila['marca'];
                    $modelo = $fila['modelo'];
                    $fechaHora = $fila['fechaHora'];
                    $origen = $fila['origen'];
                    $destino = $fila['destino'];
                    echo '<tr class="warning" id="boton_' . $i . '" >';
                    echo '<td><a href="index.php"><img src="imagenes/' . $foto . '.jpg" style="width:50px;"/></a></td>';
                    echo '<td>' . $nombre . '</td>';
                    echo '<td>' . $marca . '</td>';
                    echo '<td>' . $modelo . '</td>';
                    echo '<td>' . $hora . '</td>';
                    echo '<td>' . $origen . '</td>';
                    echo '<td>' . $destino . '</td>';
                    echo '<td><button  onClick="borra(' . $i . ',' . $id_viaje . ');" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash" ></i></button></td>';
                    echo '</tr>';
                }
                ?>
                    </tbody>
                </table>
                <br>
            </div>                
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        </div>
        <br>
    </div>
    <br>
    <br>
</div>

<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="DataTables/DataTables-1.10.13/js/jquery.dataTables.min.js"></script>

<script>
           
    
    $(document).ready(function(){
        $('#tablaViajes').DataTable({
            "pagingType": "full_numbers",
            "bFilter": false,
            "aLengthMenu": [[5, 10, 25, 100, -1], [5, 10, 25, 100, "Todos"]],
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ filas",
                "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ filas",
                "oPaginate": {
                    "sFirst": "Primera", // This is the link to the first page
                    "sPrevious": "Anterior", // This is the link to the previous page
                    "sNext": "Siguiente", // This is the link to the next page
                    "sLast": "Última" // This is the link to the last page
                }
            }
        });
            
        
    // convert selects already on the page at dom load
        $('select.form-control').combobox();
        $('#it').click(function(e){
            $('ul.dropdown-menu').toggle();
        }); 
    });
    
    function volver() {
        $('#inicio').load('index.php');
    }
                
    function window_open(url){
        window.open("mensaje_error.php", "nombrePop-Up", "width=380,height=500, top=50%,left=50%");
    }
    
    document.getElementById("botonWindowOpen").onclick = function() {window_open()};
    
    function initAutocomplete() {
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var input2 = document.getElementById('pac-input2');
        var searchBox = new google.maps.places.SearchBox(input);
        var searchBox2 = new google.maps.places.SearchBox(input2);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
            searchBox2.setBounds(map.getBounds());
        });
        var markers = [];
        // [START region_getplaces]
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();
                if (places.length == 0) {
        return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
        marker.setMap(null);
        });
                            markers = [];
                            // For each place, get the icon, name and location.
                            var bounds = new google.maps.LatLngBounds();
                            places.forEach(function(place) {
                            var icon = {
                            url: place.icon,
                                    size: new google.maps.Size(71, 71),
                                    origin: new google.maps.Point(0, 0),
                                    anchor: new google.maps.Point(17, 34),
                                    scaledSize: new google.maps.Size(25, 25)
                            };
                                    // Create a marker for each place.
                                    markers.push(new google.maps.Marker({
                                    map: map,
                                            icon: icon,
                                            title: place.name,
                                            position: place.geometry.location
                                    }));
                                    if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                            } else {
                            bounds.extend(place.geometry.location);
                            }
                            });
                            map.fitBounds(bounds);
                    });
                    // [END region_getplaces]
    }
    
    function volver() {
        $('#inicio').load('index.php');
    }
    function buscar() {
        $('#inicio').load('viajes.php');
    }

                       
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASzFVkS3kyIUv4zECI7CCNkr7h861vbyc&libraries=places&callback=initAutocomplete"
async defer></script>
<script type="text/javascript">
                        $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script> 
