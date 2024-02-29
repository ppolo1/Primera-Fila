<?php

/**
 * Aquí está la estructura del web y las partes más importantes. La intención es 
 * llamar a la función web() y pasarle por parámetros lo que queremos añadir en 
 * el body.
 *
 * @author Primera Fila
 */
class Web {
    
    
    /**
     * Método que llamada a la web completa. Hay que pasarle por parámetros 
     * el contenido.
     * 
     * @param type $titulo Título de la web (pestaña navegador)
     * @param type $metodo Método que pinta el contenido de la web
     */
    public static function completa($titulo, $metodo) {
        
        echo '
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <title> ' . $titulo . ' </title>


        </head>

        <body>' ;

        self::header() ;
        self::barraNavegacion() ;
        self::$metodo() ;
        self::footer() ;

        echo '
        <script src="javaScript.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        </body>

        </html>' ;
    }
    
    public static function prueba() {
        
        echo "Esto es una prueba de body" ;
    }


    /**
     * Pinta el código html del header. Hay que incluirlo en el body.
     */
    public static function header(){

        echo '
            <header class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-1 col-md-6 col-3 ms-xl-4 me-xl-5">
                        <div class="navbar navbar-expand-sm navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 col-5 ms-xl-4 ms-3 me-xl-5 text-end">
                        <a href="#" class="navbar-brand">
                            <img src="img/logo_transparente2.png" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-3 d-flex ms-4 justify-content-end align-items-center cart-container">
                        <a id="logado" href="form_logado.html" class="btn">
                            <button id="logado" class="btn" type="button">
                                <i class="fas fa-user-circle"></i>
                            </button>
                        </a>
                        <div class="position-relative">
                            <a id="cart" class="btn">
                                <button id="cart-icon" class="btn">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span id="cart-count">0</span>
                                </button>
                                <div class="cart-dropdown" id="cartModal">
                                    <h4>Carrito de Compra</h4>
                                    <ul id="cart-items"></ul>
                                    <p>Total: €<span id="cart-total">0</span></p>
                                    <button id="clear-cart">Vaciar Carrito</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
        ';
    }

    
    /**
     * Pinta el código html del footer. Hay que incluirlo en el body.
     */
    public static function footer(){

        echo ''
        . '<footer class="container-fluid mt-5 bg-light">
            <div class="row align-items-center text-center">
              <div class="row align-items-center text-center">
                <div class="col-4 col-md-4">
                    <h5>Política de Privacidad</h5>
                    <p>Información sobre Privacidad en nuestro sitio.</p>
                    <div class="privacidad">
                    <a href="politicaPrivacidad.html">Más información</a>
                </div>
            </div>
              <div class="col-4 col-md-4">
                <h5>Redes Sociales</h5>
                <div class="social-icons">
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-facebook"></a>
                  <a href="#" class="fab fa-twitter"></a>                
                </div>
                <img class="imagen-producto mt-2" src="img/images.png" alt="Producto 2">
              </div>
              <div class="col-4 col-md-4">
                <h5>Derechos de Autor</h5>
                <p>&copy; 2023 Eon Lux Antiques. Todos los derechos reservados.</p>
              </div>
            </div>
          </footer>' ;
    }
    
    
    // --------------------------------------------------------------
    // --------------------- OTRAS PARTES ---------------------------
    // --------------------------------------------------------------

    
    /**
     * Pinta el código html del about. Hay que incluirlo en el body.
     */
    public static function about(){

        echo '

        <div class="quienes">
            <h1>¿QUIÉNES SOMOS?</h1>
            <p>En <b>Eon Lux Antiques</b>, nuestra pasión es preservar la historia y la belleza a través 
            de objetos atemporales. <br>Somos más que un simple anticuario; 
            curadores de piezas únicas y asesores apasionados.</p>
        </div>
        
        <div id="atencion">
            <figcaption>
            <a class="abrir" href="#atencion"><span class="icon-plus"></span></a></br>
            <a class="cerrar"href="#icon-minus"><span class="icon-minus"></span></a>
            </figcaption>
            <h1>Atención Personalizada<br></h1>
            <p id="atencion"> Cada cliente es especial para nosotros. 
                No somos una gran cadena de muebles impersonales y en secuencia. Nos tomamos el tiempo 
                para conocerte, entender tus gustos y necesidades. Tu satisfacción es nuestra prioridad.
            </p>
        </div>
        
        <div id="productos">
            <aption>
            <a class="abrir" href="#productos"><span class="icon-plus"></span></a></br>
            <a class="cerrar"href="#icon-minus"><span class="icon-minus"></span></a>
            </aption>
            <h1>Asesoramiento Personalizado<br></h1>
            <p id="personalizado"> ¿Buscas algo específico? No te preocupes. 
            Nuestros expertos están aquí para ayudarte. Si no tenemos lo que necesitas, lo encontraremos
                para ti. Tu búsqueda es nuestra misión.</p>
        </div>
        
        <div id="trato">
        <figcaption>
            <a class="abrir" href="#trato"><span class="icon-plus"></span></a></br>
            <a class="cerrar"href="#icon-minus"><span class="icon-minus"></span></a>
        </figcaption>
            <h1>Trato Preferente<br></h1>
            <p id="trato"> No importa si eres un coleccionista experimentado o un 
            amante de las antigüedades por primera vez. Te trataremos con respeto y dedicación. 
            Tu satisfacción es nuestro éxito.</p>
        </div>
        
        <div id="mundo">
        <figcaption>
            <a class="abrir" href="#mundo"><span class="icon-plus"></span></a></br>
            <a class="cerrar"href="#icon-minus"><span class="icon-minus"></span></a>
        </figcaption>
            <h1>Envío a Todo el Mundo<br></h1>
            <p id="mundo">No importa dónde te encuentres, 
            llevamos nuestras joyas a tu puerta. Cada pieza se empaqueta con cuidado y se envía con amor.</p>
        </div>
        
            
            <div id="llamadaAccion"><P>&nbsp &nbsp Únete a una experiencia única. Descubre la magia de lo auténtico y lo excepcional.<br>
            Bienvenido al mundo Eon Lux Antiques, donde lo único es lo verdaderamente valioso.</p>
            </div>
        
        ';
    }
    
    
    
    public static function barraNavegacion(){
        
        echo ''
        . ' <!-- Barra de navegación debajo del logo y los iconos, visible solo en lg y mayores -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.html">Inicio</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-5">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Tienda
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item smaller-text" href="mueblesTienda.html">Muebles</a></li>
                                    <li><a class="dropdown-item smaller-text" href="decoracionTienda.html">Decoración</a></li>
                                    <li><a class="dropdown-item smaller-text" href="arteTienda.html">Arte</a></li>
                                    <li><a class="dropdown-item smaller-text" href="iluminación.html">Iluminación</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-xl-5">
                            <li class="nav-item">
                                <a class="nav-link active" href="SobreNosotros.html">Sobre Nosotros</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-xl-5">
                            <li class="nav-item">
                                <a class="nav-link active" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>' ;
    }
    
    
    public static function politicaDeCookies() {
        
        // El código HTML está sin retocar. Está el texto en bruto. 
        
        echo 'POLÍTICA DE COOKIES
        El acceso a este Sitio Web puede implicar la utilización de cookies. Las cookies son pequeñas cantidades de información 
        que se almacenan en el navegador utilizado por cada Usuario —en los distintos dispositivos que pueda utilizar para navegar— 
        para que el servidor recuerde cierta información que posteriormente y únicamente el servidor que la implementó leerá. Las cookies facilitan 
        la navegación, la hacen más amigable, y no dañan el dispositivo de navegación.

        Las cookies son procedimientos automáticos de recogida de información relativa a las preferencias determinadas por el Usuario durante su visita 
        al Sitio Web con el fin de reconocerlo como Usuario, y personalizar su experiencia y el uso del Sitio Web, y pueden también, por ejemplo, ayudar a identificar y resolver errores.

        La información recabada a través de las cookies puede incluir la fecha y hora de visitas al Sitio Web, las páginas visionadas, el tiempo que ha estado 
        en el Sitio Web y los sitios visitados justo antes y después del mismo. Sin embargo, ninguna cookie permite que esta misma pueda contactarse con el número de teléfono del Usuario o con cualquier otro medio de contacto personal. Ninguna cookie puede extraer información del disco duro del Usuario o robar información personal. La única manera de que la información privada del Usuario forme parte del archivo Cookie es que el usuario dé personalmente esa información al servidor.

        Las cookies que permiten identificar a una persona se consideran datos personales. Por tanto, a las mismas les será de aplicación la Política de Privacidad anteriormente descrita. 
        En este sentido, para la utilización de las mismas será necesario el consentimiento del Usuario. Este consentimiento será comunicado, en base a una elección auténtica, ofrecido mediante una decisión afirmativa y positiva, antes del tratamiento inicial, removible y documentado.

        Deshabilitar, rechazar y eliminar cookies
        El Usuario puede deshabilitar, rechazar y eliminar las cookies —total o parcialmente— instaladas en su dispositivo mediante la configuración de su navegador 
        (entre los que se encuentran, por ejemplo, Chrome, Firefox, Safari, Explorer). En este sentido, los procedimientos para rechazar y eliminar las cookies pueden diferir de un navegador de Internet a otro. En consecuencia, el Usuario debe acudir a las instrucciones facilitadas por el propio navegador de Internet que esté utilizando. En el supuesto de que rechace el uso de cookies —total o parcialmente— podrá seguir usando el Sitio Web, si bien podrá tener limitada la utilización de algunas de las prestaciones del mismo.

        Este documento de Política de Cookies ha sido creado mediante el generador de plantilla de política de cookies web gratis online el día 19/02/2024.
        ' ;
    }
    
}
