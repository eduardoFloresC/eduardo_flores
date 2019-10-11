
<body>

	
	<div class="container">
		<h1>Registro de usuario</h1>
		<form action="vistas/registro/registrar_usuario.php" method="post" class="form-register">
			<div class="container">
				<div class="row ">
					<div class="col-2">
						<label for="alias">Alias de usuario :</label>
					</div>
				<div class="col-10">
					<input name="alias" type="text" required="">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="nombre">Nombre de usuario :</label>
				</div>
				<div class="col-10">
					<input name="nombre" type="text" required="">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="apellido">Apellido de usuario :</label>
				</div>
				<div class="col-10">
					<input name="apellido" type="text" required="">
				</div>
			</div>
			
			<div class="row ">
				<div class="col-2">
					<label for="password">Contraseña :</label>
				</div>
				<div class="col-10">
					<input name="password" type="password" required="">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="email">E-mail :</label>
				</div>
				<div class="col-10">
					<input name="email" type="e-mail" required="">
				</div>
			</div>

			<!---->
		
			<div class="row">
		      <label class="mr-sm-2 col-2" for="inlineFormCustomSelect">Provincia: </label>
		      <select name="provin" class="custom-select mr-sm-2 col-2" id="inlineFormCustomSelect">
		        <option class="col-10" selected>Provincia...</option>
		        <?php
			        $conexion = new mysqli("localhost", "root","","tcgtienda");

					$consulta = "SELECT * FROM provincias";

					$provincias= $conexion->query($consulta);
		        	foreach ($provincias as $provincia) {
		        		?>

		        		<option name="provincia" id="provincia" value="<?= $provincia["provincia_id"];?>">

		        		<?= $provincia["nombre_provincia"]?>
		        			
		        		</option>


					 <?php
		        	}
		        ?>
		        
		      </select>
	    	</div>

			<!---->
		</div>
		<input type="submit" name="submit" value="Registrarme">
		<input type="reset" name="clear" value="Borrar">
		
	</form>
	</div>
	

</body>
