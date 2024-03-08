
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 *  ENLACES REPOSITORIO:
 
     - MAIN (documentación) --> https://github.com/ppolo1/Primera-Fila
 
     - MASTER (proyecto) --> https://github.com/ppolo1/Primera-Fila/tree/master
 */

require_once "./VISTA/Web.php" ;

require_once './MODELO/BBDD.php';
require_once './MODELO/Modelo.php';

require_once './CONTROL/Controlador.php' ;
require_once './CONTROL/Productos.php' ;
require_once './CONTROL/Clientes.php';

//Web::completa("Este es el título", "prueba") ;
//Web::completa("Formulario de contacto", "home") ;

//echo "Hola, esto es una prueba" ;

// var_dump(Modelo::consultarProductos()) ;
 
 // VOY A HACER UN JSON CON LOS PRODUCTOS

$array = Modelo::consultarProductos() ;

var_dump($array) ;
//
//$archivoJson = json_encode($array) ;

//echo $archivoJson ;

// -----------------------------------

// AÑADIR DATOS

// $direccion = dirname(__FILE__);
//$jsondata = file_get_contents($direccion . "/MODELO/" . "cliente.json");
//
////Modelo::aniadirProducto($jsondata) ;
//Modelo::aniadirCliente($jsondata) ;

// ------------------------------------------------

//$ruta = $_SERVER['REQUEST_URI'];
//
//if (strpos($ruta, '/contacto') === 0) {
//    
//    $metodo = $_SERVER['REQUEST_METHOD'];
//    
//    switch ($metodo) {
//        case 'GET':
//            
//            if (preg_match('~/contacto~', $ruta)) {
//                ob_clean() ; // Limpia la pantalla. No quita el encabezado, así que se pinta lo que hay debajo           
//                Web::contacto() ;
//                Web::footerFormularioContacto() ;
//                }
//            
//            break;
//        case 'POST':
//            echo json_encode($myresp->error_405());
//            break;
//        case 'PUT':
//            echo json_encode($myresp->error_405());
//            break;
//        default:
//            echo 'Método no permitido';
//            break;
//    }
//}else{
//    echo  "La ruta no es igual";
//}

//header("Location: ../VISTA/Home.php") ;

//require_once './CONTROL/Route.php' ;