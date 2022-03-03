<?php 

    include("conecta.php");
    include("funciones.php");
    $conexion = ConexionBD();
menu();

// consulta categorias
    $categorias = "SELECT * from categoria";
    $r_categorias = mysqli_query($conexion,$categorias);

//INSERTAR REGISTRO NUEVO

if(isset($_POST['nombre'])) $nombre = test_input($_POST['nombre']);
if(isset($_POST['tipo'])) $tipo = test_input($_POST['tipo']);
if(isset($_POST['precio'])) $precio = test_input($_POST['precio']);
if(isset($_POST['unidades'])) $unidades = test_input($_POST['unidades']);
if(isset($_POST['categoria'])) $categoria = test_input($_POST['categoria']);

    if(isset($_POST['envia'])){

        $insertaProducto = "INSERT INTO productos(nombre,tipo,precio,unidades,categoria) values('$nombre','$tipo',$precio,$unidades,$categoria)";

        if(mysqli_query($conexion,$insertaProducto)){

            header("Location: listaproducto.php");
            echo "Se registro correctamente";
        }
    }
?>

<div class="container"><br><br>
 <div class="col-md-5">
    <h3>Insertar un nuevo producto</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
        <label for="categoria" class="form-label">Categoria del producto</label>
            <select id="categoria" class="form-control" name="categoria">
            <?php while(($fila = mysqli_fetch_assoc($r_categorias)) == true): ?>   
            <option value="<?php echo $fila['id']?>"><?php echo $fila['nombre']?></option>
            <?php 
    endwhile;
?>
            </select>
            
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select id="tipo" class="form-control" name="tipo">
                <option value="NUEVO">NUEVO</option>
                <option value="USADO">USADO</option>
            </select>       
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" class="form-control" id="precio">
        </div>
        <div class="mb-3">
            <label for="unidades" class="form-label">Unidades</label>
            <input type="number" name="unidades" class="form-control" id="unidades">
        </div>
        <button type="submit" name="envia" class="btn btn-primary">Registrar</button>
        <a href="./index.php"><button type="button" class="btn btn-success">Volver</button></a>
    </form>
</div>
</div>