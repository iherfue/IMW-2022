<html>
    <head></head>

<body>
    <h3>Introduzca un número para encontrarlo de manera aleatoria</h3>
    <form  action="siete.php" method="POST">
        <input type="number" name="numero" max="5000">
        <input type="submit" name="enviar">
    </form>
    <?php 

        $estado = false;
        $numero = 0;
        $vueltas = 0;

        if(isset($_POST["numero"])){ //si envia valor ejecuta bucle

        while(!$estado){ //ejecuta el while mientras no sea FALSE

            $numero = rand(0,$_POST["numero"]);
                
                $vueltas++;
            if($numero == $_POST["numero"]){

                $estado = true;
                echo "<h2>Salio el  ".  $numero . " número especificado. Se dio un total de " . $vueltas . " vueltas hasta encontrarlo.</h2>";
            }

            
   //         echo $numero . "<br>";
           
           
        }
    }
    ?>

</body>
</html>