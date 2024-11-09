<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form action="validar.php" method="post">
        <img src="img/logo.png" height="190" />
        <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
        <p>Contaseña <input type="password" placeholder="ingrese su contaseña" name="password"></p>
        <input type="submit" value="Ingresar">
        <a href="CrearCuenta.php">Crear Cuenta</a>
    </form>
    <?php
    include("registrar.php")
        ?>
</body>

</html>