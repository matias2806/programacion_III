<?php



// Crear una API rest con las siguientes rutas:
// 1- POST singin: recibe email, clave, nombre, apellido, telefono y tipo (user, admin)
// y lo guarda en un archivo.
// 2- POST login: recibe email y clave y chequea que existan, si es así retorna un JWT de
// lo contrario informa el error (si el email o la clave están equivocados) .
// A PARTIR DE AQUI TODAS LAS RUTAS SON AUTENTICADAS.
// 3- GET detalle: Muestra todos los datos del usuario actual.
// 4- GET lista: Si el usuario es admin muestra todos los usuarios, si es user solo los del tipo user.



include_once "user.php";
include_once "archivos.php";


// $arch= fopen("datos.json","w");
// //Lo uso una vez y lo comento
// $ar=array();
// $rta=fwrite($arch, json_encode($ar));
// fclose($arch);

// $arch= fopen("info.txt","w");
// //Lo uso una vez y lo comento
// $ar=array();
// $rta=fwrite($arch, json_encode($ar));
// fclose($arch);

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      

      if  (isset($_POST['email']) == true && isset($_POST['clave']) == true &&
         isset($_POST['nombre']) == true && isset($_POST['apellido']) == true &&
         isset($_POST['telefono']) == true&& isset($_POST['tipo']) == true)
         {

            $email = $_POST['email'];
            $clave = $_POST['clave'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $tipo = $_POST['tipo'];

         //    echo $email, $clave, $nombre, $apellido, $telefono, $tipo;
            $per = new User($email,$clave,$nombre,$apellido,$telefono,$tipo);
            $per->VerDatos();

            $per->save("datos.json");
            $per->save("info.txt");

         }
         else{
            echo "Debe ingresar las key email, clave, nombre, apellido, telefono, tipo(user o admin) con sus valores en el body";
         }
   }
   else{
      echo "debe ser un post";
   }