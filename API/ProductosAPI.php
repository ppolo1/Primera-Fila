<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../MODELO/Modelo.php';
require_once '../MODELO/BBDD.php';
require_once '../CONTROL/Productos.php';

if(isset($_GET['busqueda'])){
    $busqueda = $_GET['busqueda'];
 } 

 if($busqueda == "null"){
     $busqueda = null ;
 }

header('Content-type:application/json;charset=utf-8') ;

$productosAPI = Modelo::consultarProductosAPI($busqueda) ;

// var_dump($productosAPI) ;

echo json_encode( $productosAPI,JSON_PRETTY_PRINT) ;