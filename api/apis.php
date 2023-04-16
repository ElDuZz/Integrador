<?php   
//variables para usar la api slim
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

//se inicia la api
$app = new \Slim\App();

/*
------------------------
Cambiar el id por la sesion del usuario que haga login
------------------------
*/
$app->post('/enviar-datos', function (Request $request, Response $response) {
    session_start();
    //include '../clases\conexion.php';
    include 'modify.php';
    include 'curl.php';
    //se obtiene el dato cuando se modifica la temperatura deseada
    $data= $request->getParsedBody();
    //se asigna a una variable
    $tempDeseada= $data['tempDeseada'];
    $id = $_POST['id'];       //id del registro--------
    //se crea un objeto para la clase modify
    $modify = new Modify();
    // Datos a enviar mediante POST en un arreglo
    $datos = array(
        'tempDeseada' => $tempDeseada
    );
    //manda los datos a una funcion de la clase
    $response = $modify -> updateTemp($id, $datos);
    //si fue correcto el procedimiento y se inserto entra a las condiciones
    if ($response -> getModifiedCount() > 0 || $response -> getMatchedCount() > 0) {
        //crea objeto en clase curl para enviarlo al esp32
        $curl = new Curl();
        $send = $curl -> sendEspData($datos);
        header("Location: ../../dispositivos.php");
        exit();
    } else {
        echo "Error";
    }
    
});
$app->post('/obtener-datos', function (Request $request, Response $response) {
    include 'clases/conexion.php';
    include 'modify.php';

    //se obtiene el dato que manda el esp32 mediante su solicitud
    $data= $request->getParsedBody();
    //se asignan los datos a variables
    $tempInt= $data['tempInt'];
    $tempExt= $data['tempExt'];
    $tempDeseada= $data['tempDeseada'];
    $mono= $data['mono'];

    $id = '641f603adb775557a20bb580';         //object-id del registro--------

    //se crea un objeto para la clase modify
    $modify = new Modify();

    // Datos a enviar mediante POST
    $datos = array(
        'tempInt' => $tempInt,
        'tempExt' => $tempExt,
        'tempDeseada' => $tempDeseada,
        'mono' => $mono
    );

    //manda los datos a una funcion de la clase
    $request = $modify -> updateData($id, $datos);
    //si el procedimiento fue correcto y se modificaron datos en DB entran a condiciones
    if ($request -> getModifiedCount() > 0 || $request -> getMatchedCount() > 0) {
        $reponse = "se han modificado los datos";
    } else {
        $response = print_r($request);
    }
    return $response;
});
//ejecutar la API
$app->run();
