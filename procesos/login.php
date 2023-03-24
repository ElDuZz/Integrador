
<?php

session_start();
include '../clases/conexion.php';
include '../clases/users.php';


if (!isset($_SESSION['mail']) && !isset($_SESSION['_id'])) {
    $user = new Users();

    if (isset($_POST ['mail']) && isset($_POST ['password'])) {
        function test_input($datos)
        {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            return $datos;
        }

        $email = test_input($_POST ['mail']);
        $password = test_input($_POST ['password']);


        if (empty($email)) {
            header("Location: ../login.php?error=Email requerido");
        } elseif (empty($password)) {
            header("Location: ../login.php?error=Contraseña requerida");
        } else {
            $password = md5($password);
            $respuesta = $user-> comprobarUsuario($email, $password);
            if ($respuesta) {
                $_SESSION['mail'] = $email;
                header("Location: ../index.php");
            } else {
                header("Location: ../login.php?error=Usuario no encontrado");
            }
        }
    } else {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../index.php");
}
?>
