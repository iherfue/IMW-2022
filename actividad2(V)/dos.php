<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>datos personales</title>
<!-- <style type="text/css">
    body {background-color:grey; font-size:16px;text-align:center;}
    form {color:white; font-size:16px;text-align:center;} fieldset {text-align:left;margin:0 auto; width:200px;}
    legend {text-align:left;color:blue;} .op {font-size:26px;} p {color:white; font-size:20px;}
</style>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }
  $nameError = "";

    if ((isset($_POST["enviar"])) && (empty($_POST["nombre"]))) { // Si se ha enviado el formulario sin nombre
        $nameError = "<span style='color:red'>El campo nombre es requerido</span>";
        
    }else{
        $nameError="";
    }

if (isset($_POST['enviar']) && ($nameError==""))
{
    
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
    $localidad = test_input($_POST["localidad"]);
    $codigo = test_input($_POST["codigo"]);
    $calle = test_input($_POST["calle"]);
    $email = test_input($_POST['email']);
    echo "<div class='container'>";
    echo "Los datos recogidos son: <br/>Nombre: $nombre <br/> Apellido: $apellido <br/>";
    echo " Direccion: Calle $calle CP $codigo en $localidad <br/>";
    echo " Email: $email <br/> </div>";


}
else
{
?>
<div class="container">
    <h1>datos personales</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="form-group">
        <fieldset><legend>Nombre</legend>
            Nombre:<input type="text" class="form-control" name="nombre">
            <span>* <?php echo $nameError;?></span>
            <br>
            Apellido:<input type="text" class="form-control" name="apellido">
        </fieldset>
    </div>
    <fieldset><legend>Email</legend>
        Email:<input type="email" class="form-control" name="email">
    </fieldset>
    <fieldset><legend>Direccion</legend>
        Calle:<input type="text" class="form-control" name="calle">
        Codigo postal:<input type="text" class="form-control" name="codigo">
        Localidad:<input type="text" class="form-control" name="localidad">
    </fieldset>
    <br>
    <p> <input class="btn btn-primary" type='submit' name="enviar" value="enviar datos" > </p>
    </form>
</div>
<?php
}
?>
</body>
</html>