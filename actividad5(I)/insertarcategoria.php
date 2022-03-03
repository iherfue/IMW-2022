<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

$consulta = "select nombre from categoria";
$resultado = mysqli_query($conexion,$consulta);

//INSERTAR NUEVA CATEGORÍA
if(isset($_POST['nombre'])) $nombre = test_input($_POST['nombre']);
    if(isset($_POST['envia'])){

        $insertaCategoria = "insert into categoria(nombre) values('$nombre')";

        if(mysqli_query($conexion,$insertaCategoria)){

            header("Location: insertarcategoria.php");
            echo "Se registro correctamente";
        }
    }
?>

<div class="container"><br>
    <div class="row">
        <div class="col-md-4">
            <h3>Insertar una nueva categoria</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <button type="submit" name="envia" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <div class="col-2"></div>
        <div class="col-md-4">
            <h4>Categorías actuales</h4>

            <ul>
            <?php while(($fila = mysqli_fetch_assoc($resultado)) == true): ?>
                <li><?php echo $fila['nombre'];?></li>
                <?php endwhile;
                ?>
            </ul>
        </div>
     
    </div>
</div>