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
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
            <div class="col-md-3">
                <label for="numero" class="form-label">Introduzca el número que desea mostrar su tabla de multiplicar</label>
                <input type="number" id="numero" name="numero" class="form-control" required max="100" title="EL MÁXIMO NUMERO ES 100"></input><br>
                <input type="submit" class="btn btn-primary" name="envia" value="enviar">
            </div>
        </form>    



    <?php
    if(isset($_POST['numero'])) $numero = $_POST['numero'];

        if(isset($_POST['envia'])){
            echo "<br>";
            echo "Tabla de multiplicar del $numero";
            echo "<br>";
            for($i=0;$i<=10;$i++){

                echo $numero ." X ". $i. " = " . $numero * $i;
                echo "<br>";
            }
        }
    ?>
    </div>
</body>
</html>