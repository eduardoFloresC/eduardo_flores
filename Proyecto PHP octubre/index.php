<?php
	$modulo="index";

	if (isset($_REQUEST["m"]))
	{
		switch ($_REQUEST["m"]) {
			case "index":
				$modulo="index";
				break;
			case "ingreso":
				$modulo="ingreso";
				break;
			case 'registro':
				$modulo="registro";
				break;
			case 'recuperacionPass':
				$modulo="recuperacion_pass";
				break;

			case 'pantalla_usuario':
				$modulo="pantalla_usuario";
				break;
			case 'pantallaAdmin':
				$modulo="pantalla_admin";
				break;
			case 'logout':
				$modulo="logout";
				break;
			case 'carrito':
				$modulo="carrito";
				break;
			case 'agregar_producto':
				$modulo="agregar_producto";
				break;
			case 'agregar_al_carrito':
				$modulo="agregar_al_carrito";
				break;
		}
	}
	include "vistas/".$modulo."/index.php";
?>