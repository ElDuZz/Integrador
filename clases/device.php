<?php
include '../api/curl.php';
class Link{
    public function Linkear(){
        try {
            $data = array(
                'solicitud' => "conectar"
            );
            $curl = new Curl();
            $enlazar = $curl -> EnlazarEsp($data);
            if($enlazar == "Mensaje recibido."){
                $response = 1;
            }else{
                $response = 0;
            }
            return $response;
        } catch (\Throwable $th) {
            return $th-> getMessage();
        }
    }
}

?>