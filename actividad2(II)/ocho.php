<html>
    <head></head>

<body>

<h2>Realiza un rand de 2 numeros hasta encontrar ambos </h2>
    <?php 

        do {

            $numero1 = rand(0,40);
            $numero2 = rand(0,20);

            echo $numero1;
            echo $numero2;

            if($numero1 == $numero2){

              echo  "<br>" . "<b>HAN SALIDO DOS NUMEROS IGUALES, EL " .$numero1 . " Y " .$numero2 . "</b>";
            }

        }while($numero1 != $numero2);
    ?>

</body>
</html>