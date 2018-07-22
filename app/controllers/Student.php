<?php

class Student extends Controller{
    public function __construct(){
         $this->studentModel = $this->model('students');
     }
    
    public function index($id){
        
        $student = $this->studentModel->getStudent($id);
        $data = [
            'student' => $student
        ];
        
        $this->view('student/index', $data);
    }
    
//    public function show($id){
//        $student = $this->studentModel->getStudent($id);
//        $data = [
//            'title' => 'Student Info'
//        ];
//        
//        $this->view('student/index', $data);
//    }
}

?>