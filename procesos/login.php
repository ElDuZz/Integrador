<?php

session_start();
include '../clases/conexion.php';
include '../clases/users.php';

if (!isset($_SESSION['email']) && !isset($_SESSION['user_id'])) {
    $user = new Users();

    if (isset($_POST ['email']) && isset($_POST ['password'])) {
        function test_input($datos)
        {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            return $datos;
        }

        $email = test_input($_POST ['email']);
        $password = test_input($_POST ['password']);


        if (empty($email)) {
            header("Location: ../login.php?error=Email is Required");
        } elseif (empty($password)) {
            header("Location: ../login.php?error=Password is Required");
        } else {
            $password = md5($password);
            $respuesta = $user-> comprobarUsuario($email, $password);
            if ($respuesta) {
                $_SESSION['email'] = $email;
                header("Location: ../index.php");
            } else {
                header("Location: ../login.php?error=User not Found");
            }
        }
    } else {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../index.php");
}
?>
