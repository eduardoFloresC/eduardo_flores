<?php

function obtenerProductos( $textoBuscado ){
	
    $conexion = new mysqli("localhost", "root", "", "tcgtienda");

    $sql = "SELECT * FROM producto";

    $sql .= " WHERE producto LIKE '%" .  $textoBuscado . "%' ";
    $sql .= " OR prod_descripcion LIKE '%" .  $textoBuscado . "%' ";


    return $conexion->query($sql);

}

function obtenerInfoArticulo( $idArticulo ){

    $conexion = new mysqli("localhost", "root", "", "tcgtienda");

    $sql = "SELECT * FROM producto WHERE prod_id = " . $idArticulo;

    $resultado = $conexion->query($sql);

    $infoArticulo = $resultado->fetch_assoc();

    return $infoArticulo;
}