<html>
    <head></head>
<body>
    <table border="1px" style="width:50%; text-align:center;">
    <h2>Numeros pares del 10 al 50</h2>
    <?php 

    $x = 10;
    
        do{
            
            if($x % 2 == 0){

                echo "<td>" . $x . "</td>";
            }
            
            $x++;

        } while($x <=50);

    ?>
    </table>
</body>
</html>