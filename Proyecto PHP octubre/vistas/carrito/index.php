<?php


	echo "Agregar al carrito".$GET["id_producto"];
	
	$_SESSION["carrito"]= $_GET["id_producto"];	
?>