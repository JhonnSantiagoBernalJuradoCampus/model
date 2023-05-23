<?php

    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');


    echo info::getinfo();
?>