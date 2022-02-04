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

         function inicializar_array($numero_de_elementos,$min,$max){

            $array = [];
            

            for($i = 0; $i <$numero_de_elementos; $i++){

                $array[$i] = rand($min,$max);
               
            }

            return $array;

        }


       var_dump(inicializar_array(10,4,8));
    
    ?>
</body>
</html>