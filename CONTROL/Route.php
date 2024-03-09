<?php

//$url = $_GET["ruta"] ;
$ruta = $_SERVER['REQUEST_URI'];

//echo $ruta ;

// HOME

if (strpos($ruta, '/Primera-Fila') === 0) {
    
    if (preg_match('/index/', $ruta)) {
            
        header("Location:VISTA/Home.php") ;
    }
    if (preg_match('/Sobre_Nosotros/', $ruta)) {
            
        header("Location:VISTA/SobreNosotros.php") ;
    }
}
else {
    echo  "La ruta no es igual";
}

//if (strpos($ruta, 'Primera-Fila/home') === 0) {
//    $metodo = $_SERVER['REQUEST_METHOD'];
//    switch ($metodo) {
//        case 'GET':
//            if (preg_match('~^/Primera-Fila/home~', $ruta)) {
//                if (isset($matches[0])) {
//                    
//                    echo "estoy dentro del Home" ;
//                }
//            }
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
//
//// CONTACTO
//
//if (strpos($ruta, '/Primera-Fila/contacto') === 0) {
//    $metodo = $_SERVER['REQUEST_METHOD'];
//    switch ($metodo) {
//        case 'GET':
//            if (preg_match('~^/Primera-Fila/contacto~', $ruta)) {
//                if (isset($matches[0])) {
//                    
//                    echo "estoy dentro" ;
//                }
//            }
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
//
//// LOGADO
//
//if (strpos($ruta, '/Primera-Fila/formularioLogado') === 0) {
//    $metodo = $_SERVER['REQUEST_METHOD'];
//    switch ($metodo) {
//        case 'GET':
//            if (preg_match('~^/Primera-Fila/formularioLogado~', $ruta)) {
//                if (isset($matches[0])) {
//                    
//                    echo "estoy dentro" ;
//                }
//            }
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
