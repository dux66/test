<?php
session_start();
if (isset($_POST['user']) && isset($_POST['password'])) {
	$user = $_POST['user'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "123456") {
		$_SESSION['name']=$user;
		header('location:wel.php');
	} else {
		echo '账号或密码不正确';
	}		
}

?>