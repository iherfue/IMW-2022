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

        function imprimir_array($array){
            echo "<table border='1px' solid black>";
            
            echo "<tr>";
                echo "<th>CLAVE</th>";
                echo "<th>VALOR</th>";
            echo "</tr>";

            foreach($array as $a =>$valor){

                echo "<tr>";
                 echo "<td>$a</td> <td>$valor</td>";
                echo "</tr>";
            }

            
            echo "</table>";
        }

        imprimir_array([1,2,3,4]);
    
    ?>

</body>
</html>