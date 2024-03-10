
<?php

session_start() ;

$ruta = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];

//echo $ruta ; // http://localhost/Primera-Fila/index.php
//if (strpos($ruta, '/Primera-Fila') === 0) {
//    echo "La ruta actual es: " . $ruta ;

if ($metodo == 'GET') {
    if (isset($_GET["pagina"])) {
        
        switch ($_GET["pagina"]) {
            case "home":
                require_once 'VISTA/Home.php';
                break;
            
             case "contacto":
                require_once 'VISTA/Contacto.php';
                break;
            
             case "about":
                require_once 'VISTA/SobreNosotros.php';
                break;
            
             case "arteTienda":
                require_once 'VISTA/ArteTienda.php';
                break;
            
             case "decoracionTienda":
                require_once 'VISTA/DecoracionTienda.php';
                break;
            
             case "mueblesTienda":
                require_once 'VISTA/MueblesTienda.php';
                break;
            
             case "iluminacionTienda":
                require_once 'VISTA/IluminacionTienda.php';
                break;
            
            case "form_logado":
                require_once 'VISTA/FormularioLogado.php';
                break;
            
            case "form_registro":
                require_once 'VISTA/FormularioRegistro.php';
                break;
//            
            case "avisoLegal":
                require_once 'VISTA/AvisoLegal.php';
                break;
            
            case "cookies":
                require_once 'VISTA/Cookies.php';
                break;
            
            case "politicaPrivacidad":
                require_once 'VISTA/PoliticaPrivacidad.php';
                break;

            case "busqueda":
                require_once 'VISTA/Busqueda.php' ;
                break;

            default:
                break;
        }
    } else {
        require_once 'VISTA/Home.php';
    }
}

if ($metodo == 'POST') {
    
}

// ------------------------------------ PRUEBAS SIN ÉXITO -----------------------------------------------
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
?>