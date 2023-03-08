<?php 
include ('Usuario.php');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>MI APP</title>
</head>
<body>

<header class="container-fluid bg-warning">
	<div class="row">
		<div class="col-md-12 mt-3">
			<h1 class="text-center"><a href="index.php">header</a></h1>
		</div>
	</div>
	<div id="nav">
		<div class="row mt-2 py-2">
			<div class="col-md-2 mx-auto">
				<a class="btn btn-primary" href="register.php" >Usuarios</a>
			</div>
			<div class="col-md-2 mx-auto">
				<a class="btn btn-primary" href="entrenamientos.php" >Entrenamientos</a>
			</div>
			<div class="col-md-2 mx-auto">
				<a class="btn btn-primary" href="ejercicios.php" >Ejercicios</a>
			</div>
			
		</div>
	</div>
</header>
