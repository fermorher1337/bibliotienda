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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
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
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="pedidos/index.php" class="btn">PEDIDOS <span class="badge">0</span></a>
                    </li>
                    <li>
                        <a href="libros/index.php" class="btn">LIBROS <span class="badge">0</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRADOR <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Salir</a></li>

                        </ul>
                    </li>
                </ul>



            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main" method="../acciones.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col md-12">
                <form>
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" required>
                        <label>Autor</label>
                        <input type="text" class="form-control" required>
                        <label>Precio</label>
                        <input type="text" class="form-control" required>
                        <label>Categoria</label>
                        <select class="form-control" name="categoria_id" required>
                            <option value="">--SELECCIONA UNA CATEGORIA</option>
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                   <button type="submit" class="btn btn-primary">Registrar</button>
                  <a href="index.php"> Cancelar</a>
    <?php
    require '../../vendor/autoload.php';
    $libro = new Bibliotienda\Libro;



    ?>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html>