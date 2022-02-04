<?php
    include('funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Probando las funciones</p>


    <?php
    

         $numero = rand(1,10);
        echo "TABLA DE MULTIPLICAR DEL " . $numero;
        echo "<br>";
        multiplica($numero);

        echo "<h4>ejercicio 2</h4>";
        tablas(4,8);

        echo "<h4>ejercicio 3</h4>";

        var_dump(inicializar_array(7,2,8));

        echo "<h4>ejercicio 4</h4>";
        echo calcular_media([10,4,2]);

        echo "<h4>ejercicio 5</h4>";

        imprimir_array([1,2,3,4,6,7,8]);
    ?>
</body>
</html>
