<?php

class Myfiles_Model extends Model {

    function __construct() {
        parent::__construct();    
    }

    function getFiles(){
        $id  = $this->getMyIdByEmail($_SESSION['email']); 
        $sql = "SELECT * FROM files WHERE user_id = $id";
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    private function getMyIdByEmail($e){
        $sql    = "SELECT id FROM users WHERE email = '$e'";
        $result = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }
}