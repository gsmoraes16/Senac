<?php include("../controle/controle_cliente.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listagem de Clientes</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	
</head>
<?php
	
	//Instansiar classe cliente
	$obj_cliente = new Cliente();
	$arrayClientes = $obj_cliente->busca();
	
?>
	
	
<body>

	<table border = "1.5">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>Idade&nbsp;</strong></td>
			<td style="text-align: center"><strong>Ação</strong></td>
		</tr>
		
	<?php
	  foreach($arrayClientes as $value){
	?>
		
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			<td><input type="button" onClick="telaEditagem(<?php echo $value['idCliente'] ?>);" value="Editar">&nbsp;
			    <input type="button" onClick="Deletar(<?php echo $value['idCliente'] ?>);" value="Deletar"></td>
		</tr>
	
	<?php
	   }
	?>

	</table>

	<br>
	<input type="button" onClick="telaCadastro();" value="Ir para Cadastro">
	
	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>
	
	
</body>
</html> 