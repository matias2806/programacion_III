<?php
namespace PersonaNamespace;
include '../interfaces/IPersona.php';
use personaInterfazNamespace\IPersona;

class Persona implements IPersona{

    public $nombre;
    public $apellido;
    public $edad;
    public $paisDeOrigen;

    public function __constructor($nom ="raul", $ape="sd", $eda ="20", $paisDeOri ="Argentino"){
        $this->nombre =$nom;
        $this->apellido = $ape;
        $this->edad =$eda;
        $this->paisDeOrigen = $paisDeOri;
    }

    public function mostrarDato($perso){
        echo "$perso->nombre";
        echo "$perso->apellido";
        echo "$perso->edad";
        echo "$perso->paiseDeOrigen";
    }




}



?>