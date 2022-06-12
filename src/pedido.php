<?php

    namespace Thecoffe;

    class pedido{

        private  $config;
        private $cn =null;


        public function __construct(){

            $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

            $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'], $this->config['clave'],array(

                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));

        }

        public function registrar($_params) {
            $sql = "INSERT INTO `peliculas`(`nombre`, `apellidos`, `email`, `telefono`, `comentario`) VALUES (:nombre, :apellidos, :email, :telefono, :comentario)";

            $resultado = $this->cn->prepare($sql);

            $_array = array(
                ":nombre" => $_params['nombre'], 
                ":apellidos" => $_params['apellidos'], 
                ":emal" => $_params['emal'], 
                ":telefono" => $_params['telefono'], 
                ":comentario" => $_params['comentario'], 
            );

                if($resultado-> execute($_array))
                    return $this->cn->lastInsertId();

                return false;


        }




      
    }