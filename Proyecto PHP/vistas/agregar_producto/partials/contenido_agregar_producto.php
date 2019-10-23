
	<body>
<?php
	
	$conexion = new mysqli("localhost", "root","","tcgtienda");
?>
<h2>Agregando Nueva Publicación</h2>
<div class="container card"  style="max-width: 28rem;">
	<form action="vistas/agregar_producto/registrar_producto.php" class="mt-2" method="POST" enctype="multipart/form-data">
		<div>
			<label for="">Ingrese el nombre del producto:</label>
			<input name="prod_nombre" type="text" class="form-control" placeholder="Nombre del producto" required>
		</div>
		<div>
			<label for="" class="mt-2">Ingrese una descripción del producto:</label>
			<input name="prod_descripcion" type="text" class="form-control" placeholder="Detalle del producto" required>
		</div>
		<div>
			<label for="" class="mt-2">Ingrese la cantidad del producto:</label>
			<input name="prod_cantidad" type="text" class="form-control" placeholder="Cantidad" required>
		</div>
		<div>
			<label for="" class="mt-2">Ingrese el precio del producto:</label>
			<input name="prod_precio" type="text" class="form-control" placeholder="Precio" required>
		</div>
		<label for="" class="mt-2">Seleccione la categoría del producto:</label>
		<div class="input-group mb-3 mt-2">
		  
		  <select name="cat_id" class="custom-select" id="inputGroupSelect01"required>
		    <option selected  >Categoría</option>
		    <?php
		    	include("vistas/common/conexion.php");

		    	$consulta = "SELECT * FROM categorias_productos ";

					$categorias= $conexion->query($consulta);

					foreach ($categorias as $categoria){

            	?>
            		<option value="<?=$categoria["cat_id"];?>"><?=$categoria["nombre_categoria"];?></option>
		    <?php
		    	}
		    ?>
		    
		  </select>
		</div>
		<label for="" class="mt-2">Cargue la imagen del producto:</label>
		<div class="custom-file">
			
  			<input name="imagen" type="file" class="custom-file-input" id="customFileLang" lang="es" required>
  			<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
		</div>
		<div class="mt-5">
			<input type="submit" class="btn btn-primary" value="Guardar"> 
			<a href="index.php?m=pantalla_usuario" class="btn btn-dark">Cancelar</a>	
		</div>
		
	</form>
</div>
