<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
        $this->view->title = 'Login';
        if(isset($_SESSION)){
            $this->checker->renderLoged('login');
        }else{
            if(isset($_POST['inputEmail'], $_POST['inputPassword'])){
                $email             = $_POST['inputEmail'];
                $pw                = $_POST['inputPassword'];
                $response          = $this->model->logIn($email, $pw);
                if($response == 'success'){
                    $this->renderLoged();
                }else{
                    $this->renderError($response);
                }
            }else{
                $this->renderIndex();
            }
        }
    }

    function renderLoged(){

        $this->view->name  = $_SESSION['name'];
        $this->view->lname = $_SESSION['lname'];
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }
    
    function renderIndex(){
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

    function renderError($n){
        switch($n){
            case 0:
                $this->view->mensage = 'Looks like this user does not exists';
            break;
            case 1:
                $this->view->mensage = 'password: coder_genesis'; 
            break;
        }
        $this->renderIndex();
    }
    
    function run()
    {
        $this->model->run();
    }
    
}