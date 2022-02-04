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
    
        $dados = rand(2,10);   //rondas 
    
        $jugador1 = [];  //almacena los valores de cada dado del jugador
        $jugador2 = [];

        $puntosJ1 = 0;
        $puntosJ2 = 0;
        $empates = 0;

        for($i = 1; $i <=$dados; $i++){  //rondas

         //   echo $i;

            $jugador1[$i] = rand(1,6);
            $jugador2[$i] = rand(1,6);

           if($jugador1[$i] > $jugador2[$i]){

                $puntosJ1++;

           } else if($jugador1[$i] < $jugador2[$i]){

            $puntosJ2++;

           }else{
                $empates++;
           }

        }

        echo "<h1>JUGADOR 1</h1>";

        for($i = 1 ; $i<=$dados; $i++){

            switch($jugador1[$i]){

                case $jugador1[$i]:
                    echo "<img src ='" .$jugador1[$i]. ".svg' width='10%'>";
                    break;
            }
        }

        echo "<br>";

        echo "<h1>JUGADOR 2</h1>";
        
        for($i = 1 ; $i<=$dados; $i++){

            switch($jugador2[$i]){

                case $jugador2[$i]:
                    echo "<img src ='" .$jugador2[$i]. ".svg' width='10%'>";
                    break;
            }
        }

        echo "<h2>RESULTADO:</h2>";
        
        echo "<p>EL JUGADOR 1 HA GANADO " . $puntosJ1 . " VECES</p>";
        echo "<p>EL JUGADOR 2 HA GANADO  " . $puntosJ2 . " VECES</p>";
        echo "HAN HABIDO " . $empates . " EMPATES ";

        if($puntosJ1 > $puntosJ2){

            echo "<p><b>En conjunto, ha ganado el jugador 1</b></p>";
        }else {

            echo "<p><b>En conjunto, ha ganado el jugador 2</b></p>";
        }


    //    var_dump($jugador1);
      //  var_dump($jugador2);
    ?>

</body>
</html>