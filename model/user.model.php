<?php
class User
{
	private $pdo;
	
	public $id;
	public $name;
	public $user;
	public $password;
	public $type;
	public $address;
	public $phone;

	
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
			$stm = $this->pdo->prepare("SELECT * FROM user");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Register(user $data)
	{
		try 
		{
		$sql = "INSERT INTO user (name,user,password,type,address,phone) 
		        VALUES (?, ?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->name,
                    $data->user,  	
                    $data->password,
                    $data->type,
					$data->address,
                    $data->phone
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
			$sql = "UPDATE user SET 
						name         = ?, 
						user       = ?,
                        password        = ?,
						type           = ?, 
						address = ?,
                        phone = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->name,
                        $data->user,  	
                        $data->password,
                        $data->type,
                        $data->address,
                        $data-> phone,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function GetID($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM user WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM user WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}