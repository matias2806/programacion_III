<?php

// 3- GET detalle: Muestra todos los datos del usuario actual.

use  App\Models\AutentificadorJWT;
include_once "./autenticadoJWT.php";

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $headers = apache_request_headers();

    //var_dump($headers['token']);
    if  (isset($headers['token']) == true ){
        
        AutentificadorJWT::VerificarToken($headers['token']);
        //echo json_encode (AutentificadorJWT::ObtenerPayLoad($headers['token']));
        echo json_encode (AutentificadorJWT::ObtenerData($headers['token']));
    }
    else{
        echo "ingrese en el header la key token con el token de un usuario";
    }
}
else{
    echo "Debe ser un GET";
}
