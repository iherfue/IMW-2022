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
<div class="container">
<br>
    <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <h1>Calculadora</h1>
        <input type="number" name="operando1" min="0" value="0">
            <select name="operador1">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

        <input type="number" name="operando2" min="0" value="0">
            <select name="operador2">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

        <input type="text" name="operando3" min="0" value="0">

        <input type="submit" value="Calcular" name="envia" class="btn btn-primary">
    </form>

    <?php
        if(isset($_POST['operando1'])) $operando1 = $_POST['operando1'];
        if(isset($_POST['operando2'])) $operando2 = $_POST['operando2'];
        if(isset($_POST['operando3'])) $operando3 = $_POST['operando3'];

        if(isset($_POST['operador1'])) $operador1 = $_POST['operador1'];
        if(isset($_POST['operador2'])) $operador2 = $_POST['operador2'];

        if(isset($_POST['envia'])){

            if($operador1 == '+' && $operador2 == '-'){

                $r=  $operando1 + $operando2;
                echo "Resultado = " . $r - $operando3;

            }else if($operador1 == '-' && $operador2 == '+'){

                $r=  $operando1 - $operando2;
                echo "Resultado = " . $r + $operando3;
            }

            if($operador1 == '+' && $operador2 == '+' ){

                $r=  $operando1 + $operando2;
                echo "Resultado = " . $r + $operando3;

            }else if($operador1 == '+' && $operando3  == '0'){

                $r=  $operando1 + $operando2;
                echo "Resultado = " .  $r + $operando3;
            }

            if($operador1 == '-' && $operador2 == '-'){

                $r=  $operando1 - $operando2;
                echo "Resultado = " . $r - $operando3;
                
            }


            /****MULTIPLICACIONES */

            if($operador1 == '*' && $operador2 == '*'){

                $r=  $operando1 * $operando2;
                echo "Resultado = " . $r * $operando3;

            }

            ///si multiplica y suma

            if($operador1 == '*' && $operador2 == '+'){

                $r=  $operando1 * $operando2;
                echo "Resultado = " . $operando3 +$r;
                

            }else if($operador1 == '+' && $operador2 == '*'){

                $r=  $operando1 + $operando2;
                echo "Resultado = " . $r * $operando3;

            }


             ///si multiplica y resta

            if($operador1 == '*' && $operador2 == '-' ){

                $r=  $operando1 * $operando2;
                echo "Resultado = " . $r - $operando3;

            }else if($operador1 == '-' && $operador2 == '*'){

                $r=  $operando1 - $operando2;
                
                echo "Resultado = " . $r * $operando3;

            }



            /**DIVISIONES */

            if($operador1 == '/' && $operador2 == '/'){

                $r=  $operando1 / $operando2;
                echo "Resultado = " . $r / $operando3;

            }

            //si divides y sumas

            if($operador1 == '/' && $operador2 == '+'){

                $r=  $operando1 / $operando2;
                echo "Resultado = " . $r + $operando3;

            }else if($operador1 == '+' && $operador2 == '/'){

                $r=  $operando1 + $operando2;
                echo "Resultado = " . $r / $operando3;
            }

            //si divides y restas

            if($operador1 == '/' && $operador2 == '-'){

                $r=  $operando1 / $operando2;
                echo "Resultado = " . $r - $operando3;

            }else if($operador1 == '-' && $operador2 == '/'){

                $r=  $operando1 - $operando2;
                echo "Resultado = " . $r / $operando3;
            }

            //si divides y multiplicas

            if($operador1 == '/' && $operador2 == '*'){

                $r=  $operando1 / $operando2;
                echo "Resultado = " . $r * $operando3;

            }else if($operador1 == '*' && $operador2 == '/'){

                $r=  $operando1 / $operando2;
                echo "Resultado = " . $r * $operando3;
            }
        }

        
    
    ?>
</div>
</body>
</html>