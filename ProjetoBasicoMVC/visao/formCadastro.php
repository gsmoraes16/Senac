<?php include("../controle/controle_cliente.php"); ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	
</head>

<body>
	 <form id="cadUsuario" action="">
		 <strong>Nome: </strong><input type="text" name="nome"><br>
		 <strong>Idade: </strong> <input type="text" name="idade">
		 
		 
		<input type="button" id="insere" onClick="cadastro();" value="Gravar">
		<input type="hidden" name="acao" value="insere">
		 
		
	 </form>
	
	<br>
	<input type="button" onClick="telaListagem();" value="Ver clientes registrados">
	
</body>
</html>