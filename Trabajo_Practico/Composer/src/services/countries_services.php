<?php



use NNV\RestCountries;



class CountriesServices{


// Se debe poder obtener los países 
// por continente, x
// sub región, 
// por idioma 
// o capital  x
// y los detalles completos de cada país.



        public static function ObtenerTodosLosPaises(){
            $restCountries = new RestCountries;
            return $restCountries->all();
        }

        function ObtenerUnPaisPorNombre($nombre){
            $restCountries = new RestCountries;
             return $restCountries->byName($nombre);
        }

        public static function ObtenerUnPaisPorCapital($nombre){
            $restCountries = new RestCountries;
            
             return $restCountries->byCapitalCity($nombre);
        }

        //Search by region: Africa, Americas, Asia, Europe, Oceania
        public static function ObtenerPaisesPorRegion($nombre){
            $restCountries = new RestCountries;
             return $restCountries->byRegion($nombre);
        }

        public static function ObtenerPaisesPorSubRegion($nombre){
            $restCountries = new RestCountries;
            return $restCountries->byRegionalBloc($nombre);
        }
        

        public static function ObtenerPaisesPorLenguaje($nombre){
            $restCountries = new RestCountries;
            return $restCountries->byLanguage($nombre);
        }
        
}
?>


