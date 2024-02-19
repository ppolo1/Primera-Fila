<?php

/**
 * Description of Web
 *
 * @author Primera Fila
 */
class Web {
    
    public static function web(){
        
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <title>Eon Lux Antiques</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="css/bootstrap.min.css">
        </head>
        <body>' ;
        
        echo "Prueba" ;

        self::header() ;
        self::about() ;
        self::footer() ;

        echo '
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        </body>
    
        </html>' ;
    }

    public static function header(){

        echo '
            <div class="row align-items-center">
                <!-- Icono de menú visible solo en xs -->
                <div class="navbar navbar-expand-sm navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                
                <!-- Logo centrado en todas las pantallas -->
                <div class="col-xl-6 col-md-6 col-5 ms-4 ms-xl-5 text-end">
                    <a href="#" class="navbar-brand">
                        <img src="img/logo_transparente2.png" alt="Logo" class="img-fluid">
                    </a>
                </div>

                <!-- Iconos a la derecha, visibles en todos los tamaños -->
                <div class="col-xl-5 col-md-4 col-sm-4 col-1 d-flex justify-content-end ms-5">
                    <!--Boton para logado-->
                    <button class="btn" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </button>

                    <!--Boton para el carrito-->
                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"> -->
                    <button class="btn btn-bag" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-bag" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                        </svg>
                    </button>

                    <div class="offcanvas offcanvas-end" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <p>Hola que tal</p>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }

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

    public static function footer(){

        echo '
        <footer class="footer">
            <div class="container-fluid mt-5 bg-light">
                <div class="row align-items-center text-center">
                <div class="col-4 col-md-4">
                    <h4>Política de Cookies</h4>
                    <p>Información sobre el uso de cookies en nuestro sitio.</p>
                    <a id="cookies" href="PoliticaDeCookies.html" target="_blank">Más información</a>
                </div>
                <div class="col-4 col-md-4">
                    <h4>Redes Sociales</h4>
                    <div class="social-icons">
                        <a href="#" class="fab fa-instagram" text-decoration:none></a>
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>              
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <h4>Derechos de Autor</h4>
                    <p>&copy; 2023 Eon Lux Antiques. Todos los derechos reservados.</p>
                </div>
                </div>
            </div>        
        </footer>
        ';
    }
}
