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

        function tablas($inicio,$fin){

            for($i = $inicio; $i<= $fin; $i++){

                multiplica($i);
            }
        }
    
        function multiplica($numero){

            for($i=1; $i<=10;$i++){

                echo $i . " x " . $i ." = " . $i * $numero;
                echo "<br>";
            }
        }

        do{

            $inicio = rand(1,10);
            $fin = rand(1,10);  //fin de la tabla que tiene que multiplicar

        }while($inicio > $fin);



        echo tablas($inicio,$fin);
    ?>

</body>
</html>