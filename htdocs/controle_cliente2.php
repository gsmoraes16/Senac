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
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente);
	//Chama o método - End
	
	if(mysqli_affected_rows($conectar)>0){
       include ("../../index.php");
    }else{
       echo "Erro, não foi possível registrar o cliente";
    }
	
	//Voltar a tela do formulário
	echo $result;
	
}

?>