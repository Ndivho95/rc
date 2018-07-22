<?php

class Elective extends Controller{
    public function __construct(){
        //load the model
    }
    
    public function fin(){
        $data = [
            'title' => 'Fintech Students'
        ];
        
        $this->view('electives/fintech', $data);
    }
    
    public function geo(){
        $data = [
            'title' => 'Geometics Students'
        ];
        
        $this->view('electives/geometics', $data);
    }
    
    public function cyber(){
        $data = [
            'title' => 'Cyber Students'
        ];
        
        $this->view('electives/cyber', $data);
    }
    
    public function ai(){
        $data = [
            'title' => 'AI Students'
        ];
        
        $this->view('electives/ai', $data);
    }
}