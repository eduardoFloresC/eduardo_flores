
	<body>
<?php
	
	$conexion = new mysqli("localhost", "root","","tcgtienda");
?>
<h2>Agregando Nueva Publicación</h2>
<div class="container card"  style="max-width: 28rem;">
	<form action="" class="mt-2">
		<div>
			<label for="">Ingrese el nombre del producto:</label>
			<input name="nombre" type="text" class="form-control" placeholder="Nombre del producto">
		</div>
		<div>
			<label for="" class="mt-2">Ingrese una descripción del producto:</label>
			<input name="detalle" type="text" class="form-control" placeholder="Detalle del producto">
		</div>
		<div>
			<label for="" class="mt-2">Ingrese la cantidad del producto:</label>
			<input name="cantidad" type="text" class="form-control" placeholder="Cantidad">
		</div>
		<label for="" class="mt-2">Cargue la imagen del producto:</label>
		<div class="custom-file">
			
  			<input name="imagen_ruta" type="file" class="custom-file-input" id="customFileLang" lang="es">
  			<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
		</div>
		<div class="mt-5">
			<a href="" class="btn btn-primary">Guardar</a>
			<a href="index.php?m=pantalla_usuario" class="btn btn-dark">Cancelar</a>	
		</div>
		
	</form>
</div>
