<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $temperaturas = [];

        for($i=0; $i<10;$i++){

            $temperaturas[$i] = rand(-5,50);
          
            echo "la temperatura de " . $i . " es " . $temperaturas[$i];
            echo "<br>";
          
        }

     //   var_dump($temperaturas)

    ?>
</body>
</html>