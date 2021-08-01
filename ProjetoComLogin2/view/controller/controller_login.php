<?php

include ("../../controller/controller_login.php");


$email  = $_POST["email"];
$senha  = $_POST["senha"];
$action = $_POST["action"];


	$obj_login = new Login();

if($action == "login"){
	
	$result = $obj_login->verificarLogin($email,$senha);

	if($result == 1){
		
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['result']  = $result;
		
	}else{
		
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		
	}
	
echo $result;	
	
		   
}
	


?>