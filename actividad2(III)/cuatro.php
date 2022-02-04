<html>
    <head></head>

<body>

    <?php
    
    $edad = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");


    echo "<p>Ordenado de forma ascendente por valor";
    echo "<br>";

        asort($edad);

        foreach($edad as $x=>$x_valor){

            echo "clave= " . $x . " valor = " . $x_valor;
            echo "<br>"; 
        }

        echo "<p>Ordenado de forma ascendente por clave";
        echo "<br>";
        ksort($edad);

        foreach($edad as $x=>$x_valor){

            echo "clave= " . $x . " valor = " . $x_valor;
            echo "<br>"; 
        }


        echo "<p>Ordenado de forma descendente por valor";
        echo "<br>";
        arsort($edad);

        foreach($edad as $x=>$x_valor){

            echo "clave= " . $x . " valor = " . $x_valor;
            echo "<br>"; 
        }


        echo "<p>Ordenado de forma descendente por clave";
        echo "<br>";
        krsort($edad);

        foreach($edad as $x=>$x_valor){

            echo "clave= " . $x . " valor = " . $x_valor;
            echo "<br>"; 
        }
    ?>
</body>
</html>