

<?php
    include 'modelo/DAOs/productosDAO.php';
?>


<table class="table">

<?php
    if ( !isset($_GET["id_producto"] )){

        $indice = 0;

        foreach ( $_SESSION["carrito"] as $id_articulo ){

            $infoArticulo = obtenerInfoArticulo($id_articulo);

            echo "<tr>";

                echo "<td>" . $infoArticulo["articulo_foto"] . "</td>";
                echo "<td>" . $infoArticulo["articulo_nombre"] . "</td>";
                echo "<td>" . $infoArticulo["articulo_precio"] . "</td>";
                echo "<td><a class=\"btn btn-danger\" href=\"index.php?m=carrito&a=quitar&indice=" . $indice . "\">Eliminar</a></td>";
            echo "</tr>";            

            $indice++;
        }
    }

?>

</table>