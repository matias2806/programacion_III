<?php
namespace AlumnoNamespace;

include_once './persona.php';
use PersonaNamespace\Persona;

class Alumno extends Persona{

    public $legajo;

    public function __constructor($leg, $nom, $ape, $eda, $paisDeOri) //: Persona //como llamo al contructor
    {
        parent::__constructor($nom, $ape, $eda, $paisDeOri);
        $this->legajo =$leg;
    }
}




?>