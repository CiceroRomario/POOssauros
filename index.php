<!DOCTYPE html>
<html lan="pt-br">
<head>
	<title>Sistema de Gerenciamento</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8"/>
	<meta name="generator" content="Jair Junior" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="_style/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="_style/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>


<body>

<div class="page-header text-center">
	<h1 class="center-block">Sistema de Gerenciamento</h1>
</div>

<div class="container" id="form-log-in">
	<!-- Cria formulário de login na tela -->
	<form action="_script/CategoriaProcessamento.php" method="post" role="form">

		<!-- Verifica a existência de erro no processo de Login -->
		<?php if(isset($_GET["ERRO"]) && $_GET["ERRO"] == "1"){ ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				ERROR!
			</div>
		<?php }else if(isset($_GET["ERRO"]) && $_GET["ERRO"] == "2"){ ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				BEM VINDO!!
			</div>
		<?php } ?>
                
                
		<!-- Botão de login -->
		<div class="text-center">
			<button type="submit" class="btn btn-success" id="btn-log-in"> 
				ENTRAR &nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
			</button>
		</div>

	
</div>



<script type="text/javascript" src="_style/js/bootstrap.min.js"></script>
</body>

</html>