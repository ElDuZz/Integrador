
<?php

session_start();
include '../clases/conexion.php';
include '../clases/users.php';

if (!isset($_SESSION['username']) && !isset($_SESSION['_id'])) {
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
        $language = $_POST['language'];


        if (empty($email)) {
            header("Location: ../login.php?error=Email requerido");
        } elseif (empty($password)) {
            header("Location: ../login.php?error=Contraseña requerida");
        } else {
            $password = md5($password);
            $respuesta = $user-> comprobarUsuario($email, $password);
            if ($respuesta) {
                $_SESSION['mail'] = $email;
                switch ($language) {
                    case 'es':
                        header("Location: ../Espanol/index.php");
                        break;
                    case 'en':
                        header("Location: ../Ingles/index.php");   
                        break;
                }
            } else {
                header('Location: '. $_SERVER['HTTP_REFERER'] . '?error=Credenciales Incorrectas');
            }
        }
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
} else {
    header("Location: ../index.php");
}

?>
