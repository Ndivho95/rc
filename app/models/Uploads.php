<?php

class Uploads{
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    public function uploadStudent($data){
        $this->db->query('INSERT INTO students (student_number, student_name, student_surname) VALUES (:student_number, :name, :surname)');
        
        //Bind values
        $this->db->bind(':student_number', $data['student_number']);
        $this->db->bind(':name', $data['student_name']);
        $this->db->bind(':surname', $data['student_surname']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    public function valueCount(){
        $this->db->query('SELECT student_number FROM students');

        $row = $this->db->resultSet();
        
        $count = $this->db->rowCount();
        
        if($count > 0){
            return $count;
        }else{
            return false;
        }
    }
}

?>