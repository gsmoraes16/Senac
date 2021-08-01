<?php include ("../controller/controller_login.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto SENAC - Pág Login</title>
<!--<link rel="stylesheet" href="../css/style.css">-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/login.js"></script>
	
</head>
<body style="text-align: center">
	
	<h1>Painel de Login</h1>
	
	<form id="formLogin" action="">
		
		<input type="email" name="email" placeholder="E-MAIL" id="email"><br>
		<input type="password" name="senha" placeholder="SENHA" id="senha"><br><br>
	
		<input type="button" id="login" onClick="verificaLogin();" value="Entrar"><br>
		<input type="hidden" name="action" id="action" value="login">
	
</body>
</html>
