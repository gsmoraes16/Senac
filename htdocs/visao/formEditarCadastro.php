<?php include("../controle/controle_cliente.php"); ?>
<?php $idCliente = $_POST['id'] ?>


<!doctype html>
<html>
<head>
	
	<?php
	
	$obj_cliente = new Cliente();
	$arrayClientes = $obj_cliente->busca($idCliente);

	?>
	
<meta charset="utf-8">
<title>Formulário de Edição</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	
</head>

<body>
	 <form action="">
		 <strong>Nome: </strong><input type="text" name="nome" id="nome" value="<?php echo $arrayClientes[0]['nomeCliente'] ?>"><br>
		 <strong>Idade: </strong><input type="text" name="idade" id="idade" value="<?php echo $arrayClientes[0]['idadeCliente'] ?>">
		 							<input type="hidden" name="id" id="id" value="<?php echo $arrayClientes[0]['idCliente'] ?>">
		 
		<input type="button" id="atualizar" onClick="editar();" value="Editar" >
		<input type="hidden" name="acao" value="update">
		
		 
		 
		
	 </form>
	
	<br>
	<input type="button" onClick="telaListagem();" value="Ver clientes registrados">
	
</body>
</html>