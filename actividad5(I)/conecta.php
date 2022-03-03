<?php

function ConexionBD(){

    $servername = "localhost";
    $username = "root";
    $password = "majada";
    $db = "comercio";

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password,$db);

    // Check connection
    if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
    }
  //  echo "Connected successfully";

  return $conexion;
}

?>