<html>
    <head></head>

<body>

    <?php

        $nota = rand(0,10);
    echo $nota;

        if($nota >= 0 && $nota <= 4){

            echo '<p> Tienes un Insuficiente: ' . $nota . '</p>'; 

        } else if($nota == 5){

            echo '<p> Tienes un Suficiente: ' . $nota . '</p>'; 

        }else if($nota == 6){

            echo '<p> Tienes un Bien: ' . $nota . '</p>'; 

        }else if($nota == 7 || $nota == 8){

            echo '<p> Tienes un Notable: ' . $nota . '</p>'; 

        }else if($nota == 9 || $nota == 10){

            echo '<p> Tienes un Sobresaliente: ' . $nota . '</p>'; 

        }

    ?>

</body>    

</html>