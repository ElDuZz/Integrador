<?php

session_start();
include '../clases/conexion.php';
include '../clases/users.php';


$user = new Users();
$data = $user -> logOut();
header("Location: ../index.php");
