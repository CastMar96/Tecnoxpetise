<?php


require_once 'model/dashboard.model.php';
class DashboardController{
    public function __CONSTRUCT(){
        $this->model = new dashboard();
        
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/header.dashboard.php';
        require_once 'view/dashboard/dashboard.php';
        require_once 'view/footer.php';
    }   
}

?>