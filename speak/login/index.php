<?php include 'valid.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Speak</title>

		<meta name="author" content="MAÇONICO">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body>

	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
		<div class="navbar-header">
			 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button> <a class="navbar-brand" href="#">Speak</a>
		</div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Inicio</a>
				</li>
				<li>
					<a href="#">Amigos</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Configurações</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Sair</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<br><br><br><br>
		<div class="row">
			<div class="col-md-12 text-right">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="NO QUE ESTÁ PENSANDO?">
					</div>
					<button type="submit" class="btn btn-primary">Postar</button>
				</form>
			</div>
		</div>

		<br><br>

		<div class="row">
			<div class="col-md-2">
				<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle">
			</div>
			<div class="col-md-10">
				<h3>
					@USUARIO
				</h3>
				<p>
					...........
				</p>
			</div>
		</div>
	</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>