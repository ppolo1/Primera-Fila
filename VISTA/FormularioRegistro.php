<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleRegistro.css">

        <title> Formulario de Registro </title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container py-5">
            <h2 class="mb-4 text-center">Registro de Usuario</h2>
            <form action="#" method="post" id="formularioRegistro" novalidate>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Obligatorio">
                        <span id="errorNombre"></span>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido1" class="form-label">Primer Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Obligatorio">
                        <span id="errorApellido"></span>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido2" class="form-label">Segundo Apellido:</label>
                        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido">
                    </div>
                    <div class="col-md-6">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Obligatorio">
                        <div>
                            <p id="errorPassword"></p>
                            <ul id="listaRequisitosPassword">
                                <li id="caracteresMinimos"> Debe tener un mínimo de 8 caracteres </li>
                                <li id="caracteresMaximos"> Debe tener un máximo de 15 caracteres </li>
                                <li id="mayusculaObligatoria"> Debe contener al menos una mayúscula </li>
                                <li id="minusculaObligatoria"> Debe contener al menos una minúscula </li>
                                <li id="digitoObligatorio"> Debe contener al menos un dígito </li>
                                <li id="espaciosProhibidos"> No debe contener espacios </li>
                                <li id="caracterEspecialObligatorio"> Debe contener al menos un carácter especial </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirmarContrasena" class="form-label">Repetir Contraseña:</label>
                        <input type="password" class="form-control" id="confirmarContrasena" name="confirmarContrasena" placeholder="Obligatorio">
                        <span id="errorPasswordRepetida"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
                        <span id="errorDni"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="genero" class="form-label">Género:</label>
                        <select class="form-select" id="genero" name="genero">
                            <option selected>Selecciona</option>
                            
                            <?php
                            require_once '../CONTROL/Genero.php' ;
                            require_once '../MODELO/Modelo.php';
                            require_once '../MODELO/BBDD.php' ;
                            
                            $array = Modelo::consultarGenero() ;
                            $render = "" ;
                            
                            foreach ($array as $key => $value) {
                                
                                $render.= '<option value="'. $value->getTipo() .'"> '. $value->getTipo() .' </option>' ;
                            }
                            echo $render ;
                            
                            ?>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                        <span id="errorFecha"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="pais" class="form-label">País:</label>
                        <select class="form-select" id="pais" name="pais">
                            <option selected> Selecciona </option>
                            
                            <?php
                            require_once '../CONTROL/Pais.php' ;
                            require_once '../MODELO/Modelo.php';
                            require_once '../MODELO/BBDD.php' ;
                            
                            $array = Modelo::consultarPaises() ;
                            $render = "" ;
                            
                            foreach ($array as $key => $value) {
                                
                                $render.= '<option value="'. $value->getNombre() .'"> '. $value->getNombre() .' </option>' ;
                            }
                            echo $render ;
                            
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefonoInput" name="telefonoInput" placeholder="telefono">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Obligatorio">
                        <span id="errorEmail"></span>
                    </div>
                    <div class="col-12">
                        <input type="checkbox" class="form-check-input" id="subscripcionInput" name="subscripcionInput">
                        <label>
                            Subscribirse
                        </label>
                    </div>
                </div>

                <br>
                <section class="d-flex justify-content-between">
                    <button type="submit" aria-label="Enviar registro" class="btn btn-dark text-light" id="registro" name="registro">
                        Registrarme</button>
                    <input type="reset" id="botonResetear" value="Resetear valores" aria-label="Resetear los valores del formulario" class="btn btn-dark text-light">
                </section>
            </form>
            <p id="mensajeRegistro"></p>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
        <script src="js/jsRegistro.js"></script>
    </body>
</html>

