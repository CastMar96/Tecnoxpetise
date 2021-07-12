<?php

require_once 'model/login.model.php';
class LoginController{

    private $model;
    public $active = 'login'; //for highlighting the active link...
    private $loginModel;


    public function __CONSTRUCT(){
        $this->model = new Login();
        
    }
    
    public function Index(){
        require_once 'view/loginheader.php';
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
    }   

    public function login(){
            $reslt=$this->model->login();
            if($reslt=='login')
            {
         require_once 'view/header.php';
         require_once 'view/header.dashboard.php';
        require_once 'view/dashboard/dashboard.php';
        require_once 'view/footer.php';
            }
            else
            {
                
                require_once 'view/loginheader.php';
                require_once 'view/login/login.php';
                require_once 'view/footer.php';
            }
        }

        public function logout()
        {
            $this->model->logout();
            require_once 'view/loginheader.php';
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
        }
        

    

}
 ?>