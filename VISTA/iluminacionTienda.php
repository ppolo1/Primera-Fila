
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <title> Tienda - Iluminación </title>

    </head>

    <body>

        <?php
        require_once './Header.php';
        require_once './BarraNavegacion.php';
        ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="mueblesTienda.html">Muebles</a></li>
                <li class="breadcrumb-item"><a href="arteTienda.html">Arte</a></li>
                <li class="breadcrumb-item"><a href="decoracionTienda.html">Decoración</a></li>
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

                    <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
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
                    </div>
                </div>
            </div>


        </main>

        <?php
        require_once './Footer.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/javaScript.js"></script>
    </body>
</html>