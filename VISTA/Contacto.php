
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

        <title> Contacto </title>

    </head>

    <body>
        <?php
        require_once './Header.php';
        require_once './BarraNavegacion.php';
        ?>

        <main>
            <div class="container-fluid mt-5">
                <div class="row d-flex justify-content-around">

                    <div class="localizacion col-12 col-md-5 col-xl-5 text-center mt-3">
                        <h1>Localización</h1>
                        <p>Calle Primavera, 7 <br>
                            Pueblo Encantado <br>
                            Provincia de Sueños <br>
                            Código Postal: 24321 <br>
                            España</p>
                        <h2>Número de Contacto</h2>
                        <p>+34621457895</p> 
                        <h2>Horario de Atención al Cliente</h2>
                        <p>10:00 a 14:00 y de 17:00 a 20:00</p> 
                        <h2> Síganos en Redes Sociales</h2>
                        <div class="social-icons-contacto">
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>                
                        </div>
                    </div>


                    <form class="col-12 col-md-5 col-xl-5 mt-3">
                        <h1 class="localizacion">Formulario de Contacto</h1>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre y Apellidos</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>   
            </div>
        </main>

        <?php
        require_once './FooterContacto.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/javaScript.js"></script>
    </body>
</html>