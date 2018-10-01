<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->session = new Session();
        $this->session->init();
    }
    
    function index() {
       
        if(isset($_SESSION['name'], $_SESSION['lname'])){
            $this->view->name  = $_SESSION['name'];
            $this->view->lname = $_SESSION['lname'];
            $this->view->title = 'Loged';
            $this->view->render('header');
            $this->view->render('login/index');
        }else{
            $this->view->title = 'Home';
            $this->view->render('header');
            $this->view->render('index/index');
        }
      
       
    }
    
}