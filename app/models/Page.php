<?php

class Page{
    
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    public function getStudents(){
        $this->db->query('SELECT * FROM students');

        $row = $this->db->resultSet();
        
        if(!empty($row)){
            return $row;
        }else{
            return false;
        }
    }
}

?>