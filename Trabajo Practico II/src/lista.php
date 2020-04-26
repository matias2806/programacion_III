<?php
// 4- GET lista: Si el usuario es admin muestra todos los usuarios,
// si es user solo los del tipo user.


use  App\Models\AutentificadorJWT;
include_once "./autenticadoJWT.php";
include_once "archivos.php";


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $headers = apache_request_headers();

    //var_dump($headers['token']);
    if  (isset($headers['token']) == true ){
        
        AutentificadorJWT::VerificarToken($headers['token']);
        
        $tipoUsuario = (AutentificadorJWT::ObtenerData($headers['token'])->tipo);
        //echo $tipoUsuario;

        if($tipoUsuario == "admin"){
            $arrayJSON = Archivos::LeeJson("datos.json");
            echo json_encode($arrayJSON);
        }
        else if($tipoUsuario == "user")
        {
            $arrayJSON = Archivos::LeeJson("datos.json");
            // echo json_encode($arrayJSON);
            $arrayUsuarios = array();
            foreach($arrayJSON as $usuario){
                if($usuario->tipo == "user"){
                    // $usuario->VerDatos();
                    // $usuario->nombre;
                    array_push($arrayUsuarios, $usuario);
                    // echo json_encode($usuario);
                }
            }
            echo json_encode($arrayUsuarios);
        }
        else{
            echo "Tipo de usuario invalido";
        }
    }
    else
    {
        echo "ingrese en el header la key token con el token de un usuario";
    }
}
else{
    echo "Debe ser un GET";
}
