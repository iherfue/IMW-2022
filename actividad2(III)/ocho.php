<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ocho.php" method="POST">
        Nombre <input type="text" name="nombre">
        Edad <input type="text" name="edad">
        Localidad <input type="text" name="localidad">

        <input type="submit" value="enviar" name="envia">
    </form>
    

    <?php  
    
        if(isset($_POST['envia'])){

            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $localidad = $_POST['localidad'];

            $datos = ["nombre" => $nombre, "edad" => $edad, "localidad" => $localidad];

            foreach($datos as $c=>$v){
                
                echo "Tu " . $c . " es ". $v; 
                echo "<br>";
            }

            var_dump($datos);
        }
    ?>
</body>
</html>