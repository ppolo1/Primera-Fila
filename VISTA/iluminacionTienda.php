
<?php
    require_once 'VISTA/Header.php';
?>

        <style>
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
                background-color: transparent; /* Cambiar el color de fondo cuando está activo */
                color: #000; /* Cambiar el color del texto cuando está activo */
                border-color: transparent; /* Opcional: eliminar el borde cuando está activo */
            }

            .accordion-button:not(.collapsed):hover {
                background-color: rgba(0, 0, 0, 0.1); /* Cambiar el color de fondo en el hover cuando está activo */
                border-color: transparent;
            }

            .accordion-button.collapsed {
                background-color: transparent; /* Cambiar el color de fondo cuando está inactivo */
                color: #000; /* Cambiar el color del texto cuando está inactivo */
                border-color: transparent; /* Opcional: eliminar el borde cuando está inactivo */
                border-color: transparent;
            }

            .accordion-button.collapsed:hover {
                background-color: rgba(0, 0, 0, 0.1); /* Cambiar el color de fondo en el hover cuando está inactivo */

            }
            footer p,a{
                font-size: 14px;
            }

        </style>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=home">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre Nosotros</li>
            </ol>
        </nav>

        <main>
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
        </main>
        
        <?php
            require_once 'VISTA/Footer.php' ;
        ?>
