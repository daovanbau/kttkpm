<?php 
	require_once("../Manager/UserManager.php");

	$signup = new UserManager();


	$pass = md5(trim($_POST['pass']));
	$name = trim($_POST['name']);
	
	$result = $signup->register($name,$pass);
	$data['result']="thành công";
	
	header('Content-Type: application/json');
	echo json_encode($data);
?>
