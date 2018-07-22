<?php
/*
class Admin extends Controller{
    
    public function __construct(){
        $this->adminModel = $this->model('player');
    }
    
    public function dashboard(){
        $data = [
            'title' => 'Dashboad'
        ];
        
        $this->view('admin/dashboard', $data);
    }
    
    public function fixture(){
        $data = [
            'title' => 'Fixtures'
        ];
        
        $this->view('admin/fixture');
    }
    
    public function players(){
        $data = [
            'title' => 'Products'
        ];
        
        $this->view('admin/players');
    }
    
    public function reports(){
        $data = [
            'title' => 'Reports'
        ];
        
        $this->view('admin/reports');
    }
    
    public function charts(){
        $data = [
            'title' => 'Charts'
        ];
        
        $this->view('admin/charts');
    }
    
    public function tables(){
        $data = [
            'title' => 'Table'
        ];
        
        $this->view('admin/tables');
    }
    
    public function u10(){
        $data = [
            'title' => 'Table'
        ];
        
        $this->view('admin/u10');
    }
    
    public function u11(){
        $data = [
            'title' => 'Table'
        ];
        
        $this->view('admin/u11');
    }
    
    public function u12(){
        $players = $this->adminModel->playerInfo();
        
        $data = [
            'posts' => $players
        ];
            
        
        $this->view('admin/u12', $data);
    }
    
    public function u13(){
        $data = [
            'title' => 'Table'
        ];
        
        $this->view('admin/u13');
    }
}
*/