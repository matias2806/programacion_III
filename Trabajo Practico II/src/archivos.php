<?php

//Quiero un metodo q guarde un user en un archivo JSON


class Archivos{


    public static function guardarJSON($archivo, $objeto)
    {
        // LEEMOS
        $file = fopen($archivo, 'r');
        $arrayString = fread($file, filesize($archivo));
        $arrayJSON = json_decode($arrayString);
        fclose($file);
        array_push($arrayJSON, $objeto);
        
        // ESCRIBIMOS
        $file = fopen($archivo, 'w');
        $rta = fwrite($file, json_encode($arrayJSON));
        fclose($file);

        return $rta;
    }


    public static function LeeJson($archivo){
        // LEEMOS
        $file = fopen($archivo, 'r');
        $arrayString = fread($file, filesize($archivo));
        $arrayJSON = json_decode($arrayString);

        fclose($file);
        
        return  $arrayJSON;
    }

}



?>