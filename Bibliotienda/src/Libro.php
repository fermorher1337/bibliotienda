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
        $sql="INSERT INTO `libros`(`titulo`, `autor`, `precio`, `categoria_id`, `foto`) VALUES (:titulo, :autor, :precio, :categoria_id, :foto)";
        $resultado=$this->cn->prepare($sql);
        $_array=array(
            ":titulo"=>$_params['titulo'],
            ":autor"=>$_params['autor'],
            ":precio"=>$_params['precio'],
            ":categoria_id"=>$_params['categoria_id'],
            ":foto"=>$_params['foto'],
        );
        if($resultado->execute($_array))
        return true;
        
        return false;
    }
public function actualizar($_params){
    $sql="UPDATE `libros` SET `titulo`=:titulo,`autor`=:autor,`precio`=:precio,`categoria_id`=:categoria_id,`foto`=:foto WHERE `id`=:id";
    $resultado=$this->cn->prepare($sql);
    $_array=array(
        ":titulo"=>$_params['titulo'],
        ":autor"=>$_params['autor'],
        ":precio"=>$_params['precio'],
        ":categoria_id"=>$_params['categoria_id'],
        ":foto"=>$_params['foto'],
        ":id"=>$_params['id'],
    );
    if($resultado->execute($_array))
    return true;
    
    return false;

    }
    public function mostrar(){
        $sql="SELECT
        libros.titulo,
        libros.autor,
        libros.precio,
        libros.categoria_id,
        categorias.nombre AS Genero
      FROM
        libros
      INNER JOIN
        categorias
      ON
        libros.categoria_id = categorias.id;";
        $resultado=$this->cn->prepare($sql);
    
        if($resultado->execute())
        return $resultado->fetchAll();
    return false;  
    }
    public function borrar($_id,$_params){
        $sql="UPDATE `libros` SET `titulo`=:titulo,`autor`=:autor,`precio`=:precio,`categoria_id`=:categoria_id,`foto`=:foto WHERE `id`=:id";
        $resultado=$this->cn->prepare($sql);
        $_array= array(
            ":id"=>$_params['id']
        )  ; 
        if($resultado->execute($_array))
        return true;
    return false;
    }
    public function filtrarID($_id){
        $sql= "'SELECT * FROM `libros` WHERE id=':id";
        $resultado=$this->cn->prepare($sql);
        $_array= array(
            ":id"=>$_id['id']
        )  ; 
        if($resultado->execute())
        return $resultado->fetch();
    return false;  
    }



    
}



