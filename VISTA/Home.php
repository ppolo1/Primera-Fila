
<?php
    require_once 'VISTA/Header.php';
?>

<style>
    .slider-frame img {
        width: 100%;
        height: 100%;
    }
</style>

<!-- Migas de pan -->
<nav class="navbar bg-light" style="text-align: center; height: 30%;">
    <div class="container-fluid d-flex flex-column align-items-center">
        <h1 class="text-center mb-2 mt-3" style="color: #503B0A; font-size: 3em; margin-top: -20px; font-family: 'primeraFila';">EON LUX ANTIQUES</h1>
        <p class="text-center mb-3" style="font-family: 'primeraFila'; font-size: 35px;">Dinos qué buscas y lo haremos realidad para ti</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a id="registro" class="btn btn-primary btn-lg" href="form_registro" role="button" style="background-color: #503B0A;">Regístrate</a>
        </div>
    </div>
</nav>

<!-- CUERPO -->
<main>
    <div class="slider-frame">
        <ul>
            <li><img src="VISTA/img/antiguedades1.png"></li>
            <li><img src="VISTA/img/telefono.jpg"></li>
            <li><img src="VISTA/img/estanteria.jpg"></li>
            <li><img src="VISTA/img/decoracion.jpg"></li>
        </ul>
    </div>
</main>

<?php
            require_once 'VISTA/Footer.php' ;
        ?>