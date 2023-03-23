<?php

    require_once 'conexion.php';

    class Users extends Conexion{
        public function comprobarUsuario($email,$password){
            try {
                $query= array(
                    'mail'=> $email, 
                    'password'=> $password
                    );
                $conexion = Conexion::conectar();
                $coleccion = $conexion -> users;
                $respuesta = $coleccion-> findOne($query);
                if(empty($respuesta)){
                    return 0;
                }
                $_SESSION['_id'] = (string) $respuesta['_id'];
                $_SESSION['username'] = (string) $respuesta['username'];
                return 1;

            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        
        public function logOut(){
            try {
                session_unset();
                session_destroy();
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function register($data){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion -> users;
                $email= $data['mail'];
                $query = $coleccion-> findOne(array('mail'=> $email));
                if(!empty($query)){
                    $respuesta = 0;
                    return $respuesta;
                }else{
                    $respuesta = $coleccion -> insertOne($data);
                    return $respuesta;
                }
            } catch (\Throwable $th) {
                return $th-> getMessage();
            }
        }
    }
?>