<?php

namespace Bibliotienda;

class Libro{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO `libros`(`titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`) 
        VALUES (:titulo,:descripcion,:foto,:precio,:categoria_id,:fecha)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":categoria_id" => $_params['categoria_id'],
            ":fecha" => $_params['fecha'],
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
        $sql = "UPDATE `libros` SET `titulo`=:titulo,`descripcion`=:descripcion,`foto`=:foto,`precio`=:precio,`categoria_id`=:categoria_id,`fecha`=:fecha  WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":categoria_id" => $_params['categoria_id'],
            ":fecha" => $_params['fecha'],
            ":id" =>  $_params['id']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($id){
        $sql = "DELETE FROM `libros` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        $sql = "SELECT libros.id, titulo, descripcion, foto, precio, fecha, estado, categorias.nombre
        FROM libros 
        INNER JOIN categorias
        ON libros.categoria_id = categorias.id
        ORDER BY libros.id DESC;
        ";
        
        $resultado = $this->cn->prepare($sql);

        
        if($resultado->execute())
            return $resultado->fetchAll() ;

        return false;
    }

    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM `libros` WHERE `id`=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }





    
}



