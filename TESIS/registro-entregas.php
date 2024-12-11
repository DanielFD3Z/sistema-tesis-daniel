<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["producto"]) && !empty($_POST["persona"]) && !empty($_POST["ubicación"]) &&
        !empty($_POST["cantidad"]) && !empty($_POST["precio"]) && !empty($_POST["fecha"])) {
        
        $producto = $_POST["producto"];
        $persona = $_POST["persona"];
        $ubicación = $_POST["ubicación"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];

        $sql = $conexion->query("INSERT INTO entregass (`Nombre del producto`, `Nombre de la persona`, `Ubicación`, `Cantidad`, `Precio`, `Fecha`) 
                                 VALUES ('$producto', '$persona', '$ubicación', '$cantidad', '$precio', '$fecha')");

        if ($sql) {
            echo '<div class="alert alert-success">Entrega registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar la entrega</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

?>