<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

$consulta = "select * from categoria";
$resultado = mysqli_query($conexion,$consulta);

?>

<div class="container"><br>
<a href="./insertarcategoria.php"><button type="button" class="btn btn-primary">Añadir una nueva Categoría</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acción</th>
                <th>Acción</th>
                <th>Acción</th>
            </tr>
        </thead>
            <?php while(($fila = mysqli_fetch_assoc($resultado)) == true): ?>
                        <tr>
                            <td><?php echo $fila['id'];?></td>
                            <td><?php echo $fila['nombre'];?></td>
                            <td><a href="detalles_categoria.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-primary" value="Detalles"></button></a></td>
                            <td><a href="modifica_categoria.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-warning" value="Modificar"></button></a></td>
                            <td><a href="borra_categoria.php?id=<?php echo $fila['id'];?>"><input type="button" class="btn btn-danger" value="Borrar"></button></a></td>
                        </tr>
                    <?php 
                   endwhile;
                 ?>
    </table>
</div>