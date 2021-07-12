<?php
require_once 'model/category.model.php';

class CategoryController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Category();
    }
    public function ListPhones(){
        require_once 'view/header.php';
        require_once 'view/category/product.phones.php';
        require_once 'view/footer.php';
    }

    public function ListComputers(){
        require_once 'view/header.php';
        require_once 'view/category/product.computers.php';
        require_once 'view/footer.php';
    }

    public function ListSmartwatch(){
        require_once 'view/header.php';
        require_once 'view/category/product.smartwatch.php';
        require_once 'view/footer.php';
    }
    public function ListCameras(){
        require_once 'view/header.php';
        require_once 'view/category/product.cameras.php';
        require_once 'view/footer.php';
    }
    public function ListTablets(){
        require_once 'view/header.php';
        require_once 'view/category/product.tablets.php';
        require_once 'view/footer.php';
    }
    public function ListTV(){
        require_once 'view/header.php';
        require_once 'view/category/product.tv.php';
        require_once 'view/footer.php';
    }
}
?>