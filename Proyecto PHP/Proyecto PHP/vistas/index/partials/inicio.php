
	<div class="container">
		<div class="row">	
		</div>
		<div class="row">
			<div class="">
				<div class="">
				
				</div>
			</div>
			<h2>Compra Venta de TCG (Trading Card Games)</h2>
			<ul class="nav-item dropdown">
            	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Listado Por Categorias
            	</a>
            	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
            		<a class="dropdown-item" href="index.php">Todas</a>
            	<?php 
            		include("vistas/common/conexion.php");
					
					$consulta = "SELECT * FROM categorias_productos ";

					$categorias= $conexion->query($consulta);

					foreach ($categorias as $categoria){

            	?>
            		
              		
	              		<a class="dropdown-item" href="index.php?cat_id=<?=$categoria["cat_id"]?>"><?=$categoria["nombre_categoria"];
	              		
	              		?>
	              		</a>
	              	<?php }
	              	?>		

            </div>
          </ul>
		<div class="container">

			<div class="row">
				<div class="col-2">

				</div>
				<div class="">
					
					<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active" data-interval="10000">
					      <img src="img/a3.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item" data-interval="2000">
					      <img src="img/a5.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/a4.jpg" class="d-block w-100" alt="...">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>

				</div>
				
				<div class="container mt-5 text-center">
					<h2>Ofertas</h2>
					<div class="row">
							<?php
								$conexion = new mysqli("localhost", "root", "", "tcgtienda");

								$consulta = "SELECT * FROM productos ";

								if(isset($_GET["cat_id"])){
									$consulta.= "WHERE cat_id=".$_GET["cat_id"];

								}
								else{
									if(isset($_GET["busqueda"])){
										$consulta.="WHERE prod_nombre LIKE '%".$_GET["busqueda"]."%'";
									}
								}

								$productos= $conexion->query($consulta);

								foreach ($productos as $producto){
										
									?><div class="card text-center mr-5 mt-2 card-transparent border-dark" style="width: 14rem;">
									<div class="card-header"><?=$producto ["prod_nombre"];?></div>
									<img src=img/<?= $producto["prod_imagen"];?>  class="mx-auto img-fluid" width="200" onmouseover="this.width=500;this.height=500;" onmouseout="this.width=200;this.height=200;" width="300" height="300" >
									<?php
									echo "<p> Precio del Producto $ ".$producto ["prod_precio"]."</p></b>";
									?>
									<div class="card-footer"><a href="index.php?m=carrito&a=agregar&id_producto=<?= $producto["prod_id"]?>" class="btn btn-dark btn-lg ">Agregar al carrito</a></div>
		        					</div>		
								<?php
								}
								mysqli_close($conexion);
							?>
						  							
								</div>
			</div>
		</div>

	</body>

