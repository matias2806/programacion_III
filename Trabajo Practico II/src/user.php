<?php
include_once "archivos.php";

class User{

    public $email;
    public $clave;
    public $nombre;
    public $apellido ;
    public $telefono ;
    public $tipo;

    public function __construct($email, $clave, $nombre, $apellido, $telefono, $tipo){
        $this->email = $email;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->tipo = $tipo;
    }

    public function VerDatos(){
        echo
        "Mail : ",$this->email , PHP_EOL,
        "Clave : ",$this->clave,  PHP_EOL,
        "Nombre : ",$this->nombre,  PHP_EOL,
        "Apellido : ",$this->apellido,  PHP_EOL,
        "Telefono : ",$this->telefono,  PHP_EOL,
        "Tipo : ",$this->tipo,  PHP_EOL;
    }

    // public function QueTipoDeUserEs(){
    //     return $this->tipo;
    // }

    public function save($nombreArchivo) {
        // return Datos::guardar('datos.txt', $this->toFile());
        return Archivos::guardarJSON($nombreArchivo, $this);
    }

}




?>