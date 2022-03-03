<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

$id = $_GET["id"];

$consulta = "SELECT productos.nombre,categoria.nombre as 'categoria',tipo,precio,unidades from productos,categoria where productos.categoria = categoria.id and productos.id = $id";
$resultado = mysqli_query($conexion,$consulta);
?>
<div class="container"><br>
    <?php
    while(($fila = mysqli_fetch_assoc($resultado)) == true): ?>
        <div class="row">
            <div class="col-md-5">
                <img src="./img/producto.png"><br><br>
                <b>Nombre del producto:</b> <?php echo $fila['nombre']?><br>
                <b>Categoría del producto:</b> <?php echo $fila['categoria']?><br>
                <b>Unidades:</b> <?php echo $fila['unidades']?><br>
                <b>Precio:</b> <?php echo $fila['precio']?><br><br>

                <a href="./listaproducto.php"><button class="btn btn-primary" type="button" value="volver">Volver</button></a>
            </div>
          
        </div>
    <?php 
    endwhile;
?>

</div>