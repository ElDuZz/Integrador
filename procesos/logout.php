<?php

session_start();
include '../clases/conexion.php';
include '../clases/users.php';


$user = new Users();
$data = $user -> logOut();
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

