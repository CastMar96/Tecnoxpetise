<?php
require_once 'model/user.model.php';

class UserController{
    
    private $model;
    private $controller;

    public function __CONSTRUCT(){
        $this->model = new User();
        
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/user/user.php';
        require_once 'view/footer.php';
    }   

    public function Crud(){
        $tea = new User();
        if(isset($_REQUEST['id'])){
            $tea = $this->model->GetID($_REQUEST['id']);
        }
        require_once 'view/header.php';
        require_once 'view/user/edit.php';
        require_once 'view/footer.php';
    }
    
    public function Load(){
        $tea = new User();
        
        $encriptarPassword=crypt($_REQUEST['password'],'$1$tecnoxp$');

        $tea->id = $_REQUEST['id'];
        $tea->name = $_REQUEST['name'];
        $tea->user = $_REQUEST['user'];
        $tea->password = $encriptarPassword;
        $tea->type = $_REQUEST['type'];
        $tea->address = $_REQUEST['address'];
        $tea->phone = $_REQUEST['phone'];

        $tea->id > 0 
            ? $this->model->Update($tea)
            : $this->model->Register($tea);
        
        header('Location: index.php?c=user');
    }

    public function Delete(){
        $this->model->Delete($_REQUEST['id']);
        header('Location:index.php?c=user');
    }
}