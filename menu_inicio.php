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
              <img src="imagenes/<?php echo $_SESSION['DNI'];?>.jpg" class="img-circle" style="width: 40px;"
              <li class="active"><a href="#"><?php echo $nombre;?></a></li>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="btn btn-block text-center" style="background-color: #122b40; color: #fff; font-size: 48px;" onclick="cargQuiz()">QUIZ</div>
<br>
<br>
<div class="btn btn-block text-center" style="background-color: #245269; color: #fff; font-size: 48px;" onclick="cargReverso()">REVERSO</div>
<br>
<br>
<div class="btn btn-block text-center" style="background-color: #286090; color: #fff; font-size: 48px;" onclick="cargWho()">WHO IS WHO?</div>
<br>
<br>
<div class="btn btn-block text-center" style="background-color: #1b6d85; color: #fff; font-size: 48px;" onclick="cargOveja()">OVEJA-PAREJA</div>
<br>
<br>
<div class="btn btn-block text-center" style="background-color: #31b0d5; color: #fff; font-size: 48px;" onclick="cargAdivina()">ADIVINA</div>

<script>
        function cargQuiz(){
            $('#centro').load("quiz.php");
        }
        function cargReverso(){
            $('#centro').load("reverso.php");
        }
        function cargWho(){
            $('#centro').load("whoIsWho.php");
        }
        function cargOveja(){
            $('#centro').load("oveja.php");
        }
        function cargadivina(){
            $('#centro').load("adivina.php");
        }
</script>

<?php 
//ejemplo de volcado de una query a un array en php
//creo el array
$usuarios = array();
//hago la consulta a la bbdd
$consulta_usuarios = $mysqli -> query ("select * from usuario");
//saco el numero de usuarios que hay en la bbdd
$num_usuarios = $consulta_usuarios -> num_rows;

for($i = 0; $i < $numero_usuarios; $i++){
    $r = $consulta_usuarios -> fetch_array();
    $usuarios[$i][0] = $r['DNI'];
    $usuarios[$i][1] = $r['Nombre'];
    $usuarios[$i][2] = $r['Apellido'];
    $usuarios[$i][3] = $r['Email'];
}

//ahora voy a usar los datos en un ejemplo
?>
<table class="table table-condensed">
    <?php 
    for($i = 0; $i < $numero_usuarios; $i++){
        echo '<tr>';
        echo '<td>'.$usuarios[$i][1].'<td>';
        echo '<td>'.$usuarios[$i][2].'<td>';
        echo '<td>'.$usuarios[$i][3].'<td>';
        echo '<td><img src="imagenes/'.$usuarios[$i][0].'.jpg"><td>';
}
    ?>
    
</table>
