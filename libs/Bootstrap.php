<?php

class Bootstrap {

    function __construct() {
        
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //print_r($url);
        
        if(!empty($url[0])){
            $file = 'controllers/' . $url[0] . '.php';
            if(file_exists($file)){
                require $file;
            } else {
                //echo 'error file';
                require 'controllers/error.php';
                $controller = new Error();
                return FALSE;

            } 
        } else {
            $url[0] = 'welcome';
            require 'controllers/' . $url[0] . '.php';
        }
        
       
        $controller = new $url[0];

        if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }

}