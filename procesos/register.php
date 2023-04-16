<?php session_start();
include '../clases/conexion.php';
include '../clases/users.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = test_input($_POST ['username']);
$email = test_input($_POST ['mail']);
$password = test_input($_POST ['password']);
$password2 = test_input($_POST ['password-confirm']);
$language = $_POST['language'];

if(empty($username)){
    switch ($language) {
        case 'es':
            header("Location: ../Espanol/sign.php?error=Usuario Requerido");
            exit;
            break;
        case 'en':
            header("Location: ../Ingles/sign.php?error=Usuario Requerido");
            exit;   
            break;
    }
}else if(empty($email)){
    switch ($language) {
        case 'es':
            header("Location: ../Espanol/sign.php?error=Correo Requerido");
            exit;
            break;
        case 'en':
            header("Location: ../Ingles/sign.php?error=Correo Requerido");
            exit;   
            break;
    }
}else if(empty($password)){
    switch ($language) {
        case 'es':
            header("Location: ../Espanol/sign.php?error=Contraseña Requerida");
            exit;
            break;
        case 'en':
            header("Location: ../Ingles/sign.php?error=Contraseña Requerida");
            exit;   
            break;
    }
}else if($password != $password2){
    switch ($language) {
        case 'es':
            header("Location: ../Espanol/sign.php?error=No coinciden las contraseñas");
            exit;
            break;
        case 'en':
            header("Location: ../Ingles/sign.php?error=No coinciden las contraseñas");
            exit;   
            break;
    }
}else{
    
    $user = new Users();
    $password = md5($password);
    $data = array(
        "username" => $username,
        "mail" => $email,
        "password" => $password,
        "tempInt" => "",
        "tempExt" => "",
        "tempDeseada" => "",
        "mono" => "",
    );
    $request= $user -> register($data);
    if($request == 0){
        switch ($language) {
            case 'es':
                header("Location: ../Espanol/sign.php?error=Este email ya esta registrado");
                exit;
                break;
            case 'en':
                header("Location: ../Ingles/sign.php?error=Este email ya esta registrado");
                exit;   
                break;
        }
    }
    if ($request -> getInsertedId() > 0) {
        sleep(2);
        switch ($language) {
            case 'es':
                header("Location: ../Espanol/login.php?registered=Registrado Exitosamente");
                exit;
                break;
            case 'en':
                header("Location: ../Ingles/login.php?registered=Registrado Exitosamente");
                exit;   
                break;
        }
    }else{
        header('Location:'. $_SERVER['HTTP_REFERER'] . '?error=A ocurrido un error');
        exit;
    }
    
}



?>