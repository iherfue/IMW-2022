<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Estacion del año actual</h4>
    <?php

    $estaciones = ["PRIMAVERA","VERANO","OTOÑO","INVIERNO"];

    $mes = date("n");

    if($mes == '12' || $mes == '1' || $mes == '2'){

        echo "ESTAMOS EN INVIERNO";
    }

    if($mes == '3' || $mes == '4' || $mes == '5'){

        echo "ESTAMOS EN PRIMAVERA";
    }

    if($mes == '6' || $mes == '7' || $mes == '8'){

        echo "ESTAMOS EN VERANO";
    }

    if($mes == '9' || $mes == '10' || $mes == '11'){

        echo "ESTAMOS EN OTOÑO";
    }
    ?>
</body>
</html>