<?php

    namespace Thecoffe;

    class Cliente{

        private  $config;
        private $cn =null;


        public function __construct(){

            $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

            $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'], $this->config['clave'],array(

                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));

        }

        public function registrar($_params) {
            $sql = "INSERT INTO `clientes`(`nombre`, `apellidos`, `email`, `telefono`, `comentario`) VALUES (:nombre, :apellidos, :email, :telefono, :comentario)";

            $resultado = $this->cn->prepare($sql);

            $_array = array(
                ":nombre" => $_params['nombre'], 
                ":apellidos" => $_params['apellidos'], 
                ":email" => $_params['email'], 
                ":telefono" => $_params['telefono'], 
                ":comentario" => $_params['comentario'], 
            );
                if($resultado-> execute($_array))
                    return $this->cn->lastInsertId();

                return false;


        }

        // public function registrarDetalle($_params) {
        //     $sql = "INSERT INTO `detalle_pedidos`(`pedido_id`, `pelicula_id`, `precio`, `cantidad`) VALUES (:pedido_id,:pelicula_id,:precio,:cantidad)";

        //     $resultado = $this->cn->prepare($sql);

        //     $_array = array(
        //         ":pedido_id" => $_params['pedido_id'], 
        //         ":pelicula_id" => $_params['pelicula_id'], 
        //         ":precio" => $_params['precio'], 
        //         ":cantidad" => $_params['cantidad'], 
        //     );

        //         if($resultado-> execute($_array))
        //             return true;

        //         return false;


        // }
      
    }