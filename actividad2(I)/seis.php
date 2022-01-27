<html>
    <head></head>

<body>

    <?php 



        echo "<form action='' method='POST'>";
            echo "Numero 1 <input type='text' name='n1'> <br>";
            echo "Numero 2 <input type='text' name='n2'>";
            echo "<input type='submit' name='envia' value'enviar'>";
       echo "</form>";

        if(isset($_POST['envia'])){
            
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            if($n1 > $n2){

                echo $n1 . " es mayor de " . $n2;
            }else if($n2 > $n1){

            echo $n2 . " es mayor de " . $n1;
            }
            
        }else{
            echo "No has introducido un número, por favor introduce dos números";
        }

        
    ?>    

</body>
</html>