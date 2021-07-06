<?php
//Módulos - Start
include ("../../controle/controle_cliente.php");

//Módulos - End


//Recebe valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];

$acao         = $_POST["acao"];
//Recebe valores - End


if($acao == "insere"){
	
	//Instancia a classe Cliente - Start
	$obj_cliente   = new Cliente();
	//Instancia a classe Cliente - End
	
	//Chama o método - Start
	$arrayClientes = $obj_cliente->insere($nomeCliente,$idadeCliente);
	//Chama o método - End
	
	//Voltar a tela do formulário
	/*if(insere > 0){
		
		header("location: visao/formCadastro.php");
		
	}*/
	
}

?>