<?php
    header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');


    $res = new user("nicolas", "321M");
    echo $res->getUser();
?>