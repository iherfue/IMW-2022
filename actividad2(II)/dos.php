<html>
    <head></head>

<body>
    <table  border ="1px">
    <?php

        $tabla = rand(1,10);

        $n = 0;

        echo "TABLA DE MULTIPLICAR DEL " . $tabla . "<br>";

        while($n <=10){
            echo "<tr>";
            echo "<td>" . $tabla . " X " . $n . " = </td>";
            echo "<td>" . $tabla * $n . "</td>"; 
            echo "</tr>";
           
            $n++;
 
        }

    ?>
    </table>
</body>
</html>