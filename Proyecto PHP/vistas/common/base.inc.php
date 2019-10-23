<?php 

	if ( session_status() === PHP_SESSION_NONE  ){
		session_start();
	}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>TCG COMPRA VENTA - Login</title>
	<link rel="stylesheet" href="css/estili.css">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	
</head>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
      <h1><a href="index.php"><img src="img/reino.png" width="100"></a>TCG TIENDA</h1>
			</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
          <form class="form-inline my-2 my-lg-0 mx-3">
          
          <input name="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
          
        </ul>
        	
		<div>
			
		<?php
			if (isset($_SESSION["carrito"])) {?>
				<a htabindex="-1" role="button" aria-disabled="true" href="index.php?m=carrito&a=listar" class="btn btn-info btn-sm mr-2"tabindex="-1" role="button" aria-disabled="true">
				Carrito(<?= sizeof($_SESSION["carrito"])?>)
					</a><?php
			}
		?>
		<?php
			if ( isset($_SESSION["usr_alias"]) ){


				echo "Bienvenido " . $_SESSION["usr_alias"];

				echo "<div><a href=\"index.php?m=logout\">Cerrar sesión</a></div>";
				
				echo "<div><a href=\"index.php?m=pantalla_usuario\">Mi Cuenta</a></div>";
			}
			else{

			?>
		</div>
		<div class=" mr-10 ml-10 mx-3">
			
			<a href="index.php?m=ingreso" class="btn btn-danger btn-sm " tabindex="-1" role="button" aria-disabled="true">Ingresar</a>
			<a href="index.php?m=registro" class="btn btn-info btn-sm" tabindex="-1" role="button" aria-disabled="true">Registrate Gratis!!</a>
			
			
		<?php }
		
		?>
		</div>
			

      </div>
    </nav>
  </header>

<?php
	include("$contenido");

?>

<!---->


<div class="card mt-5">
<div class="card-header ">
<h3>Más...</h3>
</div>
<div class="card-body ">
	<h5 class="card-title ">Más información</h5>
		<div class="container" >
			<div class="row">
				<div class="">
					<ul id="mi-lista">
		    			<li><a href="">Contacto</a></li>
		    			<li><a href="https://goo.gl/maps/AjBWZmL73mvB4WPG9">Nuestra Ubicacion</a></li>
		    			<li><a href="">Acerca de nosotros</a></li>
		    			<li><a href="">Consultas</a></li>
		    			<li><a href="">Tiendas oficiales</a></li>
					</ul>
				</div>
				<div class="">
				<ul id="mi-lista">
					<li><a href="https://es-la.facebook.com/MouIkkaiOfficial/">Facebook</a></li>
					<li><a href="http:\\www.twitter.com">Twitter</a></li>
					<li><a href="http:\\www.instagram.com">Instagram</a></li>
					<li><a href="http:\\www.youtube.com">Youtube</a></li>
					
				</ul>

			</div>
			</div>
		</div>
	
</div>
</div>


<!---->


<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>