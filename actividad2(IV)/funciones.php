<?php

function multiplica($numero){

    for($i=1; $i<=10;$i++){

        echo $i . " x " . " = " . $i * $numero;
        echo "<br>";
    }
}



function tablas($inicio,$fin){

    for($i = $inicio; $i<= $fin; $i++){

        multiplica($i);
    }
    
}

function inicializar_array($numero_de_elementos,$min,$max){

    $array = [];
    

    for($i = 0; $i <$numero_de_elementos; $i++){

        $array[$i] = rand($min,$max);
       
    }

    return $array;

}

function calcular_media($array){

    $suma = 0;
    $cuenta = count($array);
    $media = 0;

    for($i= 0; $i<$cuenta; $i++){

        echo $array[$i];

        $suma +=  $array[$i];
    }

    $media = $suma / $cuenta;

    return "<br>" . $media;
}


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

?>