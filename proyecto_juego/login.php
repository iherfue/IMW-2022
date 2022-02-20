<?php 
session_start();
include("funciones.php");
menu();

if(isset($_POST["envia_login"])){

    login($_POST["password"]);
}
?>

<body>

<div id="login">
        <h3 class="text-center text-white pt-5">blanco</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <h3 class="text-center text-info">Inicia Sesión</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-info">Usuario:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dificultad" class="text-info">Seleccione la dificultad del juego:</label><br>
                                <input type="radio" id="dificultad" name="niveles" checked value="0">
                                    <label for="dificultad">Fácil</label>
                                <input type="radio" id="dificultad" name="niveles" value="1">
                                    <label for="dificultad">Difícil</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="envia_login" class="btn btn-info btn-md" value="Iniciar sesión">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<html>