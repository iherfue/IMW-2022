<html>
    <head></head>
<body>

    <?php
    
        $mes = date("n");
        
        switch($mes){
            case 1:
                echo "<h1> ESTAMOS EN ENERO</h1>";
                break;
            case 2:
                echo "<h1> ESTAMOS EN FEBRERO</h1>";
                break;
            
            case 3:
                echo "<h1> ESTAMOS EN MARZO</h1>";
                break;
            
            case 4:
                echo "<h1>ESTAMOS EN ABRIL</h1>";
                break;
            case 5:
                echo "<h1>ESTAMOS EN MAYO</h1>";           
                break;
            case 6:
                echo "<h1>ESTAMOS JUNIO</h1>";
                break;
            case 7:
                echo "<h1>ESTAMOS EN JULIO</h1>";
                break;
            case 8:
                echo "<h1>ESTAMOS EN AGOSTO</h1>";
                break;
            case 9:
                echo "<h1>ESTAMOS EN SEPTIEMBRE</h1>";     
                break;
            case 10:
                "<h1>ESTAMOS EN OCTUBRE</h1>";
                break;
            case 11:
                "<h1>ESTAMOS EN NOVIEMBRE</h1>";
                break;
            case 12:
                "<h1>ESTAMOS EN DICIEMBRE</h1>";
                break;
        }
    ?>

</body>

</html>