<?php 
	require_once('../BaseClass/ConnectDB.php');

	class UserManager extends ConnectDB
	{
		
		public function login($name,$pass){
			$sql = "SELECT * from users where name = '$name' and password = '$pass'";
			$query = mysqli_query($this->GetConnect(),$sql);
			return $query->fetch_all(MYSQLI_ASSOC);
		}
		public function register($name,$pass){
			$sql = "INSERT Into users(name,password) values($name,$pass) ";
			$query = mysqli_query($this->GetConnect(),$sql);
			return true;
		}


		
	}

?>