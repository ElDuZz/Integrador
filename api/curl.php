<?php

class CURL
{
    public function sendEspData($request)
    {
        //se usa la direccion del esp32 para modificar temperatura
        $url = "http://192.168.100.7/modificar";        //ip del esp32
        //proceso curl
        $ch = curl_init($url);
        //mandarlo en forma de post
        curl_setopt($ch, CURLOPT_POST, true);
        //mandar los datos
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
    }

}
