<?php
class Category{

    private $pdo;

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
	
    public function ListPhones()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='Phones'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ListComputers()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='Computers'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ListSmartwatch()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='Smartwatch'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ListCameras()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='Cameras'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ListTablets()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='Tablets'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ListTV()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category='TV'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
