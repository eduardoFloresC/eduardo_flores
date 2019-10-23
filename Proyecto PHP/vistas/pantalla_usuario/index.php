<?php

	$accion = "listar";

     if ( isset( $_REQUEST["a"] ) ){
           $accion = $_REQUEST["a"];
     }


     switch ($accion) {

        case 'listar':
			$contenido="vistas/pantalla_usuario/partials/contenido_pantalla_usuario.php";
			include"vistas/common/base.inc.php";
			break;

		case 'quitar':
			session_start();

            if ( isset($_GET["indice"]) ){
	            $indice =  $_GET["indice"];

	            unset( $_SESSION["carrito"][$indice ] ) ;

	            $_SESSION["carrito"] = array_values($_SESSION["carrito"]);

	            
	            header("Location: index.php?m=pantalla_usuario");
	        }     

	        break;
	    }
?>

//DELETE FROM `productos` WHERE `productos`.`prod_id` = 8;

