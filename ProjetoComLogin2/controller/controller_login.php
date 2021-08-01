<?php

require_once($_SERVER['DOCUMENT_ROOT']."/model/conectionDB.php");

		
	class Login{
	   	
	   function verificarLogin($email,$senha){ 
	   
		   $instansClass = new Dbconection();
		   $connectDb = $instansClass->conection();
		   
		   $sqlVerifi = "SELECT * FROM admin WHERE email = '".$email."' and senha = '".$senha."' "; 
		   $result = mysqli_query($connectDb, $sqlVerifi) or die(mysqli_connect_error($connectDb));
		   $result2 = mysqli_num_rows($result);
		   
		   return $result2;
			      
		}
	}


?>