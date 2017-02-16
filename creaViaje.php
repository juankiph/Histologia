
<?php
if (!isset($_SESSION)) {
    session_start();
    
}

include 'conexion.php';
include('misfunciones.php');
    $mysqli = conectaBBDD();
 error_reporting(0);
 
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
    <style>
      html, body {
        background-image: url(imagenes/coche.jpg);
        background-size: cover;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
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
            margin-top: 12%;
            
        }
        .letraEquipo{
            margin-top: 4%;
            font-family: 'Righteous';
            font-size: 60px;
            color:orange;
            -webkit-text-stroke: 2px black;
        }
                 button{
                
  padding: 10px 30px;
  font-size: 4em;
  color: #006432;
  margin-top: 50px;
  margin-left: 100px;
}
#target {
        width: 345px;
      }
    </style>
    <title>comparte coche</title>

  </head>
  <body>
      <div class="container" id="inicio">
        <div class="row">
            <div class="col-lg-2" style="margin-top: 3%; margin-left: 2%;">
                <button class="btn btn-primary btn-lg text-center hoverVolver" onclick="volver();">Volver</button>
            </div>
              <div class="col-lg-8">
                <h2 class="letraEquipo text-center ">Comparte Coche</h2>
            </div>
            <div class="col-lg-2"></div>
            </div>
          <div style="center">
    <input id="pac-input" class="controls" type="text" placeholder="Introduzca Un Origen">
    <input id="pac-input2" class="controls" type="text" placeholder="Introduzca Un Destino">
    <button class="btn btn-success bg-success btn-primary btn-lg text-center glyphicon" onclick="volver();"></button>
   </div>
                </div>
            
             

        

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASzFVkS3kyIUv4zECI7CCNkr7h861vbyc&libraries=places&callback=initAutocomplete"
         async defer></script>
  </body>
      <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
//  var map = new google.maps.Map(document.getElementById('map'), {
//    center: {lat: -33.8688, lng: 151.2195},
//    zoom: 13,
//    mapTypeId: google.maps.MapTypeId.ROADMAP
//  });

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

    </script>
</html>