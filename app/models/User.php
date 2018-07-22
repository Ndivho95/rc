<?php

class User{
    // store the database reference
    private $db;
    
    public function __construct(){
        //instantiate the database object
        $this->db = new Database();
    }
    
    public function register($data){
        $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }
        
    }
    
    #check to see if the user was previously registered
    public function findUserByEmail($email){
        //takes a query and prepares it
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        //return a single row
        $row = $this->db->single();
        
        //Check row
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
        
    }
}