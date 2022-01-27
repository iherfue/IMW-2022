<html>
    <head></head>

    <style type="text/css">

        th{

            background-color: #0093FF;
            
        }

        td{
            background-color:#66B0EA;
        }

    </style>
<body>
    
<table border="10px" style="width:50%; text-align:center;">
<th>JUGADAS DEL JUGADOR 1</th>
<th>JUGADAS DEL JUGADOR 2</th>
    <?php 

        $puntosJ1 = 0;
        $puntosJ2 = 0;
        $j1 = '';
        $j2 = '';

        

        $opciones = array("PIEDRA","PAPEL","TIJERA");

       // echo $jugador1;
        //echo $jugador2;

    echo "<h2>PUNTOS</h2>";
    while($puntosJ1 <2 && $puntosJ2 <2){

            
            shuffle($opciones); //desordena el array y elige de manera aleatoria la posicion actual del array
            
               $j1 = $opciones[rand(0,2)];

            shuffle($opciones);

               $j2 = $opciones[rand(0,2)];
            
            echo "<tr>";
            switch($j1){   //POSIBLES TIRADAS DEL JUGADOR 1

                case "PIEDRA":
                    echo "<td>JUGADOR 1 HA TIRADO <br><img src='rock.png' width='20%'></td>";
                    break;

                case "PAPEL":
                    echo " <td>JUGADOR 1 HA TIRADO <br><img src='paper.png' width='20%'></td>";
                    break;
                
                case "TIJERA":
                    echo "<td> JUGADOR 1 HA TIRADO <br> <img src='scissors.png' width='20%'></td>";
                    break;
            }
            

            switch($j2){   //POSIBLES TIRADAS DEL JUGADOR2

                case "PIEDRA":
                    echo " <td>JUGADOR 2 HA TIRADO <br><img src='rock.png' width='20%'></td>";
                    break;

                case "PAPEL":
                    echo " <td>JUGADOR 2 HA TIRADO <br> <img src='paper.png' width='20%'></td>";
                    break;
                
                case "TIJERA":
                    echo "<td> JUGADOR 2 HA TIRADO <br> <img src='scissors.png' width='20%'></td>";
                    break;
            }

        echo "</tr>";

        //POSIBILIDADES DE AMBOS JUGADORES

            if($j1 == "PAPEL" && $j2 == "PIEDRA" || $j1 == "TIJERA" && $j2 == "PAPEL" || $j1 == "PIEDRA" && $j2 == "TIJERA"){

                echo "EL JUGADOR 1 GANA 1 PUNTO" . "<br>";
                $puntosJ1++;
                //echo $puntosJ1;

            }

            if($j2 == "PAPEL" && $j1 == "PIEDRA" || $j2 == "TIJERA" && $j1 == "PAPEL" || $j2 == "PIEDRA" && $j1 == "TIJERA"){

                echo "EL JUGADOR 2 GANA 1 PUNTO" . "<br>";
                $puntosJ2++;
               // echo $puntosJ2;

            }

            if($puntosJ1 == 2){

                echo "<h3 style='color:blue'>HA GANADO EL JUGADOR 1 </h3>";
            }else if($puntosJ2 == 2){

                echo "<h3 style='color:blue'>HA GANADO EL JUGADOR 2 </h3>";
            }

        }
            
        
            
    ?>
</table>
</body>
</html>

