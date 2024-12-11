<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Registro de entregas</h1> 
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Entregas</h3>
            <?php
            include "conexion_bd-entrega.php";
            include "registro-entregas.php";
            ?>

                <div class="mb-3">
                    <label for="producto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" name="producto">
                </div>
                <div class="mb-3">
                    <label for="persona" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="persona">
                </div>
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" name="ubicación">
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio">
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                </div>

            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar Entrega</button>
    </form>  
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Nombre de la persona</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead> 
  <tbody>
  <?php
include "conexion_bd-entrega.php";
$sql=$conexion->query("SELECT * FROM entregass ");
while($datos=$sql->fetch_object()){ ?>
<tr>
      <td><?=$datos->ID ?></td>
      <td><?=$datos->{'Nombre del producto'} ?></td>
      <td><?=$datos->{'Nombre de la persona'} ?></td>
      <td><?=$datos->{'Ubicación'} ?></td>
      <td><?=$datos->Cantidad ?></td>
      <td><?=$datos->Precio ?></td>
      <td><?=$datos->Fecha ?></td>
    </tr>
<?php }
  ?>
    
  </tbody>
</table>    
    </div>
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>