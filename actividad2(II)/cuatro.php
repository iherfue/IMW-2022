<html>
    <head></head>

<body>

    <?php

        $dados = rand(2,10);
        $sumaTotal = 0;

        echo "<h1>HAN SALIDO " . $dados . " DADOS </h1><br>";
        
        for($x= 1; $x <=$dados;$x++){ //realiza cada tirada por la cantidad de dados que han salido

            $tirada = rand(1,6);
             
            switch($tirada){

                case 1:
                   echo "<img src='1.svg' width='15%'>";
                break;

                case 2:
                   echo "<img src='2.svg' width='15%'>";
                break;

                case 3:
                   echo "<img src='3.svg' width='15%'>";
                 break;

                case 4:
                   echo "<img src='4.svg' width='15%'>";
                break;

                case 5:
                    echo "<img src='5.svg' width='15%'>";
                break;

                case 6:
                    echo "<img src='6.svg' width='15%'>";
                 break;
            }

            $sumaTotal += $tirada;
        }

        echo "<h1 style='color:blue'> LA SUMA TOTAL DE LOS DADOS ES: " . $sumaTotal . "</h1>";
    ?>

</body>
</html>