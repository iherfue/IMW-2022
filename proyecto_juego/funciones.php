<?php
error_reporting(0);
function menu(){

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <title>Document</title>
    </head>  
    ";
}

function login($password){

 
	$contrasenia = $password;
    $md5 = hash('md5',$contrasenia);

    $hash_real = 'd44b4fc123c8fc7f5a65595bde0107bc'; //hash de la contraseña

    if(($md5 == $hash_real)){ //SI EL ACCESO ES CORRECTO REDIRIGE Y CREA LA SESSION DEL NIVEL DEL JUEGO

        echo "bienvenido";
        $_SESSION["dificultad"] = $_POST['niveles']; ///crea una sesion almacenando la dificultad seleccionada
        header("Location: game.php?name=".urlencode($_POST['usuario']));
	        

    }else{
        echo '<div class="alert alert-danger" role="alert">
        <h2><p style="text-align:center">La contraseña no es correcta</p></h2>
      </div>';
    }
}

function compruebaPuntos($puntosJugador,$puntosMaquina){ //Recibe como parametro los puntos que va obteniendo tanto el jugador como la máquina

    //Muestra la puntuacion del jugador
    echo "<div class='container'>";
    echo "<h5>Puntos del Jugador</h5>";
    echo "<div class='progress' style='height: 20px;'>
    <div class='progress-bar' role='progressbar' style='width: $puntosJugador%' aria-valuenow='$puntosJugador' aria-valuemin='0' aria-valuemax='100'>$puntosJugador</div>
  </div>";

  echo "<br>";
  //MUESTRA PUNTOS MAQUINA
  echo "<h5>Puntos de la Máquina</h5>";
  echo "<div class='progress' style='height: 20px;'>
  <div class='progress-bar bg-success' role='progressbar' style='width: $puntosMaquina%' aria-valuenow='$puntosMaquina' aria-valuemin='0' aria-valuemax='100'>$puntosMaquina</div>
</div>";
    echo "</div><br><br><br><br><br>";
//COMPROBACIONES
    if($puntosJugador >=100 && $puntosMaquina >= 100){    //COMPARA SI EXISTE UN EMPATE O GANA EL JUGADOR, LA MAQUINA,etc....

        echo '<div class="alert alert-warning" role="alert">
           Habeis empatado
            </div>';
            unset($_SESSION["puntosJugador"]);      //en el caso que se empate se vacian las variables de sesion de puntos de ambos jugadores
            unset($_SESSION["puntosMaquina"]);

    }
    
    if($puntosJugador >= 100 && $puntosMaquina <=100){
        echo "<br>";
        echo '<div class="alert alert-success" role="alert">
            Ganaste a la máquina<br><br>
            </div>';
        echo "<br><br>";
        
        unset($_SESSION["puntosJugador"]);    //si gana el jugador se reinician los puntos
        unset($_SESSION["puntosMaquina"]);


    }else if($puntosMaquina >= 100 && $puntosJugador <=100){

        echo '<div class="alert alert-danger" role="alert">
            Perdiste, la máquina te ha ganado 
            </div>';
        
        unset($_SESSION["puntosJugador"]);   //si gana la maquina se reinician los puntos
        unset($_SESSION["puntosMaquina"]);
    }
}


function tiraDados($nDados){   //recibe como parametro el número de dados que selecciona el jugador

    $jugador = [];  //Creamos dos arrays donde almacenaremos los dados
    $maquina = [];
    

    for($i= 1; $i <=$nDados; $i++){         ///asignamos al array del jugador el resultado de cada uno de los dados tirados

        $jugador[$i] = rand(1,6);
        
        $_SESSION["puntosJugador"] += $jugador[$i];   //Se asigna la sesion "PUNTOSJUGADOR" con los puntos del jugador

        $puntosJugador =  $_SESSION["puntosJugador"];
        
    }

    for($i=0; $i<=rand(1,15);$i++){ //La maquina tira sus dados de manera completamente aleatoria y son almacenados en el array

        $maquina[$i] = rand(1,6);

        $_SESSION["puntosMaquina"] += $maquina[$i];
        $puntosMaquina =  $_SESSION["puntosMaquina"];
    }
    
    
    compruebaPuntos($puntosJugador,$puntosMaquina); //comprueba los puntos de cada uno

    return [$jugador,$maquina];  //la funcion devuelve un array con los resultados de los dados de los dos jugadores

}

function pintaDados($resultado){
    
    echo "<br><br><br>";

    echo '<div class="col">';
    
    echo "<h2>La Persona ha tirado</h2>";

    foreach($resultado[0] as $r){   //con un foreach recorremos los arrays con los resultados del jugador 

            switch($r){

                case 1:
                    echo "<img src='1.svg' width='10%'>";
                    break;
                
                case 2:
                    echo "<img src='2.svg' width='10%'>";
                    break;
                
                case 3:
                    echo "<img src='3.svg' width='10%'>";
                    break;
                
                case 4:
                    echo "<img src='4.svg' width='10%'>";
                    break;

                case 5:
                    echo "<img src='5.svg' width='10%'>";
                    break;
                
                case 6:
                    echo "<img src='6.svg' width='10%'>";
                    break;
            }
     }
    
            echo '</div>
            <div class="col">';
            
                echo "<h2>La máquina ha tirado:</h2>";

                foreach($resultado[1] as $r){ //recorre el array de los dados de la maquina

                    echo "<img src='$r.svg' width='10%'>";
                    }

            echo '</div>';
        }//fin de la funcion


?>