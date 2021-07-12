<?php
require_once 'model/product.model.php';

class ProductController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Product();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/product/product.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $pdt = new Product();
        
        if(isset($_REQUEST['productId'])){
            $pdt = $this->model->getID($_REQUEST['productId']);
        }
        
        require_once 'view/header.php';
        require_once 'view/product/product.edit.php';
        require_once 'view/footer.php';
    }
    
    public function Load(){
        $pdt = new Product();

        $filename=$_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];  
        $folder = "image\products\ ".$filename;
        
        $pdt->productId = $_REQUEST['productId'];
        $pdt->productName = $_REQUEST['productName'];
        $pdt->description = $_REQUEST['description'];
        $pdt->price = $_REQUEST['price'];
        $pdt->category = $_REQUEST['category'];
        $pdt->stock = $_REQUEST['stock'];
        $pdt->image = $_REQUEST['image'];

        if( !empty( $_FILES['image']['name'] ) ){
            $image = ($_FILES['image']['name']);
            move_uploaded_file ($_FILES['image']['tmp_name'], 'image\products\ ' . $foto);
            
            $pdt->image= $image;
        }

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

        $pdt->productId > 0 
            ? $this->model->Update($pdt)
            : $this->model->Register($pdt);
        
        header('Location: index.php?c=Product');
    }
    
    public function Delete(){
        $this->model->Delete($_REQUEST['productId']);
        
        header('Location: index.php?c=Product');
    }
}