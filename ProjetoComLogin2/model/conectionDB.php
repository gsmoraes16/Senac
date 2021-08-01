<?php
 	class Dbconection{
	
	public function conection(){
		
		$connect = mysqli_connect("localhost","root","") or die(mysqli_error()) ;
		mysqli_select_db($connect,"projetosnc") or die(mysql_error());
		
	return $connect;
	
	}
	
}


?>