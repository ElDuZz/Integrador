
<?php

include 'conexion.php';
include 'users.php';

$user = new Users();

$data = array(
    "username" => "lmao12345678",
    "mail" => "maao",
    "password" => "si",
);

$conexion = new Conexion();

$conectacion = $conexion->conectar();
    $coleccion = $conectacion -> users;
    $respuesta = $coleccion -> insertOne($data);

    if ($respuesta -> getInsertedId() > '0') {
        echo "subio";
    }else{
        echo "no subio";
    }
?>
