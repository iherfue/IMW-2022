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

        
        var_dump($temperaturas);

        $tempMaximo = -5;
        $tempMinima = 50;

        /*VALOR MEDIO*/

            $total = count($temperaturas);

            echo " recuento total es ". $total;
            echo "<br>";

            $suma = 0;

            for($x = 0; $x<$total;$x++){

            //    echo $temperaturas[$x];
                $suma += $temperaturas[$x];


                if($tempMaximo < $temperaturas[$x]){

                    $tempMaximo = $temperaturas[$x];

                } else if($tempMinima > $temperaturas[$x]){

                     $tempMinima = $temperaturas[$x];
                }
            }


            echo "la suma total es " .  $suma;
            echo "<br>";

            echo "LA MEDIA DE TEMPERATURA ES " . $suma / $total;

        /* VALOR MINIMO y MAXIMO*/
        echo "<br>";
        echo "LA TEMPERATURA MAXIMA ES " . $tempMaximo;

        echo "<br>";
        echo "LA TEMPERATURA MINIMA ES " . $tempMinima;
    ?>
</body>
</html>