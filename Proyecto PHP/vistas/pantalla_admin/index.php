<?php
include("vistas/common/base.inc.php");

?>
<body>

	<?php
		include("vistas/common/milogo.inc.php");
	?>
	
	<h2>Lista de usuarios</h2>
	
	<?php
					
		$conexion = new mysqli("localhost", "root","","tcgmasterV3");

		$consulta = "SELECT * FROM usuarios ";

		$usuarios= $conexion->query($consulta);

		foreach ($usuarios as $usuario){
	
			 echo "<li>".$usuario ["usr_alias"]."</li>";
					
		
		}
	?>
	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>