<?php
include("vistas/common/base.inc.php");

?>

<body>
	
	<?php
		include("vistas/common/milogo.inc.php");
	?>
		<div class="container"><?php
		if ( isset($_GET["nombre"] ) && isset($_GET["password"] ) ){

			$conexion = new mysqli("localhost", "root", "", "tcgtienda");

			$sql = "SELECT * FROM usuarios WHERE usr_alias = '" . $_GET["nombre"] . "' AND password = '" . $_GET["password"] . "'";

			$resultado = $conexion->query($sql);

			$usuario = $resultado->fetch_assoc(); //leo y guardo en usuario

			if( $resultado->num_rows == 1 ){
				
				$_SESSION["usuario"] = $_GET["nombre"];
				$_SESSION["nombre_real"] = $usuario["usr_nombre"];
				$_SESSION["usr_id"] = $usuario["usr_id"];
				$_SESSION["usr_alias"] = $usuario["usr_alias"];

				header("Location: index.php?m=pantalla_usuario");
			}
			else{
				
				?><div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Usuario o contraseña no válido</strong> Por favor intente nuevamente.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php
			}

		}
	?>
	<h1>Ingresar a tu cuenta: </h1>
	<form action="index.php">
		<input name="m" type="hidden" value="ingreso">

		<div class="container">
			<div class="row ">
				<div class="col-2">
					<label for="nombre">Nombre de usuario: </label>
				
				</div>
				<div class="col-10">
					<input name="nombre" type="text">
				</div>
			
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-2">
					<label for="password">Contraseña: </label>
				
				</div>
				<div class="col-10">
					<input name="password" type="password">
				</div>
			
			</div>
			<input class="mt-2" type="submit" value="Ingresar">
			<div>
				<button type="button" class="btn btn-outline-warning mt-5"><a href="index.php?m=recuperacionPass" style="text-decoration: none;">Perdí mi contraseña</a> </button>
				
			</div>
		</div>
		
		

	</form>
	</div>
	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>