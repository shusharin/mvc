<?php

class About {

    function __construct() {
        echo 'We are in About!<br>';
    }
    
    public function other() {
        echo 'function other! <br>';
        
        require 'models/about_model.php';
        $model = new About_Model();
    }
}