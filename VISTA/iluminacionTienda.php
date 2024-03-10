
<?php
    require_once 'VISTA/Header.php';
?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=home">Inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=mueblesTienda">Muebles</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=arteTienda">Arte</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=decoracionTienda">Decoración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Iluminación</li>
            </ol>
        </nav>

        <main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">


                <div class=" titulos col-12 text-center mb-5">
                    <h1>Iluminación</h1>
                    <h4>Crea atmósferas cautivadoras con nuestra selección de iluminación que añade estilo y sofisticación, <br>
                        convirtiendo la luz en una obra de arte en tu hogar.</h4>
                </div>

                <div class="row justify-content-around" id="products1">

                            <?php

                                require_once 'MODELO/Modelo.php';
                                require_once 'MODELO/BBDD.php';
                                require_once 'CONTROL/Productos.php';

                                $array = Modelo::consultarProductosCategoria("Iluminacion") ;

                                $render = "" ;

                                foreach ($array as $key => $value) {
                                    
                                    $render .= '<div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">' ;
                                    $render .= '<img src="VISTA/img/'. $value->getImagen() .'" alt="Producto '. ($key + 1) .'">' ;
                                    $render .= '<h4>'. $value->getNombre() .'</h4>' ;
                                    $render .= '<p class="price">'. $value->getPrecio() .'€</p>' ;
                                    $render .= '<input type="number" min="1" max="'. $value->getStock() .'" value="1">' ;
                                    $render .= '<button class="add-to-cart m-2">Añadir al Carrito</button>' ;

                                    $render .= '</div>' ;

                                }

                                echo $render ;

                            ?>

                    <!-- <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion1.jpg" alt="Producto 1">
                        <h4>Mesa De Mármol</h4>
                        <p class="price">€250</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion2.jpg" alt="Producto 2">
                        <h4>Redonda De Cerámica</h4>
                        <p class="price">€525</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion3.jpg" alt="Producto 3">
                        <h4>Lámpara De Bronce</h4>
                        <p class="price">€250</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion4.jpg" alt="Producto 4">
                        <h4>Tibor Griego De Cerámica </h4>
                        <p class="price">€450</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion5.jpg" alt="Producto 5">
                        <h4>Antiguo Farol De Pared</h4>
                        <p class="price">€140</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/iluminacion6.jpg" alt="Producto 6">
                        <h4>Farol De Bronce Y Latón</h4>
                        <p class="price">€230</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div> -->
                </div>
            </div>


        </main>

<?php
            require_once 'VISTA/Footer.php' ;
        ?>