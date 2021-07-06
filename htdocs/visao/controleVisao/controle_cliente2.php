<?php
//Módulos - Start
include ("../../controle/controle_cliente.php");

//Módulos - End


//Recebe valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];
//Recebe valores - End

	$obj_cliente = new Cliente();

if($acao == "insere"){
	
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente);
	
	

}else if($acao == "update"){
	
	$result = $obj_cliente->update($nomeCliente,$idadeCliente,$idCliente);
	
	
}else if($acao == "delete"){
	
	$result = $obj_cliente->delete($idCliente);
	
}

?>