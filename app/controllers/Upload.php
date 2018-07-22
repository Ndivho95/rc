<?php
class Upload extends Controller{
    public function __construct(){
        $this->uploadModel = $this->model('uploads');
    }
    
    public function index(){
        $data = [
         'title' => 'Upload CSV File',
        ];
        
        $this->view('upload/csv', $data);
    }
    
    public function csv(){
        
        //if upload button is clicked
        if(isset($_POST['upload'])){
            //check if the file
            if($_FILES['csv_file']['name']){
                //store file name
                $filename = explode(".", $_FILES['csv_file']['name']);
                //check if file is csv
                if(end($filename) == "csv"){
                    $handle = fopen($_FILES['csv_file']['tmp_name'], "r");
                    $count = 0;
                    //upload values from csv to database
                    //NB: csv to be uploaded must match the columns in the database
                    while(($results = fgetcsv($handle, 1000, ";")) !== false){
                       $count += 1;

                       if($count !== 1){
                           $student = explode(",",$results[0]);
                           
                           $student_details = [
                               'student_number' => $student[1],
                               'student_name' => $student[2],
                               'student_surname' => $student[3]
                           ];
                           
                           //upload every single row of the csv file to the database
                           if(!$this->uploadModel->uploadStudent($student_details)){
                               break;
                           }

                       }

                   }
                    
                    $value_count = $this->uploadModel->valueCount();
                    
                    if($value_count >= 0){
                        flash('upload_csv_success', "'$value_count' row(s) uploaded successfully");
                        
                    }
                    
                }
            }
        }
        
        $data = [
             'title' => 'Upload CSV File',
             'count' => ""
            ];
        
        $this->view('upload/csv', $data);
    }
    
    public function excel(){
        $data = [
             'title' => 'Upload Excel File',
        ];
        
        $this->view('upload/excel', $data);
    }
    
    
}