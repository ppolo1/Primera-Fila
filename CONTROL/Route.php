<?php

$url = $_GET["ruta"] ;
$ruta = $_SERVER['REQUEST_URI'];

if (strpos($ruta, '/home') === 0) {
    $metodo = $_SERVER['REQUEST_METHOD'];
    switch ($metodo) {
        case 'GET':
            if (preg_match('~^/home~', $ruta)) {
                if (isset($matches[0])) {
                    
                    echo "estoy dentro del HOme" ;
                }
            }
            break;
        case 'POST':
            echo json_encode($myresp->error_405());
            break;
        case 'PUT':
            echo json_encode($myresp->error_405());
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}else{
    echo  "La ruta noe s igual";
}

if (strpos($ruta, '/Primera-Fila/contacto') === 0) {
    $metodo = $_SERVER['REQUEST_METHOD'];
    switch ($metodo) {
        case 'GET':
            if (preg_match('~^/Primera-Fila/contacto~', $ruta)) {
                if (isset($matches[0])) {
                    
                    echo "estoy dentro" ;
                }
            }
            break;
        case 'POST':
            echo json_encode($myresp->error_405());
            break;
        case 'PUT':
            echo json_encode($myresp->error_405());
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}else{
    echo  "La ruta noe s igual";
}
