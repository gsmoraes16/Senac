<?php include ("controller/verificar_login.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title>Projeto SENAC - Pág Principal</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	<script type="application/javascript" src="../js/jsClient.js"></script>
	
</head>

<body style="text-align: center">
		
		<div id="home">
		<input type="button" onClick="buttonHome();" value="Home">
		<input type="button" onClick="clientList();" value="Listar Clientes">
		<input type="button" onClick="registerClient();" value="Cadastrar Clientes">
		<input type="button" onClick="editClient();" value="Editar Clientes">
		</div>
	
</body>
</html>