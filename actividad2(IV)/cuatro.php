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
    
        function calcular_media($array){

            $suma = 0;
            $cuenta = count($array);
            $media = 0;

            for($i= 0; $i<$cuenta; $i++){

                echo $array[$i];

                $suma +=  $array[$i];
            }

            $media = $suma / $cuenta;

            return "<br>" . $media;
        }

        echo calcular_media([10,4,2]);
    
    ?>
</body>
</html>