<?php 
    session_start();
    if(isset($_GET["logout"])){
      if($_GET["logout"] =="0"){

        session_destroy();
        header("Location:index.php");
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="../VISTA/css/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="VISTA/css/style.css">
        <!--<link rel="stylesheet" href="../VISTA/css/style.css">-->
        <link rel="stylesheet" href="VISTA/css/styleRegistro.css">
        <!--<link rel="stylesheet" href="../VISTA/css/styleRegistro.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
        <title> Eon Lux Antiques </title>

    </head>

    <body>
        <header class="container-fluid">
            <div class="row align-items-center">
                <div class="navbar navbar-expand-sm navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- Logo a la izquierda para todas las pantallas -->
                <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                    <a href="index.php?pagina=home" class="navbar-brand">
                        <img src="VISTA/img/logo_transparente2.png" alt="Logo" class="img-fluid">
                    </a>
                </div>

                <div class="col-12 d-none d-md-flex col-lg-6 col-xl-6 justify-content-center">
                    <form class="input-group" role="search">
                        <!-- Selector de categorías -->
                        <!-- <select class="form-select btn btn-dark" aria-label="Categorías">
                            <option selected>Todas las categorías</option>
                            <option value="1">Muebles</option>
                            <option value="2">Decoración</option>
                            <option value="3">Arte</option>
                            <option value="4">Iluminación</option>
                        </select> -->
                        <!-- Botón para cargar datos -->
                        <button type="button" id="botonBusqueda">
                            <a href="index.php?pagina=busqueda"> Botón </a>
                        </button>
                        <!-- Entrada de búsqueda -->
                        <input type="text" id="inputBuscador" class="form-control" placeholder="Buscar" aria-label="Buscador de antiguedades" aria-describedby="buscador" style="width: 40%;">
                        <!-- Botón de búsqueda -->
                        <!-- <button type="submit" class="btn btn-dark" name="buscador" id="buscador" role="button" aria-label="Buscar"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg> -->
                        <!-- </button> -->
                    </form>
                </div>


                <!-- Iconos de usuario y carrito a la derecha para todas las pantallas -->
                <div class="col-9 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-end">
                    <a id="logado" href="index.php?pagina=form_logado" class="btn">
                        <button id="logado" class="btn" type="button">
                            <i class="fas fa-user-circle"></i>
                        </button>
                    </a>
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
                            <button id="clear-cart">Comprar</button>
                        </div>
                    </a>
                </div>

                <!-- Buscador solo para móviles, debajo de los iconos -->
                <div class="col-12 d-md-none mt-3">
                    <!-- Buscador centrado para pantallas grandes, oculto en móviles -->
                    <!-- buscador -->
                    <div class=" d-none d-md col-xl-6 col-lg-6 col-md-4 col-sm-4 d-flex justify-content-center">
                        <form class="input-group" role="search">
                            <!-- Selector de categorías -->
                            <select class="form-select btn btn-dark" aria-label="Categorías">
                                <option selected>Todas las categorías</option>
                                <option value="1">Muebles</option>
                                <option value="2">Decoración</option>
                                <option value="3">Arte</option>
                                <option value="4">Iluminación</option>
                            </select>
                            <!-- Entrada de búsqueda -->
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscador de antiguedades" aria-describedby="buscador">
                            <!-- Botón de búsqueda -->
                            <button type="submit" class="btn btn-dark" name="buscador" id="buscador" role="button" aria-label="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

        </header>



        <!-- Barra de navegación debajo del logo y los iconos, visible solo en lg y mayores -->

        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=home"> Inicio </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Tienda
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item smaller-text" href="index.php?pagina=mueblesTienda">Muebles</a></li>
                                <li><a class="dropdown-item smaller-text" href="index.php?pagina=decoracionTienda">Decoración</a></li>
                                <li><a class="dropdown-item smaller-text" href="index.php?pagina=arteTienda">Arte</a></li>
                                <li><a class="dropdown-item smaller-text" href="index.php?pagina=iluminacionTienda">Iluminación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-xl-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=about">Sobre Nosotros</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-xl-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>