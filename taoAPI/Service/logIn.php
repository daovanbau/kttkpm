<?php 
	require_once("../Manager/UserManager.php");

	$signin = new UserManager();


	$pass = md5(trim($_POST['pass']));
	$name = trim($_POST['name']);
	if(!isset($name)){
		$data['result']='chưa có tên đăng nhập';
	}
	if(!isset($name)){
		$data['result']='chưa có mật khẩu';
	}elseif(isset($name) && isset($pass)){
		$result = $signin->login($name,$pass);
		$data['result']=$result;
	}
	
	header('Content-Type: application/json');
	echo json_encode($data);
?>
