<?php

class Students{
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    public function getStudent($id){
        $this->db->query('SELECT * FROM students WHERE student_number = :id');
        $this->db->bind(':id',$id);
        
        $row = $this->db->single();
        
        return $row;
    }
}

?>