<?php

class View {

    function __construct() {
       // echo 'This is view controller <br>';
    }
    
    public function render($name){
        require 'views/'.$name.'.php';
    }
}
