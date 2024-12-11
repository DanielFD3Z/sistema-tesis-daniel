<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="style_login.css">
    <style>
        body {
            background-color: #5F9EA0;
        }
    </style>
</head>
<body>
    <form action="validar.php" method="post">
    <h1>Inicia sesión</h1>
    <p>Usuario <input type="text" placeholder="Ingrese su usuario" name="usuario"> </p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"> </p>
    <input type="submit" value="Ingresar">
    </form>
</body>
</html>