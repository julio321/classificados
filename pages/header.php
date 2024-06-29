<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Classificados</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/man.css">
	<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>


</head>
<body>
	
	<nav class="navbar navbar-expand bg-dark navbar-dark">
		<div class="container-fluid">
			<div class="navbar-nav">
				<a href="./" class="navbar-brand">Classificados</a>
			</div>
			<ul class="navbar-nav">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
				<li><a href="meus-anuncios.php">Meus Anúncios</a></li>
				<li><a href="sair.php">Sair</a></li>
				<?php else: ?>
				<li class="nav-item"><a class="nav-link" href="cadastre-se.php">Cadastre-se</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>