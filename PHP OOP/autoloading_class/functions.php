<?php

    function load_model($class_name){
        $path_to_file = 'models/' . $class_name . '.php';

        if(file_exists($path_to_file)){
            require $path_to_file;
        }
    }

    function load_service($service_name){
        $path_to_file = 'services/' . $service_name . '.php';
        if(file_exists($path_to_file)){
            require $path_to_file;
        }
    }

    /**
     * The spl_autoload_register() function accepts a callback function and calls 
     * it when you attempt to create use a class that has not been loaded.
     */
    spl_autoload_register('load_model');
    spl_autoload_register('load_service');