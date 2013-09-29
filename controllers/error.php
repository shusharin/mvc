<?php

class Error extends Core {

    function __construct() {
        parent::__construct();
        //echo 'This is the error';
        $this->view->msg = 'File does not exist';
        $this->view->render('error/layout');
    }

}
