<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bibliotienda</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Bibliotienda</a>
      </div>

    </div>
  </nav>

  <div class="container" id="main">

    <form action="login.php" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="text-center"> ACCEDER AL PANEL</h3>
        </div>
        <div class="panel-body">
          <p class="text-center">
            <img src="../assets/imagenes/logo.png" alt="">
          </p>
          <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="Introduce tu usuario" required>
          </div>
          <div class="form-group">
            <label>Clave</label>
            <input type="password" class="form-control" name="clave" placeholder="Introduce tu contrasena" required>
          </div>
         <button type="submit" class="btn">Iniciar sesión</button> 
        </div>
      </div>
    </form>
  </div>
  </form>

  <?php
  require '../vendor/autoload.php';
  $libro = new Bibliotienda\Libro;



  ?>


  </div> <!-- /container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>