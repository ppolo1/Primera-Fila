<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "./VISTA/Web.php" ;

require_once './MODELO/BBDD.php';
require_once './MODELO/Modelo.php';

require_once './CONTROL/Controlador.php' ;
require_once './CONTROL/Productos.php' ;
require_once './CONTROL/Clientes.php';

//Web::completa("Este es el título", "prueba") ;
Web::completa("Formulario de contacto", "politicaDeCookies") ;

//echo "Hola, esto es una prueba" ;

// var_dump(Modelo::consultarProductos()) ;
 
 // VOY A HACER UN JSON CON LOS PRODUCTOS

//$array = Modelo::consultarProductos() ;
//
//$archivoJson = json_encode($array) ;
//
//echo $archivoJson ;

// -----------------------------------

// $direccion = dirname(__FILE__);
//$jsondata = file_get_contents($direccion . "/MODELO/" . "producto.json");

//Modelo::aniadirProducto($jsondata) ;

//Modelo::aniadirCliente() ;

