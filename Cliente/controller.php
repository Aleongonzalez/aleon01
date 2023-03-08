<?php 


	function resultadoUsuario($user, $conexion){
		
		$query = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:username");
		$query->bindParam("username", $user, PDO::PARAM_STR);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);	
		return $result;
	}
	
	
	function resultadoEmail($email, $conexion){
		
		$query2 = $conexion->prepare("SELECT * FROM usuarios WHERE email=:email");
		$query2->bindParam("email", $email, PDO::PARAM_STR);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_ASSOC);	
		return $result2;
	}
	







 ?>