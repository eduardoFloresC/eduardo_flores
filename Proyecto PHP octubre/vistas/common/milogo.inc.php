<?php
	session_start();
?>

	<?php
include("vistas/common/base.inc.php");

?>
	<!---->
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
			if ( isset($_SESSION["usuario"]) ){
				echo "Bienvenido " . $_SESSION["nombre_real"];

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

	

</div></div>
	
</div>



