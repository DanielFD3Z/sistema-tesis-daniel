<?php

include('conexion_bd.php');

$USUARIO = mysqli_real_escape_string($conexion, $_POST['usuario']);
$PASSWORD = mysqli_real_escape_string($conexion, $_POST['password']);


$consulta = "SELECT * FROM Personal WHERE usuario = '$USUARIO' AND contraseña = '$PASSWORD'";
$resultado = mysqli_query($conexion, $consulta);


if ($resultado === false) {
    
    echo "Error en la consulta: " . mysqli_error($conexion);
} else {
    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        header("Location: inicio.php");
        exit; 
    } else {
        include("login.php");
        ?>
        <h1>Error en Autenticación</h1>
        <?php
    }
    
    
    mysqli_free_result($resultado);
}


mysqli_close($conexion);
?>

   






