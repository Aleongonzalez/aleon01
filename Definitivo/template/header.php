

<?php 
//include ('/model/usuario.php');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preload" href="http://127.0.0.1/definitivo/css/style.css" as="style">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/definitivo/css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
	<title>MI APP</title>
	
</head>
<body>

<header class="container-fluid bg-warning">
	<div class="row">
		<div class="col-md-12 mt-3">
			<h1 class="text-center">Tu vida va a cambiar</h1>
		</div>
		
		<!--Hacer que solo salga en la pantalla de inico-->
	</div>
	<div class="row">
		<div class="col-md-2 mt-1 align-self-start">
			<p class="text-center" id="headerUser"><?php if(isset($_SESSION['username'])){echo("Usuario: ".$_SESSION['username']);} ?></p>
		</div>
		<div class="col-md-8"></div>
		<div class="col-md-2 mt-1">
			<?php if(isset($_SESSION['username'])){echo('<a class="btn btn-danger" href="../index.php">Cerrar sesion</a>');} ?>
			
		</div>
			

	</div>
	<!--
	<div id="nav">
		<div class="row mt-2 py-2">
			<div class="col-md-2 mx-auto py-1">
				<a class="btn btn-primary" href="register.php" >Usuarios</a>
			</div>
			<div class="col-md-2 mx-auto py-1">
				<a class="btn btn-primary" href="entrenamientos.php" >Entrenamientos</a>
			</div>
			<div class="col-md-2 mx-auto py-1">
				<a class="btn btn-primary" href="ejercicios.php" >Ejercicios</a>
			</div>
			
			<div class="col-md-2 mx-auto py-1">
				<a class="btn btn-primary" href="verEjercicios.php" >Consultas</a>
			</div>
			
		</div>
	</div>
	-->
</header>
