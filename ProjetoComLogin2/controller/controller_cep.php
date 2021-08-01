<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/model/conectionDB.php");

class CEP{
		
		function cidade(){
			
			$instansClass = new Dbconection();
			$conectar = $instansClass->conection();
			
		$sqlGetCidade = "SELECT
				A.idCidade     as idCidade,
				A.nomeCidade   as nomeCidade

				FROM 
				cidade A

				WHERE 
				A.idCidade = A.idCidade";
			
			
		$resultado = mysqli_query($conectar, $sqlGetCidade);
		
			$c=0;

			if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$c]['idCidade']    = $dados['idCidade'];
			$row[$c]['nomeCidade']  = $dados['nomeCidade'];
			$c++;
			
			}
		
		return $row;
			
			
		}
	
		
		function estado(){
			
			$instansClass = new Dbconection();
			$conectar = $instansClass->conection();
			
		$sqlGetEstado = "SELECT
				B.idEstado     as idEstado,
				B.nomeEstado   as nomeEstado

				FROM 
				estado B

				WHERE 
				B.idEstado = B.idEstado";
			
			
		$resultado = mysqli_query($conectar, $sqlGetEstado);
		
			$e=0;

			if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$e]['idEstado']    = $dados['idEstado'];
			$row[$e]['nomeEstado']  = $dados['nomeEstado'];
			$e++;
			
			}
		
		return $row;
			
			
		}
	
		function pais(){
			
			$instansClass = new Dbconection();
			$conectar = $instansClass->conection();
			
		$sqlGetPais = "SELECT
				A.idPais     as idPais,
				A.nomePais   as nomePais

				FROM 
				pais A

				WHERE 
				A.idPais = A.idPais";
			
			
		$resultado = mysqli_query($conectar, $sqlGetPais);
		
			$p=0;

			if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$p]['idPais']    = $dados['idPais'];
			$row[$p]['nomePais']  = $dados['nomePais'];
			$p++;
			
			}
		
		return $row;
			
			
		}
	
		
		
	}

?>