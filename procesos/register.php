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

if(empty($username)){
    header("Location: ../sign.php?error=Usuario requerido");
}else if(empty($email)){
    header("Location: ../sign.php?error=Email requerido");
}else if(empty($password)){
    header("Location: ../sign.php?error=Contraseña requerida");
}else if($password != $password2){
    header("Location: ../sign.php?error=Las contraseñas no coinciden");
}else{
    
    $user = new Users();
    $password = md5($password);
    $data = array(
        "username" => $username,
        "mail" => $email,
        "password" => $password,
    );
    $request= $user -> register($data);
    if($request == 0){
        header("Location: ../sign.php?error=This email has already been registered");
    }
    if ($request -> getInsertedId() > '0') {
        header("Location: ../sign.php?registered=Registrado");
    }else{
        header("Location: ../sign.php?error=A ocurrido un error");
    }
    
}



?>