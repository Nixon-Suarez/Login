<?php
include('db.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        function validar($data)
        {
            $data = trim($data); //Validar si esta vacio
            $data = stripslashes($data);
            $data = htmlspecialchars($data); //Validar si existen caracteres especiales 

            return $data;
        }

        $user = validar($_POST['usuario']);
        $clave = validar($_POST['password']);

        $datosUsuario = 'User = ' . $user . ' and Password = ' . $clave;

        if (empty($user)) {
            header("location: registrarse.php?error=usurio es requerido&$datosUsuario");
            exit();
        } elseif (empty($clave)) {
            header("location: registrarse.php?error=La contraseña es requerida&$datosUsuario");
            exit();
        } else {
            // $clave = md5($clave); encriptado esta mal

            $sql = "SELECT * FROM users WHERE User = '$user'";
            $query = $conexion->query($sql);

            if (mysqli_num_rows($query) > 0) {
                header("location: registrarse.php?error=El usuario ya existe!");
                exit();
            } else {
                $sql2 = "INSERT INTO users (User, Password) VALUES ('$user', '$clave')";
                $query2 = $conexion->query($sql2);

                if ($query2) {
                    header("location: registrarse.php?success=Usuario creado");
                    exit();
                } else {
                    header("location: registrarse.php?error=Ocurrio un error");
                    exit();
                }
            }
        }
    } else {
        header('location: registrarse.php');
        exit();
    }
} else {
    header("location: CrearCuenta.php?error=Debe completar el formulario");
    exit();
}
