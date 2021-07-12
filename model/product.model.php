<?php
class Product
{
	private $pdo;
    
    public $productId;
    public $productName;
    public $description;
    public $price;
    public $category;
    public $stock;
    public $image;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function List()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM product");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getID($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM product WHERE productId = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Delete($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM product WHERE productId = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Register(Product $data)
	{
		try 
		{

		$sql = "INSERT INTO product (productName,description,price,category,stock,image) 
		        VALUES (?, ?, ?, ?, ?,?)";

				
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->productName,
                    $data->description,  	
                    $data->price,
                    $data->category,
					$data->stock,
					$data->image
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Update($data)
	{
		try 
		{
			$sql = "UPDATE product SET 
			productName          = ?, 
			description        = ?,
			price       		 = ?,
			category            = ?, 
			stock 				= ?,
			image				 = ?
		WHERE productId = ?";

$this->pdo->prepare($sql)
	 ->execute(
		array(
			$data->productName, 
			$data->description,
									$data->price,
			$data->category,
			$data->stock,
			$data->image,
			$data->productId
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
}