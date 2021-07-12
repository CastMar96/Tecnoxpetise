<?php
class Login
{

    public $user;
    public $password;

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

	public function login(){
		try 
		{
			$u=$_REQUEST['user'];
			$p=$_REQUEST['password'];
			$stm = $this->pdo
			->prepare("SELECT * FROM user WHERE user = :u AND password=:p");
			$stm->bindParam(":u",$u);
			$stm->bindParam(":p",$p);
			$stm->execute();
			$usuario=$stm->fetch(PDO::FETCH_ASSOC);
			if(isset($usuario['user'])&&isset($usuario['password']))
			{
				if($_REQUEST['user']==$usuario['user']&&$_REQUEST['password']==$usuario['password'])
				return 'login';
			}
			else{
				return 'invalidad login';
			}
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
		
	}

	public function logout(){
		session_start();
		session_destroy();
	}


/*	public function login(){
		try 
		{
			if(isset($_REQUEST['user'])&&isset($_REQUEST['password']))
			{
				if($_REQUEST['user']=='admin'&&$_REQUEST['password']=='admin')
				return 'login';
			}
			else{
				return 'invalidad login';
			}
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
		
	}*/




    }
   ?>