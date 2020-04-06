<?php

require_once __DIR__.'/src/paises.php';
require_once __DIR__.'/vendor/autoload.php';

include './src/services/countries_services.php';

use NNV\RestCountries;
use paisesNamespace\Paises;


// Crear una aplicación con composer que utilice una dependencia.
// Se debe utilizar POO, herencia, al menos 3 clases y una interfaz, métodos de clase y de instancia.
//  Se debe poder obtener los países por continente, sub región, por idioma o capital y los detalles completos de cada país.
// Crear un repositorio en github para guardar el código.
// El paquete de países que vimos en clase es namnv609/php-rest-countries.
// Se puede utilizar cualquier paquete si se respeta la consigna.
// Cuando creen el repositorio completar el formulario de esta tarea.


// ruta1->{'paises',countriesServices::traerPaises}
// ruta2->{'unPais',countriesServices::traerunPais}

// Paises::mostrar();
// var_dump($nose);
// $restCountries = new RestCountries;

// $paises = $restCountries->all();
// echo json_encode($paises);
//$restCountries -> byLanguage ( " vi " );




$metodo=$_SERVER["REQUEST_METHOD"];


if($metodo == "GET"){

    
  
    if(count($_REQUEST)==0){
        echo 'Debe completar el parametro filtro con alguno de los sig valores: filtroContinente, filtroSubRegion, filtroIdioma, filtroCapital, filtroTodosLosPaises';
    }else{



        $request = $_REQUEST['filtro'];
        if($request=="filtroContinente"){//ANDA
           
            if(isset($_REQUEST['continente'])){
                
                
                $array =CountriesServices::ObtenerPaisesPorRegion($_REQUEST['continente']); 
                var_dump($array);
            }
            else{
                //Search by region: Africa, Americas, Asia, Europe, Oceania
                echo 'Debe completar el parametro continente con alguno de los sig valores: Africa, Americas, Asia, Europe, Oceania';
            }
        }


        if($request=="filtroTodosLosPaises"){ //ANDA
           
            $array = CountriesServices::ObtenerTodosLosPaises();
            var_dump($array);
        }


        if($request=="filtroSubRegion"){ // ANDA
           
            if(isset($_REQUEST['subRegion'])){
                
                
                $array =CountriesServices::ObtenerPaisesPorSubRegion($_REQUEST['subRegion']); 
                var_dump($array);
            }
            else{
                
                echo 'Debe completar el parametro subRegion con alguna subRegion del mundo  ';
                
                echo "(EU (European Union)
                EFTA (European Free Trade Association)
                CARICOM (Caribbean Community)
                PA (Pacific Alliance)
                AU (African Union)
                USAN (Union of South American Nations)
                EEU (Eurasian Economic Union)
                AL (Arab League)
                ASEAN (Association of Southeast Asian Nations)
                CAIS (Central American Integration System)
                CEFTA (Central European Free Trade Agreement)
                NAFTA (North American Free Trade Agreement)
                SAARC (South Asian Association for Regional Cooperation) )";
            }
        }


        if($request=="filtroIdioma"){ // ANDA
           
            if(isset($_REQUEST['lenguaje'])){
                
                
                $array =CountriesServices::ObtenerPaisesPorLenguaje($_REQUEST['lenguaje']); 
                var_dump($array);
            }
            else{
                
                echo 'Debe completar el parametro lenguaje con alguna lenguaje del mundo segun la ISO 639-1 del codigo de lenguaje.  ';
                
                
            }
        }


        if($request=="filtroCapital"){ //NO ANDA
           
            if(isset($_REQUEST['capital'])){
                
                
                $array =CountriesServices::ObtenerPaisesPorRegion($_REQUEST['capital']); 
                var_dump($array);
            }
            else{
                
                echo 'Debe completar el parametro capital con alguna capital del mundo';
            }
        }


        
    }

}

if($metodo == "POST"){

    var_dump($_REQUEST);
    var_dump('esto es metodo post');
    
}





// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('name.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');


?>
