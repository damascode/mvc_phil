<?php

class Logout extends Controller {

    function __construct() {
        parent::__construct();
        $this->session = new Session();   
        $this->session->init(); 
    }
    
    function index() 
    {    
        $this->session->destroy();
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}