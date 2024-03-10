
<?php
    require_once 'VISTA/Header.php';
?>

        <!--Migas de pan-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=home">Inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=mueblesTienda">Muebles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Decoración</li>
            </ol>
        </nav>

        <main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">

                <div class=" titulos col-12 text-center mb-5">
                    <h1>Decoración</h1>
                    <h4>Inspira tus espacios con detalles encantadores que reflejan tu estilo personal <br>
                        y agregan un toque de creatividad a tu hogar.</h4>
                </div>

                <div class="row justify-content-around" id="products1">


                <?php

                        require_once 'MODELO/Modelo.php';
                        require_once 'MODELO/BBDD.php';
                        require_once 'CONTROL/Productos.php';

                        $array = Modelo::consultarProductosCategoria("Decoracion") ;

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
                        <img src="img/decoracion1.jpg" alt="Producto 1">
                        <h4>Plato Antiguo</h4>
                        <p class="price">€250</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/decoracion2.jpg" alt="Producto 2">
                        <h4>Cibeles de Resina</h4>
                        <p class="price">€125</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/decoracion3.jpg" alt="Producto 3">
                        <h4>Busto de Águila</h4>
                        <p class="price">€450</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/decoracion4.jpg" alt="Producto 4">
                        <h4>Tibor Griego De Cerámica </h4>
                        <p class="price">€570</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>


                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/decoracion5.jpg" alt="Producto 5">
                        <h4>Globo Terraqueo Vintage</h4>
                        <p class="price">€300</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/decoracion6.jpg" alt="Producto 6">
                        <h4>Tetera de Latón</h4>
                        <p class="price">€100</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div> -->
                </div>
            </div>


        </main>
        
        <?php
            require_once 'VISTA/Footer.php' ;
        ?>