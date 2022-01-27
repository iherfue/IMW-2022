<html>
    <head></head>

<body>
    <?php
    
        $moneda = rand(0,1);

        if($moneda == 0){ 

            echo '<img src="cara.jpg" width="250">';

        }else{

            echo '<img src="cruz.jpg" >';
        }
    ?>
</body>
</html>