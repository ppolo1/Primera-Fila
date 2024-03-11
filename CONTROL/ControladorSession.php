<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once './Route.php' ;

/**
 * Description of Controlador
 *
 * @author Primera Fila
 */
session_start();

if(isset($_POST['nombre'], $_POST['contrasena'])){
    
    //Creo mi objeto del modelo Login
    $MLogin = new MLogin();
    
    //Esta consulta devuelve un array de objetos
    if($MLogin->consultarLogin($_POST['nombre'], $_POST['contrasena'])){
        //Me declaro la variable de sesion
        //En el login es donde se debe de generar el usuario y por tanto se crea la variable sesion usuario con su información.
        
        $_SESSION["logeado"] = true; //Con esta variable la sesion se abre/ persiste si es true.
        
        $_SESSION["usuario"] = $MLogin->datosUsuarioLogin($_POST['nombre'], $_POST['contrasena'])->getNombreLogin();
        
        header("Location: http://localhost/Primera-Fila/VISTA/index.php?pagina=form_logado");
        die();
        
    }   
    else{  
        //se destruye cualquier sesion que hubiera.
        session_destroy();
        //voy a la pagina
        header("Location: http://localhost/Primera-Fila/VISTA/index.php?pagina=home");
        die();
    }
}
//Route::get('/', function(){
//    echo "Estoy en el index" ;
//}) ;
//Route::get('/contacto', function(){
//    echo "Estoy en el contacto" ;
//}) ;
//Route::get('/', function(){
//    echo "Estoy en el about" ;
//}) ;
//
//Route::dispatch() ;