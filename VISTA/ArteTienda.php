
<?php
    require_once 'VISTA/Header.php';
?>

        <!--Migas de pan-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=home">Inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=mueblesTienda">Muebles</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=decoracionTienda">Decoración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arte</li>
            </ol>
        </nav>
        <main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">


                <div class=" titulos col-12 text-center mb-5">
                    <h1>Arte</h1>
                    <h4>Embellece tus paredes con obras que cuentan historias y despiertan emociones, <br>
                        transformando tu hogar en un lienzo de expresión artística.
                        </div>

                        <div class="row justify-content-around" id="products1">

                        <?php

                            require_once 'MODELO/Modelo.php';
                            require_once 'MODELO/BBDD.php';
                            require_once 'CONTROL/Productos.php';

                            $array = Modelo::consultarProductosCategoria("Arte") ;

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
                                <img src="img/arte1.jpg" alt="Producto 1">
                                <h4>Oleo Sobre Lienzo San Pedro</h4>
                                <p class="price">€7250</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="img/arte2.jpg" alt="Producto 2">
                                <h4>Lámina Virgen y niño</h4>
                                <p class="price">€1125</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                                <img src="img/arte3.jpg" alt="Producto 3">
                                <h4>Lamina Renacentista</h4>
                                <p class="price">€2450</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>

                            <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                                <img src="img/arte4.jpg" alt="Producto 4">
                                <h4>Racimos De Uvas</h4>
                                <p class="price">€1970</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                                <img src="img/arte5.jpg" alt="Producto 5">
                                <h4>Oleografía De La Adoración</h4>
                                <p class="price">€2700</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div>


                            <div class="col-xl-3 col-md-6 col-12 d-flex flex-column">
                                <img src="img/arte6.jpg" alt="Producto 6">
                                <h4>Paseo siglo XVIII</h4>
                                <p class="price">€3000</p>
                                <input type="number" min="1" value="1">
                                <button class="add-to-cart m-2">Añadir al Carrito</button>
                            </div> -->

                        </div>
                </div>
        </main>

        <?php
            require_once 'VISTA/Footer.php' ;
        ?>