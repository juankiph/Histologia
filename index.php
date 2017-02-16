<?php
if (!isset($_SESSION)) {
    session_start();
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UFUber</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <title></title>
        <style>
@CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

body {
	background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}

        </style>
    </head>
    <body>
        <div id="centro"> 
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.php">UFUber</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Viajes Disponibles</a></li>
                        <li><a href="#">Bla Bla Bla</a></li> 
                        <li><a href="#">Bla Bla Bla</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="registroPasajero.php"><span class="glyphicon glyphicon-log-in"></span> Registrate</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="modal" data-target="#login-modal"> <span class="glyphicon glyphicon-user"></span>
                                Login
                            </a>
                            
                        </li>
<!--        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
            <img src="imagenes/logoufv.png" class="img-responsive" alt="" />
            <input name="email" placeholder="Usuario" id="usuario_nombre" required class="form-control input-lg"/>
          
          <input type="password" class="form-control input-lg" id="usuario_clave" placeholder="Contraseña" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="chequeaPassword();">Login</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        
        <div class="form-links">
          <a href="#">www.website.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div> 
  
</div>
        </div>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function chequeaPassword(){
            var _usuario_nombre = $('#usuario_nombre').val();
            var _usuario_clave = $('#usuario_clave').val();
           // var _usuario_tipo = $('#usuario_tipo').val();
           // console .log(_usuario_nombre);
           
           $('#centro').load("login.php",{
               usuario_nombre : _usuario_nombre,
               usuario_clave : _usuario_clave
              // usuario_tipo : _usuario_tipo
           });
            
        }
    </script>
    <script type="text/javascript">
        function validar(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==13) chequeaPassword();
}
</script>
<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UFUber</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <title></title>
        <style>
            @CHARSET "UTF-8";
            /*
            over-ride "Weak" message, show font in dark grey
            */

            .progress-bar {
                color: #333;
            } 

            /*
            Reference:
            http://www.bootstrapzen.com/item/135/simple-login-form-logo/
            */

            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                outline: none;
            }

            .form-control {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                @include box-sizing(border-box);

                &:focus {
                    z-index: 2;
                }
            }

            body {
                background: #ffffff no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            #registro {
                margin-top: 2%;
            }


            .login-form {
                margin-top: 60px;
            }

            form[role=login] {
                color: #5d5d5d;
                background: #f2f2f2;
                padding: 26px;
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
            }
            form[role=login] img {
                display: block;
                margin: 0 auto;
                margin-bottom: 35px;
            }
            form[role=login] input,
            form[role=login] button {
                font-size: 18px;
                margin: 16px 0;
            }
            form[role=login] > div {
                text-align: center;
            }

            .form-links {
                text-align: center;
                margin-top: 1em;
                margin-bottom: 50px;
            }
            .form-links a {
                color: #fff;
            }

            img {
                width: 100%;
                height: auto;
            }


        </style>
    </head>
    <body>
        <div id="top">

        </div>
        <div id="centro"> 

            <div class="container">

                <div class="row" id="pwd-container">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <section class="login-form">
                            <img src="imagenes/logoufv.png" class="img-responsive" alt="" />
                            <input name="email" placeholder="Usuario" id="usuario_nombre" required class="form-control input-lg"/>

                            <input type="password" class="form-control input-lg" id="usuario_clave" placeholder="Contraseña"/>


                            <div class="pwstrength_viewport_progress" id="top">
                                <br>
                                <label><a> <input type="checkbox" id="remember"/>  Recuerdame </a></label>
                            </div>


                            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="chequeaPassword();">Login</button>
                            <div>

                            </div>
                            <div id="registro">
                                <label> <a href="registroPasajero.php">Crearse una cuenta</a> </label>
                                <label> <a href="pruebaEnviarCorreo.php">¿Has olvidado la contraseña?</a> </label>
                            </div>



                            <div class="form-links">
                                <a href="#"></a>
                            </div>
                        </section>  
                    </div>

                    <div class="col-md-4"></div>


                </div> 

            </div>
        </div>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
                function chequeaPassword() {
                    var _usuario_nombre = $('#usuario_nombre').val();
                    var _usuario_clave = $('#usuario_clave').val();
                    // var _usuario_tipo = $('#usuario_tipo').val();
                    // console .log(_usuario_nombre);

                    $('#centro').load("login.php", {
                        usuario_nombre: _usuario_nombre,
                        usuario_clave: _usuario_clave
                                // usuario_tipo : _usuario_tipo
                    });

                    document.getElementById('usuario_nombre').value = '$nombre';
                    document.getElementById('usuario_clave').value = '$password';
                    document.getElementById('remember').checked = true;


                }
    </script>
</html>

