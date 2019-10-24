<?php
	if ( session_status() === PHP_SESSION_NONE  ){
		session_start();
	}
	$conexion = new mysqli("localhost", "root","","tcgtienda");
	//if ($conexion->connect_error) {
 	//	die("La conexion falló: " . $conexion->connect_error);
	//}
	$usuario_id = $_SESSION["usr_id"];
	$nombre_prod= $_POST["prod_nombre"];
	$prod_descripcion= $_POST["prod_descripcion"];
	$prod_precio= $_POST["prod_precio"];
	$cantidad = $_POST["prod_cantidad"];
	$categoria = $_POST["cat_id"];
	
	$foto = $_FILES["imagen"];
	
	$nombre_imagen= $foto['name'];


	$insertar = "INSERT INTO productos(prod_nombre, prod_cantidad, prod_precio, prod_descripcion, cat_id, usr_id, prod_imagen) VALUES ('$nombre_prod',$cantidad,$prod_precio,'$prod_descripcion',$categoria,$usuario_id,'$nombre_imagen')";
	$resultado = $conexion->query($insertar);

	
	if (!$resultado) {

		echo "error al registrar publicacion";
		
	}
	else {
		
		echo "producto registrado Exitosamente";
	}
	mysqli_close($conexion);
?>