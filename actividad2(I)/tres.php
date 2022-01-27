<html>
    <head></head>

<body>
    <?php

        $diaSemana = rand(1,7);
         ?>
        <br/>
<?php
        switch($diaSemana){

            case 1:
                echo "<h1>LUNES</h1>";
                break;
            case 2:
                echo "<h1>MARTES</h1>";
                break;
            case 3:
                echo "<h1>MIERCOLES</h1>";
                break;
            case 4:
                echo "<h1>JUEVES</h1>";
                break;
            case 5:
                echo "<h1>VIERNES</h1>";
                break;
            case 6:
                echo "<h1>SABADO</h1>";
                break;
            case 7:
                echo "<h1>DOMINGO</h1>";
                break;
        }
    ?>
</body>    
</html>