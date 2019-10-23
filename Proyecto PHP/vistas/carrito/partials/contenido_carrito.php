

<?php
    include 'modelo/DAOs/productosDAO.php';
?>
<h1 align="center">MI CARRITO DE COMPRAS</h1>
<div class="container">
<table class="table-responsive-lg table-bordered text-center mt-5" style="width: 90%;">
    <thead class="thead-dark ">
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>

<?php
    if ( !isset($_GET["id_producto"] )){

        $indice = 0;

        foreach ( $_SESSION["carrito"] as $id_articulo ){

            $infoArticulo = obtenerInfoArticulo($id_articulo);

            echo "<tr>";

                echo "<td>"?><img src=img/<?= $infoArticulo["prod_imagen"];?> class="card-img-top img-fluid"  style="width: 250px" ></td> <?php
                echo "<td>" . $infoArticulo["prod_nombre"] . "</td>";
                echo "<td>" . $infoArticulo["prod_descripcion"] . "</td>";
                echo "<td>" . $infoArticulo["prod_precio"] . "<br>
                <a class=\"btn btn-danger\" href=\"index.php?m=carrito&a=quitar&indice=" . $indice . "\">Eliminar</a>
                </td>";
                
            echo "</tr>";            

            $indice++;
        }
    }

?>

</table>
<a href="" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a>
<a href="index.php?m=carrito&a=cancelar_compra" class="btn btn-danger btn-lg mt-5 btn-block">CANCELAR COMPRA</a>
<!--el boton CANCELAR COMPRA DEBE QUITAR TODOS LOS ELEMENTOS DEL CARRITO, vaciar el arreglo que está dentro de la variable carrito-->
</div>