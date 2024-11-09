<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrearCuenta</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form action="registrarse.php" method="post">
        <?php
        if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'] ?></p>
        <?php } ?>

            <br>
            <?php
            if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success'] ?></p>
            <?php } ?>

            <br>
            <label for="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="usuario">

            <label for="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese Contraseña" name="password">

            <input type="submit" value="registrarse">
            <a href="index.php">Ingresar</a>
</body>

</html>

