
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

        <title> Tienda - Muebles </title>

    </head>

    <?php
    require_once './Header.php';
    require_once './BarraNavegacion.php';
    ?>

    <main>

        <!-- Galería de productos -->
        <div class="container-fluid mt-5">

            <div class=" titulos col-12 text-center mb-5">
                <h1>Muebles</h1>
                <h4>Encuentra elegancia y comodidad en nuestra colección de muebles <br>
                    que fusiona diferentes estilos con funcionalidad atemporal.</h4>
            </div>

            <div class="row justify-content-around" id="products1">

                <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
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

    <script src="js/javaScript.js"></script>
</body>
</html>