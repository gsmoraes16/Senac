<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/model/conectionDB.php");

	
	class Sexo{
	   	
	   public function buscaSexo($idSexo = false){


		$instansClass = new Dbconection();
        $conectar = $instansClass->conection();
		
		$sqlSelectSexo = "SELECT
			A.idSexo    as idSexo,
			A.abrSexo   as abrSexo,
			A.descrSexo as descrSexo
			

			FROM
			sexo A

			WHERE 
			A.idSexo   = A.idSexo";
			
	
		$resultado = mysqli_query($conectar, $sqlSelectSexo);
		
		$s=0;
		
		if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$s]['idSexo']    = $dados['idSexo'];
			$row[$s]['abrSexo']   = $dados['abrSexo'];
			$row[$s]['descrSexo'] = $dados['descrSexo'];
			$s++;
			
			}
		
		return $row;
		
	}

}
		
?>