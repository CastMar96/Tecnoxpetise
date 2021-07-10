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
            $pdt = $this->model->Obtener($_REQUEST['productId']);
        }
        
        require_once 'view/header.php';
        require_once 'view/product/product-edit.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $pdt = new Product();
        
        $filename=$_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];  
        $folder = "image/".$filename;

        $pdt->ProductId = $_REQUEST['productId'];
        $pdt->productName = $_REQUEST['productName'];
        $pdt->description = $_REQUEST['description'];
        $pdt->price = $_REQUEST['price'];
        $pdt->category = $_REQUEST['category'];
        $pdt->stock = $_REQUEST['stock'];
        $pdt->image = $_REQUEST['image'];

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

        $pdt->productId > 0 
            ? $this->model->Actualizar($pdt)
            : $this->model->Registrar($pdt);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['productId']);
        header('Location: index.php');
    }
}