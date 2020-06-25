<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Team Whoami - Login</title>
  
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta name="DC.Language" SCHEME="RFC1766" content="Spanish">
  <meta name="author" content="LordNefilim">
  <meta name="description" content="heciGnuPg">
  <meta name="KEYWORDS" content="palabras clave">
  <meta name="Resource-type" content="Index">
  <meta name="Revisit-after" content="60 days">
  <meta name="robots" content="follow">

  <link rel="icon" href="img/favicon.ico">

  <!-- Bootstrap and custom CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="css/general.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>


</head>
<body>

    <video autoplay loop class="video-background" muted plays-inline>
      <source src="videos/background.webm" type="video/webm">
    </video>


    <!-- Encabezado -->
    <header>
        <img id="logo" class="img-fluid" alt="Responsive image" src="img/whoami.png"/>
        <h1>Team Whoami</h1>
        <p id="slogan">NO_SYSTEM_IS_SAFE</p>
        <p id="subtitle">-- ACADEMY --</p>
    </header>


    <div class="container">

      <div class="forms">

          <form id="form-login" action="" method="post">

              <h2 class="text-center">Iniciar sesión</h2>   
              
              <div class="form-group">
                <label for="username" class="label-edit">Nombre de usuario</label>
                <input type="text" class="form-control" name="username" id="username" required>
              </div>

              <div class="form-group">
                <label for="password" class="label-edit">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              
              <div class="form-group">
                <label for="public-key" class="label-edit">Clave pública</label>
                <div class="custom-file" id="customFile">
                  <input type="file" class="custom-file-input" id="public-key" aria-describedby="fileHelp">
                  <label class="custom-file-label" for="public-key">Seleccionar Archivo</label>
                </div>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-block">Acceder</button>
              </div>

              <div id="link-register"><span class="links-style-forms">¿No tiene una cuenta? Click aquí.</span></div>
          
          </form>

      </div>

      <div class="forms">

            <form id="form-register" action="" method="post">

                <h2 class="text-center">Registrarse</h2>   
                
                <div class="form-group">
                  <label for="username" class="label-edit">Nombre de usuario</label>
                  <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="form-group">
                  <label for="password" class="label-edit">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block">Registrarse</button>
                </div>

                <div id="link-login"><span class="links-style-forms">¿Ya tienes una cuenta? Click aquí.</span></div>

            </form>
            
            <!-- <div id="link-register"><span class="link-register-style">¿No tiene una cuenta? Click aquí.</span></div> -->

        </div>

    </div>


    <footer>
        <p>© All right Reversed. Team Whoami.</p>
    </footer>

    <script src="js/login.js"></script>

</body>
</html>
