<?php
session_start();

include("funciones.php");
menu();

    if(empty($_REQUEST)){
        
        echo "Falta el nombre del parámetro";
        die();
        
    }

    if(isset($_POST['salir'])){
        session_destroy();
        header("Location: index.php");
    }

?>

<body>
<div class="container">
    <br>
    
        <h1>Juego de los dados</h1> 
        <br>
        <?php 

            if($_SESSION["dificultad"] == 0){ ///si la dificultad es facil que es 0 el jugador podra tirar 10 dados

                echo '
                <div class="col-md-3">
                    <form class="form" action="game.php" method="POST">
                    Número de dados<input type="number" class="form-control" min="0" max="8" required name="nDados"><br>
                    <input type="submit" class="btn btn-primary" name="envia" value="Jugar"> </form><br>
                    <form class="form" action="game.php" method="POST">
                        <input type="submit" class="btn btn-danger" value="SALIR" name="salir">
                        </form>
                    ';
                    
                    

                   echo "</div>";
                
            } else if($_SESSION["dificultad"] == 1){
                
                echo '
                    <div class="col-md-3">
                    <form class="form" action="game.php" method="POST">
                    Número de dados<input type="number" class="form-control" min="0" max="3" required name="nDados"><br>
                    <input type="submit" class="btn btn-primary" name="envia" value="Jugar"></form><br>
                    <form class="form" action="game.php" method="POST">
                        <input type="submit" class="btn btn-danger" value="SALIR" name="salir">
                        </form>
                </div> 
                
                ';
            }
        ?>
        
<br>
        <div class="row">
            
            <?php

                $nombre = $_SESSION["nombre_jugador"];        
                    if(isset($_POST['envia'])){

                        if($_SESSION['terminaPartida'] == false){

                            $resultado = tiraDados($_POST['nDados']);
                            
                            pintaDados($resultado);
                        }else{
                            echo "se acabo la partida";
                        }
                    }
                    
                    

                ?>
        
        </div>
</div>
</body>
</html>