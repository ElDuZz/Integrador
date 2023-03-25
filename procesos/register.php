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
$mail = test_input($_POST ['mail']);
$password = test_input($_POST ['password']);
$password2 = test_input($_POST ['passwordConfirm']);

if(empty($username)){
    header("Location: ../register.php?error=UserName is Required");
}else if(empty($mail)){
    header("Location: ../register.php?error=Mail is Required");
}else if(empty($password)){
    header("Location: ../register.php?error=password is Required");
}else if($password != $password2){
    header("Location: ../register.php?error=Passwords do not match");
}else{
    $user = new Users();
    $password = md5($password);
    $data = array(
        "username" => $username,
        "mail" => $mail,
        "password" => $password,
    );
    $request= $user -> register($data);
    if($request == 0){
        header("Location: ../register.php?error=This email has already been registered");
    }
    if ($request -> getInsertedId() > '0') {
        header("Location: ../register.php?registered=Registired Log In");
    }else{
        header("Location: ../register.php?error=An error has ocurred");
    }
}



?>