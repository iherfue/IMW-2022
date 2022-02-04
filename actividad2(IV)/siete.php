<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function saluda($nombre,$edad,$color){

          echo "HOLA $nombre TIENES $edad AÑOS, TU COLOR PREFERIDO ES EL $color ";
        }
    ?>

    <form action="siete.php" method="POST">
        Nombre <input type="text" name="nombre">
        Edad <input type="text" name="edad">
        Color <input type="text" name="color">

        <input type="submit" value="enviar" name="envia">
    </form>

    <?php
    
        if(isset($_POST['envia'])){

            saluda($_POST['nombre'],$_POST['edad'],$_POST['color']);
        }
    ?>
</body>
</html>