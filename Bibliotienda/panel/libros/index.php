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

    <div class="container" id="main">
        <?php
        require '../../vendor/autoload.php';
        $libro = new Bibliotienda\Libro;
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="form_registrar.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>
                        Nuevo</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <fieldset disabled="disabled">
                    <legend>Listado de libros</legend>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th class="text center">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#</td>
                        <td>El Quijote</td>
                        <td>Miguel de Cervantes</td>
                        <td>10</td>
                        <td>Parodia</td>
                        <td>Foto</td>
                        <td>
                        <a href="form_registrar.php" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span> Borrar</a>
                        <a href="form_registrar.php" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                    </td>
                    </tr>
                
                    </tbody>
                    </table>
                </fieldset> 

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html>