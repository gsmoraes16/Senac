<?php

include ("../../controller/controller_client.php");
include ("../../controller/controller_cep.php");
include ("../../controller/controller_sexo.php");


$idCliente  = @$_POST["id"];

$action 	= @$_POST["action"];


$nomeCliente   = @$_POST["nome"];
$idadeCliente  = @$_POST["idade"];
$idSexo        = @$_POST["sexo"];
$idCidade  	   = @$_POST["cidade"];
$idEstado  	   = @$_POST["estado"];
$idPais    	   = @$_POST["pais"];


	$obj_cliente = new CRUD();	

if($action == "delete"){
	
	$result = $obj_cliente->delete($idCliente);
	
}else if($action == "cadastrar"){
	
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais);
	
	
}else if($action == "update"){
	
	$result = $obj_cliente->update($nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais,$idCliente);
	
}
	
?>