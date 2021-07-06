<?php
 	

class Conexaobd{
	
	public function conection(){
		
		$conectar = mysqli_connect("localhost","root","") or die(mysqli_error()) ;
		mysqli_select_db($conectar,"mvc") or die(mysql_error());
		
	return $conectar;
	
	}
	
}


?>