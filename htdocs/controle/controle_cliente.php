<?php
///Load Modelo - START

include ($_SERVER['DOCUMENT_ROOT']."/modelo/conexaobd.php");  /// "../" sai da pasta e vai para outra 

//Load Modelo - END


class Cliente{
	
	public function busca($idCliente = false){


		$instansClass = new Conexaobd();
        $conectar = $instansClass->conection();
		
		$sqlSelect = "SELECT * FROM cliente ";
		
		if($idCliente>0){
			
			$sqlSelect .= "WHERE idCliente = ".$idCliente;
			
		}
	
		$resultado = mysqli_query($conectar, $sqlSelect);
		
		$r=0;
		
		if($resultado === false){ 
			
   			die(mysqli_error($conectar));
			
		}
		
	 	while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['idCliente']     = $dados['idCliente'];
			$row[$r]['nomeCliente']   = $dados['nomeCliente'];
			$row[$r]['idadeCliente']  = $dados['idadeCliente'];
			$r++;
			
			}
		
		return $row;
		
	
		
		
	}
	
	function insere($nomeCliente, $idadeCliente){
		$resultado = true;
		
		$instansClass2  = new Conexaobd();
        $conectar = $instansClass2->conection();
		
		
		$sqlInsert = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nomeCliente."',".$idadeCliente.")";
		mysqli_query($conectar, $sqlInsert)or die ($resultado = false);
		
		$response = array("success" => true);
	
		
		if($resultado === false){
			
			return false;
		}else{
			return $response;
		}
		
		
	}
	
		function update($nomeCliente,$idadeCliente,$idCliente){
			$resultado = true;
		
		$instansClass3  = new Conexaobd();
        $conectar = $instansClass3->conection();
	
			
		$sqlUpdate = "UPDATE cliente SET nomeCliente = '".$nomeCliente."', idadeCliente =".$idadeCliente." WHERE idCliente = ".$idCliente;
			
		mysqli_query($conectar, $sqlUpdate)or die ($resultado = false);
		
		}
	
		
		function delete($idCliente){
			$resultado = true;
		
		$instansClass4  = new Conexaobd();
        $conectar = $instansClass4->conection();
	
			
		$sqlDelete = "DELETE FROM cliente WHERE cliente.idCliente = ".$idCliente;
			
		
			
		mysqli_query($conectar, $sqlDelete)or die ($resultado = false);
		
		}
	
}

?>