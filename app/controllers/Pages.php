<?php
 class Pages extends Controller{
     public function __construct(){
         $this->pageModel = $this->model('Page');
     }

     public function index(){
         
         $students = $this->pageModel->getStudents();

         $data = [
             'title' => 'North Football League',
             'students' => $students
            ]; 
        
        $this->view('pages/index', $data);
     }

     public function about(){
        $data = [
            'title' => 'About us'
           ];
        $this->view('pages/about', $data);
     }
     
     public function contact(){
         $data = [
            'title' => 'Contact us'
           ];
        $this->view('pages/contact', $data);
     }
     
     public function teams(){
         $data = [
            'title' => 'Teams'
           ];
        $this->view('pages/teams', $data);
     }
     
     public function news(){
         $data = [
            'title' => 'News'
           ];
        $this->view('pages/news', $data);
     }
     
     public function login(){
         $data = [
            'title' => 'News'
           ];
        $this->view('pages/login', $data);
     }
 }