
<?php
    require_once 'VISTA/Header.php';
?>

        <!--Migas de pan-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=home">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Muebles</li>
            </ol>
        </nav>

        <main>

            <!-- Galería de productos -->
            <div class="container-fluid mt-5">

                <div class=" titulos col-12 text-center mb-5">
                    <h1>Muebles</h1>
                    <h4>Encuentra elegancia y comodidad en nuestra colección de muebles <br>
                        que fusiona diferentes estilos con funcionalidad atemporal.</h4>
                </div>

                <div class="row justify-content-around" id="products1">

                <?php

                    require_once 'MODELO/Modelo.php';
                    require_once 'MODELO/BBDD.php';
                    require_once 'CONTROL/Productos.php';

                    $array = Modelo::consultarProductosCategoria("Mueble") ;

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
                        <img src="img/mueble1.jpg" alt="Producto 1">
                        <h4>Aparador Castellano</h4>
                        <p class="price">€2500</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/mueble2.jpg" alt="Producto 2">
                        <h4>Secreté Artesanal</h4>
                        <p class="price">€5000</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/mueble3.jpg" alt="Producto 3">
                        <h4>Secreté Escritorio</h4>
                        <p class="price">€5150</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/mueble4.jpg" alt="Producto 4">
                        <h4>Taburetes Rústicos</h4>
                        <p class="price">€850</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
                        <img src="img/mueble5.jpg" alt="Producto 5">
                        <h4>Mueble Chinero</h4>
                        <p class="price">€6500</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div>

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">                       
                        <img src="img/mueble6.jpg" alt="Producto 6">
                        <h4>Mesilla Pino Rústica</h4>
                        <p class="price">€670</p>
                        <input type="number" min="1" value="1">
                        <button class="add-to-cart m-2">Añadir al Carrito</button>
                    </div> -->
                </div>
            </div>


        </main>

        
        <?php
            require_once 'VISTA/Footer.php' ;
        ?>