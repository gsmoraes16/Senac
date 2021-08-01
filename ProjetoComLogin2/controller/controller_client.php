<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/model/conectionDB.php");
	
	class CRUD{
	   	
	   public function busca($idCliente = false){


		$instansClass = new Dbconection();
        $conectar = $instansClass->conection();
		
		$sqlSelect = "SELECT
			A.idCliente    as idCliente,
			A.nomeCliente  as nomeCliente, 
			A.idadeCliente as idadeCliente,
			A.idSexo       as idSexo,
			A.idCidade     as idCidade,
			A.idEstado     as idEstado,
			A.idPais       as idPais,
			B.abrSexo      as abrSexo,
			B.descrSexo    as descrSexo,
			C.nomeCidade   as nomeCidade,
			D.nomeEstado   as nomeEstado,
			E.nomePais     as nomePais

			FROM 
			cliente  A,
			sexo B,
			cidade C,
			estado D,
			pais   E

			WHERE 
			A.idSexo   = B.idSexo AND
			A.idCidade = C.idCidade AND
			A.idEstado = D.idEstado AND
			A.idPais   = E.idPais ";
		   
		  if($idCliente == true){
			  $sqlSelect .="AND A.idCliente =".$idCliente;
		  }
			
			$sqlSelect .=" ORDER BY A.idCliente";
			
	
		$resultado = mysqli_query($conectar, $sqlSelect);
		
		$r=0;
		
		if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['idCliente']     = $dados['idCliente'];
			$row[$r]['nomeCliente']   = $dados['nomeCliente'];
			$row[$r]['idadeCliente']  = $dados['idadeCliente'];
			$row[$r]['idSexo'] 	      = $dados['idSexo'];
			$row[$r]['idCidade']      = $dados['idCidade'];
			$row[$r]['idEstado']      = $dados['idEstado'];
			$row[$r]['idPais']        = $dados['idPais'];
			$row[$r]['abrSexo']       = $dados['abrSexo'];
			$row[$r]['descrSexo']     = $dados['descrSexo'];
			$row[$r]['nomeCidade']    = $dados['nomeCidade'];
			$row[$r]['nomeEstado']    = $dados['nomeEstado'];
			$row[$r]['nomePais']      = $dados['nomePais'];
			$r++;
			
			}
		
		return $row;
		
	}
		
		
		function update($nomeCliente, $idadeCliente, $idSexo, $idCidade, $idEstado, $idPais, $idCliente){
			$resultado = true;
		
		$instansClass3  = new Dbconection();
        $conectar = $instansClass3->conection();
	
			
		$sqlUpdate = "UPDATE cliente SET 
			nomeCliente = '".$nomeCliente."', idadeCliente =".$idadeCliente.", idSexo = ".$idSexo.", idCidade = ".$idCidade.", idEstado = ".$idEstado.", idPais =".$idPais."
			WHERE idCliente = ".$idCliente;
			
		mysqli_query($conectar, $sqlUpdate)or die ($resultado = false);
		
	}
		
		
		
		function insere($nomeCliente, $idadeCliente, $idSexo, $idCidade, $idEstado, $idPais){
		$resultado = true;
		
		$instansClass2  = new Dbconection();
        $conectar = $instansClass2->conection();
		
		
		$sqlInsert = "INSERT INTO cliente 
		(nomeCliente, idadeCliente, idSexo, idCidade, idEstado, idPais) 
		VALUES ('".$nomeCliente."',".$idadeCliente.",".$idSexo.",".$idCidade.",".$idEstado.",".$idPais.")";
			
		mysqli_query($conectar, $sqlInsert)or die ($resultado = false);
			return $sqlInsert;
	
					
	}
			
		function delete($idCliente){
			$resultado = true;
		
		$instansClass4  = new Dbconection();
        $conectar = $instansClass4->conection();
	
			
		$sqlDelete = "DELETE FROM cliente WHERE cliente.idCliente = ".$idCliente;
			
		
			
		mysqli_query($conectar, $sqlDelete)or die ($resultado = false);
		
		}
	
	
	
	}

	







?>