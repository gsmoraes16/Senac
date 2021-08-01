<?php include('../controller/controller_client.php') ?>
<?php include('../controller/controller_sexo.php') ?>
<?php include('../controller/controller_cep.php') ?>
<?php include('controller/verificar_login.php') ?>
<?php $idCliente = $_POST['idFormulario'] ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Clientes</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/jsClient.js"></script>
	
</head>
	
	<?php
	
	$obj_cliente = new CRUD();
	$arrayClientes = $obj_cliente->busca($idCliente);

	$obj_sexo  = new Sexo();
	$arraySexo = $obj_sexo->buscaSexo();

	$obj_cidade  = new CEP();
	$arrayCidade = $obj_cidade->cidade();
	$arrayEstado = $obj_cidade->estado();
	$arrayPais   = $obj_cidade->pais();
	
	?>

<body style="text-align: center">
	
		<input type="button" onClick="buttonHome();" value="Home">
		<input type="button" onClick="clientList();" value="Listar Clientes">
		<input type="button" onClick="registerClient();" value="Cadastrar Clientes">
		<input type="button" onClick="editClient();" value="Editar Clientes">
		<br><br>
	
	<form action="">
		
		<div id="main">
		
			<h1>Editar</h1>
			
		</div>
		
	<fieldset>	
		<div class="geral">
		
			<input type="text" name="nome" id="nome" value="<?php echo $arrayClientes[0]['nomeCliente'] ?>"><br>
			<input type="text" name="idade" id="idade" value="<?php echo $arrayClientes[0]['idadeCliente'] ?>"><br>
				  <input type="hidden" name="id" id="id" value="<?php echo $arrayClientes[0]['idCliente'] ?>">
			
		</div>
		
		<div class="geral">
			<?php
	  	foreach($arraySexo as $value){
			?>
			<input type="radio" name="sexo" id="sexo" value="<?php echo $value['idSexo'];?>"
				   <?php echo ($value['idSexo'] == $arrayClientes[0]['idSexo'])?'checked':''?>> <?php echo $value['descrSexo']?>
		 	<?php
	  			}
			?>
		</div>
		
		 
		
		
		<div class="geral">
			<select id="cidade" name="cidade">
			<?php
	  	foreach($arrayCidade as $value){
			?>
				<option value= "<?php echo $value['idCidade'];?>" 
					<?php echo ($value['idCidade'] == $arrayClientes[0]['idCidade'])?'selected':''?>> <?php echo $value['nomeCidade']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		
		
		<div class="geral">
			<select id="estado" name="estado">
			<?php
	  	foreach($arrayEstado as $value){
			?>
				<option value= "<?php echo $value['idEstado'];?>" 
					<?php echo ($value['idEstado'] == $arrayClientes[0]['idEstado'])?'selected':''?>> <?php echo $value['nomeEstado']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		 
		<div class="geral">
			<select id="pais" name="pais">
			<?php
	  	foreach($arrayPais as $value){
			?>
				<option value= "<?php echo $value['idPais'];?>" 
					<?php echo ($value['idPais'] == $arrayClientes[0]['idPais'])?'selected':''?>> <?php echo $value['nomePais']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		 
		 <input type="button" id="update" onClick="editar();" value="Editar">
		 <input type="hidden" name="action" id="action" value="update">
	
		</fieldset>
	 </form>
</body>
</html>