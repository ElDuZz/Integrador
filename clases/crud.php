<?php

    require_once 'conexion.php';

    class Crud extends Conexion{

        public function obtenerDocumento($id){
            try {
                $conexion = Conexion::conectar();           //podria jalar tmb el parent::
                $coleccion = $conexion -> users;
                $datos = $coleccion-> findOne(
                                            array(
                                                '_id'=> new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $datos;
            } catch (\Throwable $th) {
                return $th-> getMessage();
            }
        }

        public function actualizar($id,$datos){
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
    }
?>