<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<?php 
$error = "";
$nohayError = false;
if(isset($_POST['nombre'])) $nombre = $_POST['nombre'];
if(isset($_POST['edad'])) $edad = $_POST['edad'];
if(isset($_POST['sexo'])) $sexo = $_POST['sexo'];
if(isset($_POST['dni'])) $dni = $_POST['dni'];


    if(isset($_POST['envia'])){

        if($edad < 18){

            $error = "No tienes mas de 18 años";
        }else {
            $nohayError = true;
        }

    }    
?>
<body>
    <div class="container">
        <h2>Datos personales</h2>
        <div class="row">
            <div class="col-md-5">
                <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre y Apellidos*</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad(Debe tener mínimo  18 años)*</label>
                        <?php if($error != ''){
                        echo "<div class='alert alert-danger' role='alert'>
                                 $error
                        </div>" ;};
                        ?>
                        <input type="number" id="edad" name="edad" class="form-control" max="100" required ></input>
                    </div>
                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo</label><br>
                        <input type="radio" name="sexo" required value="HOMBRE"> Hombre
                        <input type="radio" name="sexo" value="MUJER"> Mujer
                        <input type="radio" name="sexo" value="OTRO"> Otro
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label><br>
                        <input type="text" class="form-control" name="dni" placeholder="Introduzca su DNI" required pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra"/>
                    </div>
                    <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label><br>
                        <input type="file" name="archivo">
                    </div>
                    <input type="submit" class="btn btn-primary" value="enviar" name="envia">
                </form>
            </div>
            <?php 
            if($nohayError){

                echo "
                    <div class='col-md-5'>
                    <h3>Los datos introducidos son:</h3><br>
                    <p><b>Nombre:</b>  $nombre</p>
                    <p><b>Edad:</b> $edad</p>
                    <p><b>Sexo:</b> $sexo</p>
                    <p><b>Dni:</b> $dni</p>
                </div>
                ";
            }
            
            ?>
        </div>
    </div>

   
</body>
</html>