<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="active navbar-brand" href="#">HISTOLOGIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#" style="margin-left: 5px;">QUIZ</a></li>
            <li><a href="#" style="margin-left: 5px;">REVERSO</a></li>
            <li><a href="#" style="margin-left: 5px;">WHOISWHO?</a></li>
            <li><a href="#" style="margin-left: 5px;">OVEJA-PAREJA</a></li>
            <li><a href="#" style="margin-left: 5px;">ADIVINA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><?php echo $nombre;?></a></li>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<div style="position: absolute; top: 0px; right: 300px; z-index: 3000;">
    <img src="imagenes/<?php echo $_SESSION['DNI'];?>.jpg" class="img-circle" style="width: 80px;">
</div>