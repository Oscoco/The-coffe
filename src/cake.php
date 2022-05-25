<?php

    namespace Thecoffe;

    class cake{

        private  $config;
        private $cn =null;


        public function __construct(){

            $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

            $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'], $this->config['clave'],array(

                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));

        }
        
    }