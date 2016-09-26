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
          <a class="navbar-brand" href="#">HISTOLOGIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><?php echo $nombre;?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESTUDIEMOS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">TEMARIO</a></li>
                <li><a href="#">PROFESOR PORTATIL</a></li>
                <li><a href="#">AYUDA</a></li>
              </ul>
            </li>
            <li><a href="#contact"></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACTIVIDADES <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">QUIZ</a></li>
                <li><a href="#">REVERSO</a></li>
                <li><a href="#">WHOISWHO</a></li>
                <li><a href="#">OVEJA-PAREJA</a></li>
                <li><a href="#">ADIVINA</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


