<?php

    require_once '../clases/conexion.php';

    class Modify extends Conexion{
        //funcion para modificar los datos obtenidos(Interior/Exterior/Deseada/Monoxido)
        public function updateData($id,$datos){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion -> users;
                $respuesta = $coleccion -> UpdateOne(
                                                ['_id'=> new MongoDB\BSON\ObjectId($id)] ,
                                                ['$set' => $datos]
                                                
                                            );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th-> getMessage();
            }
        }
        //funcion para modificar la temperatura deseada cuando se quiera cambiar
        public function updateTemp($id,$data){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion -> users;
                $respuesta = $coleccion -> UpdateOne(
                                                ['_id'=> new MongoDB\BSON\ObjectId($id)] ,
                                                ['$set' => $data]
                                                
                                            );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th-> getMessage();
            }
        }
    }
?>