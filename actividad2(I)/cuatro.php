<html>
    <head></head>

<body>

    <?php 
        $dado = rand(1,6);

        echo $dado;

        switch($dado){

            case 1:
                echo "<img src='1.svg'>";
                break;
            case 2:
                echo "<img src='2.svg'>";
                break;
            case 3:
                echo "<img src='3.svg'>";
                break;
            case 4:
                echo "<img src='4.svg'>";
                break;
            case 5:
                echo "<img src='5.svg'>";
                break;
            case 6:
                echo "<img src='6.svg'>";
                break;
        }
    ?>

</body>
</html>