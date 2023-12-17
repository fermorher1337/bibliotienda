<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];
    require '../vendor/autoload.php';
    $usuario = new Bibliotienda\Usuario;
    $resultado = $usuario->login($nombre_usuario, $clave);

    if ($resultado) {
        header('Location:dashboard.php');
        session_start();
        $_SESSION['usuario_info']=array(
            'nombre_usuario'=>$resultado['nombre_usuario'],
            'estado'=>1
        );
    } else {
        $mensaje_error = json_encode('Error al iniciar sesion');
        exit($mensaje_error);
        
    }

}