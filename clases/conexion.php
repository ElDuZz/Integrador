<?php
    require_once $_SERVER['DOCUMENT_ROOT']."../INTEGRADOR/vendor/autoload.php";
    class Conexion {
        public function conectar(){
            try {
                $baseDatos = "notoDB";
                $cadenaConexion = "mongodb+srv://Noe12:Y8lBPQxR5yFidAPH@micluster.7qlquls.mongodb.net/?retryWrites=true&w=majority";
                $cliente= new MongoDB\Client($cadenaConexion);
                return $cliente -> selectDatabase($baseDatos);
            }catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>