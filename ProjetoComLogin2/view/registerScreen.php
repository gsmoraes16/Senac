<?php include("../controller/controller_client.php"); ?>
<?php include("../controller/controller_cep.php"); ?>
<?php include("../controller/controller_sexo.php"); ?>
<?php include('controller/verificar_login.php') ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../js/jsClient.js"></script>
	
</head>
	
	<?php
	
	$obj_cep  = new CEP();
	$arrayCidade = $obj_cep->cidade();
	$arrayEstado = $obj_cep->estado();
	$arrayPais   = $obj_cep->pais();
	
	
	$obj_sexo  = new Sexo();
	$arraySexo = $obj_sexo->buscaSexo();
	
	?>
	
	
<body style="text-align: center">
	
		<input type="button" onClick="buttonHome();" value="Home">
		<input type="button" onClick="clientList();" value="Listar Clientes">
		<input type="button" onClick="registerClient();" value="Cadastrar Clientes">
		<input type="button" onClick="editClient();" value="Editar Clientes">
		<br><br>
	
	<form class="form" id="cadUsuario" action="">
		
		<div id="main">
		
			<h1>Cadastro</h1>
			
		</div>
		 
	<fieldset>	
		<div class="geral">
		
			<input type="text" name="nome" placeholder="Insira seu nome" id="nome" required>

		</div>
		 
		<div class="geral">
			
			<input type="text" name="idade" placeholder="Insira sua idade" id="idade" required>
			
		</div>
		 
		<div class="geral">
			<?php
	  	foreach($arraySexo as $value){
			?>
			<label> <input type="radio" name="sexo" id="sexo" value="<?php echo $value['idSexo'];?>"> <?php echo $value['descrSexo']?> </label>
		 	<?php
	  			}
			?>
		</div>
		 
		
		
		<div class="geral">
			<select id="cidade" name="cidade" required>
				<option selected disabled value="">Selecione sua Cidade</option>
			<?php
	  	foreach($arrayCidade as $value){
			?>
				<option value= "<?php echo $value['idCidade'];?>" > 
					<?php echo $value['nomeCidade']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		
		
		 
		<div class="geral">
			<select id="estado" name="estado" required>
				<option selected disabled value="">Selecione seu Estado</option>
			<?php
	  	foreach($arrayEstado as $value){
			?>
				<option value= "<?php echo $value['idEstado'];?>" > 
					<?php echo $value['nomeEstado']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		 
		<div class="geral">
		
			<select id="pais" name="pais" required>
				<option selected disabled value="">Selecione seu Pais</option>
			<?php
	  	foreach($arrayPais as $value){
			?>
				<option value= "<?php echo $value['idPais'];?>" > 
					<?php echo $value['nomePais']?> 
				</option>
				
			<?php
	  		}
			?>
			</select>
		 
		</div>
		 
		 <button class="botao" id="cadastrar" onClick="cadastro();" type="button">Cadastrar</button>
		 <input type="hidden" name="action" id="action" value="cadastrar">
	
		</fieldset>
	 </form>
	
</body>
</html>