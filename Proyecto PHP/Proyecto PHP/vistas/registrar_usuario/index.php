<?php
	
	session_start();
	$conexion = new mysqli("localhost", "root","","tcgtienda");
	//if ($conexion->connect_error) {
 	//	die("La conexion falló: " . $conexion->connect_error);
	//}

	$alias= $_POST["alias"];
	$nombre= $_POST["nombre"];
	$apellido= $_POST["apellido"];
	$password= $_POST["password"];
	$email= $_POST["email"];
	$provincia= $_POST["provin"];

	$insertar = "INSERT INTO usuarios(usr_alias, usr_nombre, usr_apellido, password, email, provincia_id) VALUES ('$alias','$nombre','$apellido','$password','$email','$provincia')";
	$resultado = $conexion->query($insertar);

	$_SESSION["usr_alias"]= $alias;
	$_SESSION["carrito"]= [];

	header("Location: index.php");
?>