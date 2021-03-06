<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" http-equiv="refresh" content="100">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pizza Planet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Exo+2:700" rel="stylesheet">

	<base href="http://projeto_segunda/index.php">
</head>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<a class="navbar-brand" href="/"><span class="first-letter">Go</span> <span class="second-letter">pizza</span></a>      
		</div>
      <div class="modal-body">
       	<h4>Para recuperar sua senha, insira no campo abaixo o seu email.</h4>

       	<input type="text" class="form-control input-lg" placeholder="Insira o seu email.">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Solicitar recuperação</button>
      </div>
    </div>
  </div>
</div>


<body>	
	<section class="home">
		<!--Header start-->
		<header class="header-area clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!---- Menu area start ---->
						<nav class="navbar">
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="/"><span class="first-letter">Go</span> <span class="second-letter">pizza</span></a>
							</div>
							<div class="collapse navbar-collapse pull-right" id="nav-menu">
							  <ul class="nav navbar-nav navbar-right pull-right">
								<li><a href="/#how-it-work" id="btn-how-it-work" class="active">Inicio</a></li>
								<li><a href="/#how-it-work" id="btn-how-it-work">Como funciona</a></li>
								<li><a href="/#about-us-area" id="btn-about-us">Baixe o app</a></li>
								<li><a href="/#advantage-area" id="btn-advantage">Parceiros</a></li>
								<li><a href="/#contact-area" id="btn-contact-us">Cadastre sua pizzaria</a></li>
							  </ul>
							</div>							
						</nav>
						<!--Menu area end-->
					</div>
				</div>
			</div>
		</header>
			<section class="body">
				<div class="form-login col-md-4">
					<?php
						if(isset($_GET['message'])){
			    			echo "<span class='col-md-12 alert alert-danger'>".$_GET['message']."</span>";
						}
					?>
					<div class="row">
						<div class="col-md-12">
							<h1 class="title_pizza">Bem vindo ao <span class="first-letter">Go</span> <span class="second-letter">Pizza</span></h1>
					<form method="POST" action="PHP/login.php" data-toggle="validator" role="form" id="form">
						<div class="row">
						<div class="col-md-12">							
							<label for="login" class="">LOGIN: </label>
							<input type="text" id="login" name="login" class="form-control form-group input-lg"  placeholder="Login" required>
						</div>
						</div>
						
						<div class="row">
						<div class="col-md-12">
						<label for="password">SENHA:</label>
						<input type="password" id="password" name="password" class="input-lg form-control form-group" placeholder="Senha" required>
						</div>
						</div>

						<a href="#myModal" id="show" data-toggle="modal" data-target="#myModal">Esqueci a senha</a>
						<br>
						<br>
	
	<center>					<input name="submit" type="submit" value="Fazer login" class="btn btn-danger btn-lg"></center>	
						<br>
						<center>
							<a href="cadastrar_user.php" id="show" class="btn btn-danger btn-lg">Cadastre-se</a>
						</center>
					</form>
						</div>
					</div>
				</section>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>