<body>
	
	<h1>Mis Publicaciones</h1>
	
	<a href="index.php?m=agregar_producto" class="btn btn-primary mb-2 ml-5" >Agregar Nueva Publicación</a>
	<div class="container">

		<div class="row">
			
			<div class="row">
			<?php
					
				$conexion = new mysqli("localhost", "root","","tcgtienda");

				$consulta = "SELECT * FROM usuarios, productos WHERE usuarios.usr_id = productos.usr_id AND usuarios.usr_id = $_SESSION[usr_id]";

				$productos=$conexion->query($consulta);

				foreach ($productos as $producto) {
					?> <div class="card text-center border-dark bg-light" style="max-width: 18rem;" >
						<div class="card-header"><?= $producto["prod_nombre"];?></div>
						<div class="card-body">
						  <img src=img/<?= $producto["prod_imagen"];?> class="card-img-top"  style="width: 250px" >
						  
  					    	<p><?= $producto["prod_descripcion"];?></p>
						    <p>Precio : $ <?= $producto["prod_precio"];?></p>
						  </div>
						  <div class="card-footer" style="text-align: center">
						  	<button>Editar</button>
						  	<button>Eliminar</button>
						  </div>
						</div>
				<?php							
				}
			?>
			</div>
		</div>
		

	</div>
	
</body>