<?php

//require_once './Controlador.php' ;

//$url = $_GET["ruta"] ;
$ruta = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];

//echo $url ;
echo $ruta ;

// http://localhost/Primera-Fila/index.php

if (strpos($ruta, '/Primera-Fila') === 0) {
    echo "La ruta actual es: " . $ruta ;
    
    echo $metodo ;
    switch ($metodo) {
        case 'GET':
            
            switch ($ruta) {
                case "/Primera-Fila/index.php":

                    require_once 'VISTA/Home.php' ;
                    
                    break;
                
                case "/Primera-Fila/index.php/contacto":

                    require_once 'VISTA/Contacto.php' ;
                
                    break;
                
                default:
                    break;
            }
            break ;
//            if (preg_match('~index~', $ruta)) {
//                
//                require_once 'VISTA/Home.php' ;
//            }
//            if (preg_match('~/contacto~', $ruta)) {
//                
////                echo "Ha entrado en contacto" ;
//                require_once 'VISTA/Contacto.php' ;
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
    }
}
else{
    echo  "La ruta no es igual";
}



//class Route{
//    
//    private static $routes = [] ;
//    
//    public static function get($uri, $callback) {
//        
//        self::$routes['GET'][$uri] = $callback ;
//    }
//    
//    public static function post($uri, $callback) {
//        
//        self::$routes['POST'][$uri] = $callback ;
//    }
//    
//    public static function dispatch(){
//        
//        $uri = $_SERVER['REQUEST_URI'];
//        
//        echo $uri ;
//    }
//}

//require_once '../VISTA/FormularioLogado.php' ;

//$url = $_GET["ruta"] ;
//$ruta = $_SERVER['REQUEST_URI'];
//
//echo $ruta ;

// HOME

//if (strpos($ruta, '/Primera-Fila') === 0) {
//    
//    if (preg_match('/home/', $ruta)) {
//            
//        require_once '../VISTA/Home.php'; 
//    }
//    if (preg_match('/form_logado/', $ruta)) {
//            
//        header("Location:VISTA/FormularioLogado.php") ;
//    }
//    if (preg_match('/Sobre_Nosotros/', $ruta)) {
//            
//        header("Location:VISTA/SobreNosotros.php") ;
//    }
//    if (preg_match('/mueblesTienda/', $ruta)) {
//            
//        header("Location:VISTA/SobreNosotros.php") ;
//    }
//    if (preg_match('/Sobre_Nosotros/', $ruta)) {
//            
//        header("Location:VISTA/SobreNosotros.php") ;
//    }
//    if (preg_match('/Sobre_Nosotros/', $ruta)) {
//            
//        header("Location:VISTA/SobreNosotros.php") ;
//    }
//    if (preg_match('/Sobre_Nosotros/', $ruta)) {
//            
//        header("Location:VISTA/SobreNosotros.php") ;
//    }
//}
//else {
//    echo  "La ruta no es igual";
//}

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


//$url = $_GET["ruta"] ;
// $ruta = $_SERVER['REQUEST_URI'];

// echo $ruta ;

//if (strpos($ruta, '/VISTA/home') === 0) {
//    echo "Estoy en el home" ;
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

// function obtenerParteRoute($url) {
//     $parsedUrl = parse_url($url);
//     $path = $parsedUrl['path']; // Obtenemos la parte de la ruta de la URL

//     // Eliminamos la extensión ".php" si está presente
//     $parteSinExtension = preg_replace('/\.php$/', '', $path);

//     // Extraemos la parte que contiene "Route"
//     preg_match('/Route/', $parteSinExtension, $matches);
//     $parteRoute = $matches[0];

//     return $parteRoute;
// }

// $parteRoute = obtenerParteRoute($url);
// echo "Parte con 'Route': $parteRoute"; // Imprimirá "Parte con 'Route': Route"