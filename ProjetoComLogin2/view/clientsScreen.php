<?php include('../controller/controller_client.php') ?>
<?php include('controller/verificar_login.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto SENAC - Listar Clientes</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/jsClient.js"></script>
	
</head>
	
	<?php
	
	$obj_cliente = new CRUD();
	$arrayClientes = $obj_cliente->busca();
	
	?>

<body style="text-align: center">
	
		
		<input type="button" onClick="buttonHome();" value="Home">
		<input type="button" onClick="clientList();" value="Listar Clientes">
		<input type="button" onClick="registerClient();" value="Cadastrar Clientes">
		<input type="button" onClick="editClient();" value="Editar Clientes">
		<br><br>
	
		<form action="">
    		Pesquisar: <input type="text" name="pesquisa" id="pesquisa"><br><br>
		</form>
		
	
	<table border = "1.5" align="center">
		<tr>
			<td style="text-align: center"><strong>Nome</strong></td>
			<td style="text-align: center"><strong>Idade&nbsp;</strong></td>
			<td style="text-align: center"><strong>Sexo&nbsp;</strong></td>
			<td style="text-align: center"><strong>Cidade&nbsp;</strong></td>
			<td style="text-align: center"><strong>Estado&nbsp;</strong></td>
			<td style="text-align: center"><strong>Pais&nbsp;</strong></td>
			<td style="text-align: center"><strong>Ação</strong></td>
		</tr>
		
		<?php
	  foreach($arrayClientes as $value){
		?>
		
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			<td><?php echo $value['abrSexo']?></td>
			<td><?php echo $value['nomeCidade']?></td>
			<td><?php echo $value['nomeEstado']?></td>
			<td><?php echo $value['nomePais']?></td>
			<td><input type="button" onClick="telaEditagem(<?php echo $value['idCliente'] ?>);" value="Editar">&nbsp;
				<input type="button" onClick="Delete(<?php echo $value['idCliente'] ?>);" value="Deletar"></td>
		</tr>
		
		<?php
	   		}
		?>
		
		<form id="formulario" action="updateScreen.php" method="POST">
		<input type="hidden" id="idFormulario" name="idFormulario">
		</form>
	
</body>
</html>