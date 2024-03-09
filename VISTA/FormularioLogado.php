
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Formulario de Logado</title>
        <style type="text/css">
            body {
                background: linear-gradient(to bottom, #D3A97B, #fff);
            }

            .btn-primary {
                background-color: #D3A97B;
                border-color: #503B0A;
            }

            .btn-primary:hover {
                background-color: #C5A068;
                border-color: #402A07;
            }

            .btn-success {
                background-color: #D3A97B;
                border-color: #503B0A;
            }

            .btn-success:hover {
                background-color: #C5A068;
                border-color: #402A07;
            }


            .form-control {
                border: 2px solid #503B0A;
            }

            .alert-success {
                background-color: #D3A97B;
                border-color: #503B0A;
            }

            .alert-danger {
                border-color: #503B0A;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 100vh;">  
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="post">
                                <h1 class="text-center mb-4">Usuario Registrado</h1>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    <a href="form_registro.html">
                                        <button type="button" class="btn btn-success">Registrarse</button>
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

