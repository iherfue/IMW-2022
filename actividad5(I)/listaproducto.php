<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

$consulta = "select * from productos";
$resultado = mysqli_query($conexion,$consulta);

?>

<div class="container"><br><br>
    <a href="./insertaproducto.php"><button type="button" class="btn btn-primary">Insertar un Registro</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Acción</th>
                <th>Acción</th>
                <th>Acción</th>
            </tr>
        </thead>
            <?php while(($fila = mysqli_fetch_assoc($resultado)) == true): ?>
                        <tr>
                            <td><?php echo $fila['id'];?></td>
                            <td><?php echo $fila['nombre'];?></td>
                            <td><?php echo $fila['tipo'];?></td>
                            <td><?php echo $fila['precio'];?> €</td>
                            <td><?php echo $fila['unidades'];?></td>
                            <td><a href="detalles.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-primary" value="Detalles"></button></a></td>
                            <td><a href="modificaProducto.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-warning" value="Modificar"></button></a></td>
                            <td><a href="borraProducto.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-danger" value="Borrar"></button></a></td>
                        </tr>
                    <?php 
                   endwhile;
                 ?>
    </table>
</div>