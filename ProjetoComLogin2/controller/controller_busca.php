<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/model/conectionDB.php");
	
	class busca{
	   	
	   public function pequisar(){
		 $resultado = true;
		   
		$instansClass = new Dbconection();
        $conectar = $instansClass->conection();
		   
	  
	   $sqlBusca = "SELECT 
    					*
    				
					FROM cliente 
    
    				WHERE nomeCliente LIKE ".$nomeCliente;
			
		mysqli_query($conectar, $sqlBusca)or die ($resultado = false);
		
	}
	   
	   
}
	
		   
?>		   