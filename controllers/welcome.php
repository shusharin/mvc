<?php

class Welcome extends Core {
    
    function __construct() {
        parent::__construct();
        echo 'This Welcome!';
        $this->view->render('welcome/layout');
    }
}