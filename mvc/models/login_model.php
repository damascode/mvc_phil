<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();    
        $this->session = new Session();
    }

    function Login($e, $p){
        $pw     = hash('sha256', $p);
        $q1     = "SELECT * from users where email = '$e'";
        $result = $this->db->query($q1)->rowCount();
        if($result > 0){
            $q2     = "SELECT * from users where email = '$e' and hash = '$pw'";
            $result = $this->db->query($q2)->rowCount();
            if($result > 0){
                $user = $this->getUserData($e, $pw);
                $this->session->init();
                $this->session->set('name', $user['first_name']);
                $this->session->set('lname', $user['last_name']);
                $this->session->set('type', $user['type_name']);
                $this->session->set('email', $e);
                return 'success';
            }else{
                return 1;
            }
        }else{
            return 0;
        }
    }

    private function getUserData($e, $p){
        $sql      = "SELECT first_name, last_name, levels.type_name from users 
        INNER JOIN levels ON users.level = levels.id
        WHERE email = '$e' and hash = '$p'";
        $response = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $response;
    }

    function setCookie(){
        //function to create cookies 
    }
}