<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f0ffff;
        }
    </style>

  </head>
<body>
    <h1 class="text-center p-3">Inventario</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Productos</h3>
            <?php
             require "conexion_bd-inventario.php";
             require "registro-productos.php";
            ?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Entrada</label>
                <input type="date" class="form-control" name="fecha">
              </div>
           
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
          </form>
          <div class="col-8 p-4">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha de Entrada</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        require "conexion_bd-inventario.php";
                        $sql = $conexion->query("SELECT * FROM productos");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->Producto ?></td>
                                <td><?= $datos->Cantidad ?></td>
                                <td><?= $datos->Precio ?></td>
                                <td><?= $datos->FechadeEntrada ?></td>
                                <td>
                                    
                                </td>
                            </tr>
                        <?php } ?>
                        
                </tbody>
              </table>
          </div>
    </div>
</body>
</html>