<html>
    <head></head>

<body>

    <?php 
    
        $dado1 = rand(1,6);
        $dado2 = rand(1,6);

        
        echo "<img src = $dado1.svg >";
        echo "<img src = $dado2.svg >";
        
        if($dado1 > $dado2){

            echo '<h2>El PRIMER dado es mayor</h2>';
            echo '<h2>El SEGUNDO dado es menor</h2>';

        }else if($dado2 > $dado1){

            echo '<h2>El SEGUNDO dado es mayor</h2>';
            echo '<h2>El PRIMER dado es menor</h2>';
            
        }else{
            echo '<h2>LOS DADOS SON IGUALES</h2>';
        }
    
    ?>

</body>
</html>