<?php

class Bootstrap {

    function __construct() {
        
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        print_r($url);
        
        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)){
            require $file;
        } else {
            throw new Exception("The file: $file does not exist!");
        }
       
        $controller = new $url[0];

        if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }

}