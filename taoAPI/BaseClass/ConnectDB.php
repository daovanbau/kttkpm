<?php
	define('sqlname', 'user');

	class ConnectDB
	{
		
		protected $conn = null;
		public function GetConnect(){
			$pass = '';
			if(!$this->conn){
				$this->conn = mysqli_connect('localhost','root',$pass,sqlname);
				$this->conn->set_charset('utf8');
			}
			return $this->conn;
		}
		public function CloseConnect(){
			mysqli_close($this->conn);
			$this->conn = null;
		}
	}
?>