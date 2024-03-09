
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
        <title> Home </title>
        <style>
        .slider-frame img {
            width: 100%;
            height: 100%;
        }

    </style>
    </head>

    <body>
        <?php
        require_once './Header.php';
        require_once './BarraNavegacion.php';
        ?>
        
         <nav class="navbar bg-light" style="text-align: center; height: 30%;">
        <div class="container-fluid d-flex flex-column align-items-center">
          <h1 class="text-center mb-2 mt-3" style="color: #503B0A; font-size: 3em; margin-top: -20px; font-family: 'primeraFila';">EON LUX ANTIQUES</h1>
          <p class="text-center mb-3" style="font-family: 'primeraFila'; font-size: 35px;">Dinos qué buscas y lo haremos realidad para ti</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a id="registro" class="btn btn-primary btn-lg" href="form_registro.html" role="button" style="background-color: #503B0A;">Regístrate</a>
          </div>
        </div>
      </nav>

        <main>
            <div class="slider-frame">
                <ul>
                    <li><img src="img/antiguedades1.png"></li>
                    <li><img src="img/telefono.jpg"></li>
                    <li><img src="img/estanteria.jpg"></li>
                    <li><img src="img/decoracion.jpg"></li>
                </ul>
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