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
            <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="VISTA/css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="VISTA/css/estiloAcordeon.css">

            <title> ' . $titulo . ' </title>


        </head>

        <body>' ;

        self::header() ;
        self::barraNavegacion() ;
        self::$metodo() ;
        
        if ($metodo !== "contacto") {
            
            self::footer() ;
        }
        else
        {
            self::footerFormularioContacto() ;
        }

        echo '
        <script src="VISTA/js/javaScript.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
                <div class="row contactoalign-items-center">
                    <div class="col-xl-1 col-md-6 col-3 ms-xl-4 me-xl-5">
                        <div class="navbar navbar-expand-sm navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 col-5 ms-xl-4 ms-3 me-xl-5 text-end">
                        <a href="#" class="navbar-brand">
                            <img src="VISTA/img/logo_transparente2.png" alt="Logo" class="img-fluid">
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
                                <a class="nav-link active" href="about">Sobre Nosotros</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-xl-5">
                            <li class="nav-item">
                                <a class="nav-link active" href="contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>' ;
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
                <img class="imagen-producto mt-2" src="VISTA/img/images.png" alt="Producto 2">
              </div>
              <div class="col-4 col-md-4">
                <h5>Derechos de Autor</h5>
                <p>&copy; 2023 Eon Lux Antiques. Todos los derechos reservados.</p>
              </div>
            </div>
          </footer>' ;
    }
    
    
    public static function footerFormularioContacto() {
        
        echo ''
        . ' <footer class="container-fluid mt-5 bg-light">
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
                    <img class="imagen-producto mt-2" src="VISTA/img/images.png" alt="Producto 2">
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

    
    public static function home() {
        
        echo ''
        . '<main>
            <div class="slider-frame">
                <ul>
                    <li><img src="VISTA/img/antiguedades1.png"></li>
                    <li><img src="VISTA/img/telefono.jpg"></li>
                    <li><img src="VISTA/img/estanteria.jpg"></li>
                    <li><img src="VISTA/img/decoracion.jpg"></li>
                </ul>
            </div>
        </main>' ;
    }
    
    
    /**
     * Pinta el código html del about. Hay que incluirlo en el body.
     */
    public static function sobreNosotros(){

        echo ''
        . '<main >
                <div class="container-fluid">
                    <div class="row align-items-center p-4">  
                      <div class="col-12 text-center">
                        <div class="quienes">
                          <h3>¿QUIÉNES SOMOS?</h3>
                          <p>En <b>Eon Lux Antiques</b>, nuestra pasión es preservar la historia y la belleza a través 
                          de objetos atemporales. <br>Somos más que un simple anticuario; 
                          curadores de piezas únicas y asesores apasionados.</p>
                        </div>
                      </div>

                      <div class="col-12 col-md-4 col-xl-12 m-1">
                        <div class="accordion" id="accordionExample1">
                          <div class="accordion-item">
                            <h3 class="accordion-header" id="atencionHeading">
                              <button class="accordion-button abrir" type="button" data-bs-toggle="collapse" data-bs-target="#atencionCollapse" aria-expanded="true" aria-controls="atencionCollapse">
                                <h4>Atención Personalizada</h4>
                              </button>
                            </h3>
                            <div id="atencionCollapse" class="accordion-collapse collapse" aria-labelledby="atencionHeading" data-bs-parent="#accordionExample1"> 
                              <div class="accordion-body">
                                <p>Cada cliente es especial para nosotros. No somos una gran cadena de muebles impersonales y en secuencia. Nos tomamos el tiempo para conocerte, entender tus gustos y necesidades. Tu satisfacción es nuestra prioridad.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 m-1">
                        <div class="accordion" id="accordionExample2"> 
                          <div class="accordion-item">
                            <h3 class="accordion-header" id="productosHeading">
                              <button class="accordion-button abrir" type="button" data-bs-toggle="collapse" data-bs-target="#productosCollapse" aria-expanded="true" aria-controls="productosCollapse">
                                <h4>Productos Exclusivos</h4>
                              </button>
                            </h3>
                            <div id="productosCollapse" class="accordion-collapse collapse" aria-labelledby="productosHeading" data-bs-parent="#accordionExample2"> 
                              <div class="accordion-body">
                                <p>Nuestro catálogo está lleno de tesoros inigualables. Desde antigüedades hasta piezas de arte contemporáneo, cada artículo ha sido seleccionado con esmero. No encontrarás estas joyas en ningún otro lugar.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 m-1">
                        <div class="accordion" id="accordionExample3"> 
                          <div class="accordion-item">
                            <h3 class="accordion-header" id="AsesoramientoHeading">
                              <button class="accordion-button abrir" type="button" data-bs-toggle="collapse" data-bs-target="#AsesoramientoCollapse" aria-expanded="true" aria-controls="AsesoramientoCollapse">
                                <h4>Asesoramiento Personalizado</h4>
                              </button>
                            </h3>
                            <div id="AsesoramientoCollapse" class="accordion-collapse collapse" aria-labelledby="AsesoramientoHeading" data-bs-parent="#accordionExample3"> 
                              <div class="accordion-body">
                                <p>¿Buscas algo específico? No te preocupes. 
                                    Nuestros expertos están aquí para ayudarte. Si no tenemos lo que necesitas, lo encontraremos
                                     para ti. Tu búsqueda es nuestra misión.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 m-1">
                        <div class="accordion" id="accordionExample4"> 
                          <div class="accordion-item">
                            <h3 class="accordion-header" id="TratoHeading">
                              <button class="accordion-button abrir" type="button" data-bs-toggle="collapse" data-bs-target="#TratoCollapse" aria-expanded="true" aria-controls="AsesoramientoCollapse">
                                <h4>Trato Preferente</h1>
                              </button>
                            </h2>
                            <div id="TratoCollapse" class="accordion-collapse collapse" aria-labelledby="TratoHeading" data-bs-parent="#accordionExample4"> 
                              <div class="accordion-body">
                                <p> No importa si eres un coleccionista experimentado o un 
                                  amante de las antigüedades por primera vez. Te trataremos con respeto y dedicación. 
                                  Tu satisfacción es nuestro éxito.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 m-1">
                        <div class="accordion" id="accordionExample5"> 
                          <div class="accordion-item">
                            <h3 class="accordion-header" id="EnvioHeading">
                              <button class="accordion-button abrir" type="button" data-bs-toggle="collapse" data-bs-target="#EnvioCollapse" aria-expanded="true" aria-controls="EnvioCollapse">
                                <h4>Envío a Todo el Mundo</h4>
                              </button>
                            </h3>
                            <div id="EnvioCollapse" class="accordion-collapse collapse" aria-labelledby="EnvioHeading" data-bs-parent="#accordionExample5"> 
                              <div class="accordion-body">
                                <p>No importa dónde te encuentres, 
                                  levamos nuestras joyas a tu puerta. Cada pieza se empaqueta con cuidado y se envía con amor.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
            </main>' ;
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
    
    
    public static function contacto() {
        
        echo ''
        . ' <main>
                <div class="container-fluid mt-5">
                    <div class="row d-flex justify-content-around">

                        <div class="localizacion col-12 col-md-5 col-xl-5 text-center mt-3">
                            <h1>Localización</h1>
                            <p>Calle Primavera, 7 <br>
                                Pueblo Encantado <br>
                                Provincia de Sueños <br>
                                Código Postal: 24321 <br>
                                España</p>
                            <h2>Número de Contacto</h2>
                                <p>+34621457895</p> 
                            <h2>Horario de Atención al Cliente</h2>
                                <p>10:00 a 14:00 y de 17:00 a 20:00</p> 
                            <h2> Síganos en Redes Sociales</h2>
                            <div class="social-icons-contacto">
                              <a href="#" class="fab fa-instagram"></a>
                              <a href="#" class="fab fa-facebook"></a>
                              <a href="#" class="fab fa-twitter"></a>                
                            </div>
                          </div>


                        <form class="col-12 col-md-5 col-xl-5 mt-3">
                        <h1 class="localizacion">Formulario de Contacto</h1>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre y Apellidos</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>   
                  </div>
            </main>' ;
    }
    
    
    public static function arteTienda() {
        
        echo ''
        . '<main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">


                    <div class=" titulos col-12 text-center mb-5">
                        <h1>Arte</h1>
                        <h4>Embellece tus paredes con obras que cuentan historias y despiertan emociones, <br>
                             transformando tu hogar en un lienzo de expresión artística.
                    </div>

                    <div class="row justify-content-around" id="products1">


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/arte1.jpg" alt="Producto 1">
                            <h4>Oleo Sobre Lienzo San Pedro</h4>
                            <p class="price">€7250</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/arte2.jpg" alt="Producto 2">
                            <h4>Lámina Virgen y niño</h4>
                            <p class="price">€1125</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/arte3.jpg" alt="Producto 3">
                            <h4>Lamina Renacentista</h4>
                            <p class="price">€2450</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                            <img src="VISTA/img/arte4.jpg" alt="Producto 4">
                            <h4>Racimos De Uvas</h4>
                            <p class="price">€1970</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                            <img src="VISTA/img/arte5.jpg" alt="Producto 5">
                            <h4>Oleografía De La Adoración</h4>
                            <p class="price">€2700</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                        </div>


                    <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                            <img src="VISTA/img/arte6.jpg" alt="Producto 6">
                            <h4>Paseo siglo XVIII</h4>
                            <p class="price">€3000</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                        </div>

                </div>
            </div>
        </main>' ;
    }
    
    
    public static function decoracionTienda() {
        
        echo ''
        . ' <main>

                <!-- Galería de productos -->
                <div class="container-fluid mt-5">

                    <div class=" titulos col-12 text-center mb-5">
                            <h1>Decoración</h1>
                            <h4>Inspira tus espacios con detalles encantadores que reflejan tu estilo personal <br>
                                y agregan un toque de creatividad a tu hogar.</h4>
                        </div>

                        <div class="row justify-content-around" id="products1">

                        <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion1.jpg" alt="Producto 1">
                                <h4>Plato Antiguo</h4>
                                <p class="price">€250</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion2.jpg" alt="Producto 2">
                                <h4>Cibeles de Resina</h4>
                                <p class="price">€125</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion3.jpg" alt="Producto 3">
                                <h4>Busto de Águila</h4>
                                <p class="price">€450</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion4.jpg" alt="Producto 4">
                                <h4>Tibor Griego De Cerámica </h4>
                                <p class="price">€570</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion5.jpg" alt="Producto 5">
                                <h4>Globo Terraqueo Vintage</h4>
                                <p class="price">€300</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/decoracion6.jpg" alt="Producto 6">
                                <h4>Tetera de Latón</h4>
                                <p class="price">€100</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>


            </main>' ;
    }
    
    
    public static function iluminacion() {
        
        echo ''
        . ' <main>

                <!-- Galería de productos -->
                <div class="container-fluid mt-5">


                        <div class=" titulos col-12 text-center mb-5">
                            <h1>Iluminación</h1>
                            <h4>Crea atmósferas cautivadoras con nuestra selección de iluminación que añade estilo y sofisticación, <br>
                                convirtiendo la luz en una obra de arte en tu hogar.</h4>
                        </div>

                        <div class="row justify-content-around" id="products1">

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion1.jpg" alt="Producto 1">
                                <h4>Mesa De Mármol</h4>
                                <p class="price">€250</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion2.jpg" alt="Producto 2">
                                <h4>Redonda De Cerámica</h4>
                                <p class="price">€525</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion3.jpg" alt="Producto 3">
                                <h4>Lámpara De Bronce</h4>
                                <p class="price">€250</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion4.jpg" alt="Producto 4">
                                <h4>Tibor Griego De Cerámica </h4>
                                <p class="price">€450</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion5.jpg" alt="Producto 5">
                                <h4>Antiguo Farol De Pared</h4>
                                <p class="price">€140</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="VISTA/img/iluminacion6.jpg" alt="Producto 6">
                                <h4>Farol De Bronce Y Latón</h4>
                                <p class="price">€230</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>


            </main>' ;
    }
    
    
    public static function mueblesTienda(){
        
        echo ''
        . '<main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">

                <div class=" titulos col-12 text-center mb-5">
                    <h1>Muebles</h1>
                    <h4>Encuentra elegancia y comodidad en nuestra colección de muebles <br>
                            que fusiona diferentes estilos con funcionalidad atemporal.</h4>
                </div>

                <div class="row justify-content-around" id="products1">

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/mueble1.jpg" alt="Producto 1">
                            <h4>Aparador Castellano</h4>
                            <p class="price">€2500</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/mueble2.jpg" alt="Producto 2">
                            <h4>Secreté Artesanal</h4>
                            <p class="price">€5000</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/mueble3.jpg" alt="Producto 3">
                            <h4>Secreté Escritorio</h4>
                            <p class="price">€5150</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/mueble4.jpg" alt="Producto 4">
                            <h4>Taburetes Rústicos</h4>
                            <p class="price">€850</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                            <img src="VISTA/img/mueble5.jpg" alt="Producto 5">
                            <h4>Mueble Chinero</h4>
                            <p class="price">€6500</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">                        <img src="VISTA/img/mueble6.jpg" alt="Producto 6">
                            <h4>Mesilla Pino Rústica</h4>
                            <p class="price">€670</p>
                            <input type="number" min="1" value="1">
                            <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>
                </div>
            </div>


        </main>' ;
    }
    
    
    // --------------------------------------------------------------
    // ------------------- HOJAS DE ESTILO --------------------------
    // --------------------------------------------------------------


    public static function hojaEstilosAbout() {
        
        echo ''
        . '<style>

            .icon-container {
                display: flex;
                align-items: center;
            }

            .rotate {
                transform: rotate(180deg);
                transition: transform 0.3s ease;
            }

            .info {
                display: none;
            }

            .show-info .info {
                display: block;
            }

            /* Personalización de estilos para los botones del acordeón */
            .accordion-button:not(.collapsed) {
                background-color: transparent;
                /* Cambiar el color de fondo cuando está activo */
                color: #000;
                /* Cambiar el color del texto cuando está activo */
                border-color: transparent;
                /* Opcional: eliminar el borde cuando está activo */
            }

            .accordion-button:not(.collapsed):hover {
                background-color: rgba(0, 0, 0, 0.1);
                /* Cambiar el color de fondo en el hover cuando está activo */
                border-color: transparent;
            }

            .accordion-button.collapsed {
                background-color: transparent;
                /* Cambiar el color de fondo cuando está inactivo */
                color: #000;
                /* Cambiar el color del texto cuando está inactivo */
                border-color: transparent;
                /* Opcional: eliminar el borde cuando está inactivo */
                border-color: transparent;
            }

            .accordion-button.collapsed:hover {
                background-color: rgba(0, 0, 0, 0.1);
                /* Cambiar el color de fondo en el hover cuando está inactivo */

            }

            footer p,
            a {
                font-size: 14px;
            }

        </style>' ;
    }
    
}


/*
 * Esta hoja de estilos forma parte del diseño original. Hace el logo más 
 * pequeño y en principio queda mejor sin este efecto. Guardamos aquí el enlace 
 * por si hay que rescatarlo.
 */

// <link rel="stylesheet" href="VISTA/css/estilo_logo.css">
