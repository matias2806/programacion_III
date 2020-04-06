<?php
namespace paisesNamespace;
// Crear una aplicación con composer que utilice una dependencia.
// Se debe utilizar POO, herencia, al menos 3 clases y una interfaz, métodos de clase y de instancia.
// Se debe poder obtener los países por continente, sub región, por idioma o capital y los detalles completos de cada país.
// Crear un repositorio en github para guardar el código.

// El paquete de países que vimos en clase es namnv609/php-rest-countries.

// Se puede utilizar cualquier paquete si se respeta la consigna.

// Cuando creen el repositorio completar el formulario de esta tarea.


//require_once __DIR__.'../vendor/autoload.php';

//use NNV\RestCountries;

// $restCountries = new RestCountries;


// $paises = $restCountries->all();
// echo "Aaaaaa";
// echo json_encode($paises);

class Paises{
    // var $nombreDelPais;
    // var $capital; //capital
    // var $moneda;
    // var $poblacion;
    // var $region; //Continente
    // var $subregion; //Subregio
    // var $lenguaje; //lenguaje

    // function __constructor($nombre, $capi, $mon, $pobla, $reg, $subreg, $leng){
    //     $this->nombreDelPais ='ALEJANDRO';
    //     $this->capital = $capi;
    //     $this->moneda = $mon;
    //     $this->poblacion = $pobla;
    //     $this->region = $reg;
    //     $this->subregion = $subreg;
    //     $this->lenguaje = $leng;
    //     echo "llego al constructor";
    // }
        function mostrar(){
            $nose=['asd','asd'];
            var_dump($nose);
            echo $nose;
        }

    function ImprimePais( $pais){
        echo "Nombre -> $pais->nombreDelPais";
        echo "Capital -> $pais->capital";
        echo "Moneda -> $pais->moneda";
        echo "Poblacion -> $pais->poblacion";
        echo "Region -> $pais->region";
        echo "Subregion -> $pais->subregion";
        echo "Lenguaje -> $pais->lenguaje";
    }

    function ImprimeTodosLosPaises( $paises){
        foreach($paises as $pais)
        {
            imprimePais($pais);
        }
    }

    function ObtenerPaisesPorContinente($paises, $continente){
        foreach($paises as $pais){
            if($pais->region == $continente){
                ImprimePais($pais);
            }
        }
    }

    function ObtenerPaisesPorSubRegion($paises, $subreg){
        foreach($paises as $pais){
            if($pais->subregion == $subreg){
                ImprimePais($pais);
            }
        }
    }
}