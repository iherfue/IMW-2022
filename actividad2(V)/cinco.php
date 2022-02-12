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
<body>
    <?php
    
        $monedas = ["DOLAR","EURO","YEN","LIBRA","FRANCO"];

    ?>
    <div class="container">
        <h2>Lanzar monedas</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
        Monedas <select name="nmonedas">
                <?php
                    for($i=1;$i<=20;$i++){

                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>

        Tipo <select name="tipoMoneda">
            <?php     
                for($i=0;$i<count($monedas);$i++){

                echo "<option value='$monedas[$i]'>$monedas[$i]</option>";
                }
            ?>
            </select>

            <input type="submit" value="Lanzar" name="envia" class="btn btn-success">
        </form>

        <?php 
        
        if(isset($_POST['nmonedas'])) $nmonedas = $_POST['nmonedas'];
        if(isset($_POST['tipoMoneda'])) $tipoMoneda = $_POST['tipoMoneda'];

            if(isset($_POST['envia'])){

                echo "Elegiste la moneda $tipoMoneda <br>";
                echo "Lanzaste $nmonedas modenas <br>";

                for($i=1;$i<=$nmonedas;$i++){

                    $valorMoneda = rand(0,1);

                    if($tipoMoneda == "DOLAR" && $valorMoneda == 0){
                        
                        echo "<img src='dolar_cara.jpg'>";

                    }else if($tipoMoneda == "DOLAR" && $valorMoneda == 1){

                        echo "<img src='dolar_cruz.jpg'>";
                    }
                    
                    if($tipoMoneda == "EURO" && $valorMoneda == 0){
                        
                        echo "<img src='cara_euro.jpg' width='100px'>";

                    }else if($tipoMoneda == "EURO" && $valorMoneda == 1){

                        echo "<img src='cruz_euro.jpg' width='100px'>";
                    }

                    if($tipoMoneda == "YEN" && $valorMoneda == 0){
                        
                        echo "<img src='cara_yen.png' width='100px'>";

                    }else if($tipoMoneda == "YEN" && $valorMoneda == 1){

                        echo "<img src='cruz_yen.png' width='100px'>";
                    }

                    if($tipoMoneda == "LIBRA" && $valorMoneda == 0){
                        
                        echo "<img src='cara_libra.jpg' width='100px'>";

                    }else if($tipoMoneda == "LIBRA" && $valorMoneda == 1){

                        echo "<img src='cruz_libra.jpg' width='100px'>";
                    }

                    if($tipoMoneda == "FRANCO" && $valorMoneda == 0){
                        
                        echo "<img src='cara_franco.jpg' width='100px'>";

                    }else if($tipoMoneda == "FRANCO" && $valorMoneda == 1){

                        echo "<img src='cruz_franco.jpg' width='100px'>";
                    }
                    
                }
            }
        
        ?>
    </div>
</body>
</html>