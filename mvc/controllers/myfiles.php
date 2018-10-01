<?php

class Myfiles extends Controller {

    function __construct() {
        parent::__construct();
        $this->session = new Session();
        $this->session->init();
    }
    
    function index() {
        if(isset($_SESSION)){
            $this->view->name  = $_SESSION['name'];
            $this->view->lname = $_SESSION['lname'];
            $files             = $this->model->getFiles();
            $response          = $this->buildHtml($files);
            $this->view->files = $response;
            $this->view->render('header');
            $this->view->render('myfiles/index');
            $this->view->render('footer');
        }else{
            $this->view->render('header');
            $this->view->render('index/index');
            $this->view->render('footer');
        }

    }

    function buildHtml($f){
        $html = '<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Format</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>';
        foreach($f as $num => $arr){
            $html .= '<tr>
                    <th scope="row">'.$num.'</th>
                    <td>'.$arr['name'].'</td>
                    <td>'.$arr['type'].'</td>
                    <td><a href="../mvc/public/files/'.$arr['full_name'].'" download="'.$arr['name'].'"><button type="button" class="btn btn-primary">Download</button></a></td>
                    </tr>';
        }
        $html .= ' </tbody>
        </table>';

        return $html;
    }


}