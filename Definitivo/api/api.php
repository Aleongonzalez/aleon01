<?php 

header("Content-Type: application/json");
include_once('../model/usuario.php');

switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		$usuario = new usuario();

		if(isset($_GET['id'])){
			echo json_encode($usuario->getUsuarioPorID($_GET['id']));
		}elseif(isset($_GET['usuario'])){
			echo json_encode($usuario->getUsuarioPorUsuario($_GET['usuario']));
		}elseif(isset($_GET['email'])){
			echo json_encode($usuario->getUsuarioPorEmail($_GET['email']));
		}else{
			echo json_encode($usuario->getTodosUsuarios());
		}

		break;
	
	case 'POST':
		$usuario = new usuario();
		//print_r($_GET['usuario']);
		//print_r($_POST['usuario']);
		if((isset($_POST['usuario']))and(isset($_POST['email']))and(isset($_POST['password']))){
			echo json_encode($usuario->insertUsuario($_POST['usuario'], $_POST['email'], $_POST['password']));	
		}else {
			echo "NADA DE NADA";
		}
		
		break;
	
	case 'PUT':
		$usuario = new usuario();
		if(isset($_GET['id'])){
			echo json_encode($usuario->updateUsuario($_GET['id'], $_GET['usuario'], $_GET['email']));
		}else {
			Echo "NO HAS ACTUALIZADO NADA";
		}
		break;

	case 'DELETE':
		$usuario = new usuario();
		
		if(isset($_GET['id'])){
			print_r($_GET['id']);
			echo json_encode($usuario->deleteUsuario($_GET['id']));
		}else{
			echo"NO BORRO NADA";
		}
		
		break;
}




 ?>