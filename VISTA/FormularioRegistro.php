
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Se enlaza con la librería que está en la carpeta Local-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Formulario Registro</title>
        <style>
            body {
                background: linear-gradient(to bottom, #D3A97B, #fff); /* Fondo del cuerpo */
            }

            .btn-primary, .btn-secondary {
                background-color: #D3A97B; /* Color de fondo para botones */
                border-color: #503B0A; /* Color del borde para botones */
            }

            .btn-primary:hover, .btn-secondary:hover {
                background-color: #C5A068; /* Color de fondo al pasar el ratón */
                border-color: #402A07; /* Color del borde al pasar el ratón */
            }

            .form-control {
                border: 2px solid #503B0A; /* Color del borde para inputs */
            }

            .alert-success, .alert-danger {
                background-color: #D3A97B; /* Fondo de alertas */
                border-color: #503B0A; /* Borde de alertas */
                color: #503B0A; /* Color del texto de alertas */
            }

            /* Otras personalizaciones de estilo pueden ir aquí */
        </style>
    </head>
    <body>
        <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
            <h1 class="text-center mb-4">Nuevo Registro</h1>
            <form action="" method="POST" id="formulario_register" name="formulario_registro" class="w-75 bg-light p-5 rounded">
                <!-- USERNAME -->
                <fieldset>
                    <legend class="d-none">Nombre de usuario</legend>
                    <div class=" input-group">
                        <label for="usuario" class="d-none"> Nombre de Usuario (Obligatorio)</label>
                        <input type="usuario" name="usuario" id="usuario" placeholder="Nombre de Usuario" class="form-control w-100" required>
                        <span></span>
                    </div>

                    <!-- USERNAME ALERT -->
                    <p id="username_alert" class="text-danger">
                </fieldset>

                <!-- NAME & SURNAME -->
                <fieldset>
                    <legend class="d-none">Nombre y Apellidos</legend>
                    <div class=" input-group">
                        <label for="nombre" class="d-none"> Nombre (Obligatorio)</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
                        <span></span>
                        <label for="apellidos" class="d-none"> Apellidos (Obligatorio)</label>
                        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="form-control" required>
                        <span></span>
                    </div>

                    <!-- NAME & SURNAME ALERT -->
                    <p id=" nombre_alert" class="text-danger">
                    <p id="apellidos_alert" class="text-danger">
                </fieldset>

                <!-- EMAIL -->
                <fieldset>
                    <legend class="d-none">E-mail</legend>
                    <div class=" input-group">
                        <label for="email" class="d-none"> E-mail (Obligatorio)</label>
                        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                        <span></span>
                    </div>

                    <!-- NAME & SURNAME ALERT -->
                    <p id="email_alert" class="text-danger">
                </fieldset>

                <!-- PASSWORD -->
                <fieldset>
                    <legend class="d-none">Contraseña</legend>
                    <div class=" input-group">
                        <label for="password_1" class="d-none"> Contraseña (Obligatorio)</label>
                        <input type="password" name="password_1" id="password_1" placeholder="Contraseña" class="form-control" required>
                        <span></span>
                        <label for="password_2" class="d-none"> Repetir Contraseña (Obligatorio)</label>
                        <input type="password" name="password_2" id="password_2" placeholder="Repetir Contraseña" class="form-control" required>
                        <span></span>
                    </div>

                    <!-- PASSWORD ALERTS -->
                    <div id="password_alerts" class="my-3 text-danger"></div>
                    <div id="password_alert_match" class="my-3 text-danger"></div>
                </fieldset>

                <!-- AVATAR -->
                <fieldset>
                    <legend class="d-none">Avatar</legend>
                    <div class="input-group">
                        <label for="avatar" class="input-group-text">Avatar</label>
                        <input type="file" accept="image/jpeg" class="form-control" id="avatar" name="avatar">
                    </div>
                    <p></p>
                </fieldset>

                <!-- CHECKBOXES -->
                <fieldset class="mb-3">
                    <legend class="d-none">Notificaciones y suscripción</legend>

                    <!-- SUSCRIPCIÓN -->
                    <label class="form-check">
                        <input type="checkbox" name="suscripcion" id="suscripcion" checked>
                        Quiero suscribirme y recibir información periódica.
                    </label>
                </fieldset>

                <!-- SUBMIT -->
                <section class="d-flex justify-content-between">
                    <button type="submit" aria-label="Enviar formulario" class="btn btn-primary" id="registro">
                        Enviar formulario</button>
                    <input type="reset" value="Resetear valores" aria-label="Resetear los valores del formulario" class="btn btn-secondary">
                </section>

                <section id="alert" class="my-3"> </section>
                <div class="alert alert-success alert-dismissible fade show" role="alert-success" style="display:none">
                    Bienvenid@.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert-failure" style="display:none">
                    Los datos de registro <strong>no coinciden</strong>.
                    <button type="submit" class="btn btn-primary w-100">Enviar formulario</button>
            </form>
        </div>
    </div>
    <!--Se enlaza con la librería js que está en la carpeta Local-->
    <script src="js/popper.min.js"></script><!--Esto es lo nuevo-->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

