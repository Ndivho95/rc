<?php
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('user');
        }
        
        public function register(){
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
                
                //velidate Name
                if(empty($data['name'])){
                    $data['name_err'] = 'Please enter your name';
                }else{
                    if(strlen($data['name']) < 2){
                        $data['name_err'] = 'Name length must be more than 2 characters';
                    }
                }
                
                //velidate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter your email';
                }elseif($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email already exist';
                }
                
                //velidate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter your password';
                }elseif(strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must be greater than or equal to 6 characters';
                }
                
                //velidate Password Confirmation
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please re-enter password';
                }else{
                    if($data['confirm_password'] != $data['password']){
                        $data['confirm_password_err'] = 'Passwords do not match';
                    }
                }
                
                if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err'])
                  && empty($data['confirm_password_err'])){
                    //hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    
                    //register user
                    if($this->userModel->register($data)){
                        //flash
                        flash('register_success', 'You are register and can log in');
                        redirect('users/login');
                    }else{
                        die('Something went wrong when registering the user');
                    }
                }else{
                    //Load view with error
                    $this->view('users/register', $data);
                }
                
            }else{
                //init data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
                //load view
                $this->view('users/register', $data);
            }
            
        }
        
        public function login(){
            //chech for post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                //init data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']), 
                    'email_err' => '',
                    'password_err' => ''
                ];
                
                //validate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }
                
                
                //validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }
                
                //check for user/email
                if($this->userModel->findUserByEmail($data['email'])){
                    //User found
                }else{
                    $data['email_err'] = 'No User found';
                }
                
                //Make sure errors are empty
                if(empty($data['email_err']) && empty($data['password_err'])){
                    //validated
                    //check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                    
                    if($loggedInUser){
                        //create session
                        $this->createUserSession($loggedInUser);
                        redirect('index');
                    }else{
                        $data['password_err'] = 'Password incorrect';

                        $this->view('users/login', $data);
                    }
                }else{
                   
                    //Load view with error
                     $this->view('users/login', $data);
                }
                //Process form
            }else{
                //init data
                $data = [
                    
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                    
                ];
                
                //load view
                $this->view('users/login', $data);
            }
        }
        
        public function createUserSession($user){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_name'] = $user->name;
            redirect('index');
        }
        
        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            session_destroy();
            redirect('users/login');
        }
        
        public function isLoggedIn(){
            if(isset($_SESSION['user_id'])){
                return true;
            }else{
                return false;
            }
        }
            
    }