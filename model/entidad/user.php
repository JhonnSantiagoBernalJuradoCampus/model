<?php
    class user{
        static $config = array(
            "http"=>["header"=>"Content-Type: application/json"]
        );
        public $usuario;
        protected $contrasena;
        public function __construct($usuario, $contrasena){
            $this->usuario = $usuario;
            $this->contrasena = $contrasena;
        }
        public function getUser(){
            self::$config["http"]["method"] = "GET";
            $res = file_get_contents("http://localhost:4000/users?nombre=".$this->usuario."&pw=".$this->contrasena, false, stream_context_create(self::$config));
            return $res;
        }
    }
?>