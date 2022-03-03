<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

$id = $_GET["id"];

$consulta = "SELECT * from categoria where id = $id";
$resultado = mysqli_query($conexion,$consulta);
?>
<div class="container"><br>
    <?php
    while(($fila = mysqli_fetch_assoc($resultado)) == true): ?>
        <div class="row">
            <div class="col-md-5">
                <img src="./img/categoria.png"><br><br>
                <b>Nombre de la categoría:</b> <?php echo $fila['nombre']?><br>
                <b>Id referencia categoría:</b> <?php echo $fila['id']?><br>
                <a href="./listarcategoria.php"><button class="btn btn-primary" type="button" value="volver">Volver</button></a>
            </div>
          
        </div>
    <?php 
    endwhile;
?>

</div>