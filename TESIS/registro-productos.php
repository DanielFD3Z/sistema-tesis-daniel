<?php


if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["nombre"]) && !empty($_POST["cantidad"]) && !empty($_POST["precio"]) && !empty($_POST["fecha"])) {
        
        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];

        
        $sql = $conexion->query("INSERT INTO productos (Producto, Cantidad, Precio, FechadeEntrada) VALUES ('$nombre', '$cantidad', '$precio', '$fecha')");
        
        if ($sql == 1) {
            echo '<div class="alert alert-success">Producto registrado correctamente</div>'; 
        } else {
            echo '<div class="alert alert-danger">Error al registrar el producto</div>'; 
        }
       
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>'; 
    }
}
?>
