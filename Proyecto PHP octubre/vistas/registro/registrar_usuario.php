<?php
	
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

	if (!$resultado) {

		header("Location:index.php");

	}
	else {
		header("Location:index.php?m=pantalla_usuario");
		
	}
	mysqli_close($conexion);
?>

<!--


	$buscarUsuario= "SELECT * FROM usuarios WHERE usr_alias='_POST[usr_alias]'";
	$result = $conexion->query($buscarUsuario);

	$count = mysqli_num_rows($result);

	if ($count == 1) {
		 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

		 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
	}
	else{

		 $form_pass = $_POST['password'];
		 
		 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

		 $query = $ingreso = "INSERT INTO `usuarios` (`usr_id`, `usr_alias`, `usr_apellido`, `usr_nombre`, `provincia_id`, `email`) VALUES (NULL, 'alias','apellido','nombre','provincia','email');";

		 if ($conexion->query($query) === TRUE) {
		 
		 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
		 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
		 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
		 }

		 else {
		 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
		   }
		 }
		 mysqli_close($conexion);



-->


	

	


