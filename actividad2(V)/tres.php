<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<body><br><br>
<div class="container">
     <div class="row">
            <div class="col">
            <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
                <h2>Agenda</h2>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha*</label>
                        <input type="date" id="dia" name="fecha" class="form-control" required></input>
                </div>
                <div class="mb-3">
                    <label for="eventos" class="form-label">Eventos</label>
                        <input type="text" name="evento1" class="form-control"></input>
                        <input type="time" name="hora1" class="form-control"></input>
                </div>
                <div class="mb-3">
                    <label for="eventos" class="form-label">Cursos</label>
                        <select name="cursos" class="form-control">
                            <option value="INGLES">INGLES</option>
                            <option value="ALEMAN">ALEMAN</option>
                            <option value="FRANCES">FRANCES</option>
                        </select>
                        Hora del curso
                        <input type="time" name="horaCurso" class="form-control"></input>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="GIMNASIO" checked>
                    <label class="form-check-label" for="habitos">Gimnasio</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="PISCINA">
                    <label class="form-check-label" for="habitos">Piscina</label>
                </div>
                <br>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="recordatorio"></textarea>
                    <label for="floatingTextarea">Recuerdáme que...</label>
                </div><br>
                <input type="submit" class="btn btn-primary" value="enviar" name="envia">    
            </form>
        </div>
    <div class="col">
        <div class="p-5 mb-4 bg-light rounded-3">
        <?php
            if(isset($_POST['fecha'])) $fecha = $_POST['fecha'];
            if(isset($_POST['evento1'])) $evento1 = $_POST['evento1'];
            if(isset($_POST['hora1'])) $hora1 = $_POST['hora1'];
            if(isset($_POST['cursos'])) $cursos = $_POST['cursos'];
            if(isset($_POST['horaCurso'])) $horaCurso = $_POST['horaCurso'];
            if(isset($_POST['habito'])) $habito = $_POST['habito'];
            if(isset($_POST['recordatorio'])) $recordatorio = $_POST['recordatorio'];


            if(isset($_POST['envia'])){

                $formatoFecha = date("d/m/Y", strtotime($fecha));
                echo "<h3>Agenda del día: '$formatoFecha'</h3>";
                echo "<br>";

                echo"<h4>Eventos programados:</h4>";
                echo" <div>
                    <ul>
                        <li>$evento1 a las $hora1</li>
                        <li>Tienes curso de $cursos a las $horaCurso</li>
                        <li>Tienes $habito</li>
                    </ul>
                    </div>
                ";

                echo "<h4>Me dijiste que te recordara que:</h4> <p>$recordatorio</p>";
                
            }
        ?>  
            </div>
        </div>
    </div><!--fin del row-->
</div><!-- fin del container-->
</body>
</html>