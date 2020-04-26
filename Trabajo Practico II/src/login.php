<?php

// 2- POST login: recibe email y clave y chequea que existan, si es 
// así retorna un JWT de lo contrario informa el error 
// (si el email o la clave están equivocados) .

use  App\Models\AutentificadorJWT;
include_once "archivos.php";
include_once "./autenticadoJWT.php";




if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if  (isset($_POST['email']) == true && isset($_POST['clave']) == true)
    {
        $emailLogeado = $_POST['email'];
        $claveLogeado = $_POST['clave'];

        $listadoUsuarios = Archivos::LeeJson("datos.json");
        $flag = false;
        foreach($listadoUsuarios as $usuario){

            if($emailLogeado == $usuario->email && $claveLogeado == $usuario->clave )
            {
                //Este es el chabon
                //echo json_encode($usuario);
                echo json_encode( AutentificadorJWT::CrearToken($usuario));
                $flag = true;
            }
            
        }
        if( $flag == false){
            echo "No se encontro registrado al usuario $emailLogeado";
        }
    }
    else{
        echo "Ingrese la key email y la key clave con sus respectivos valores en el body";
    }
}
else{
    echo "Debe ser un post";
}
