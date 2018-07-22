<?php
class Player{
    
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    public function playerInfo(){
        $this->db->query('SELECT * FROM player');

        $row = $this->db->resultSet();

        
        if(!empty($row)){
            return $row;
        }else{
            return false;
        }
    }
    
    public function addPlayer($data){
        $this->db->query('INSERT INTO player (name, surname, age, position) VALUES (:name, :surname, :age, :position)');
        
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':position', $data['position']);
        
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}