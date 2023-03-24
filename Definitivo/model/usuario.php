<?php 
include ('../database/database.php');
//BASE DE DATOS tabla usuarios campos ID, USUARIO, EMAIL, PASSWORD
	class Usuario extends Database{
		/*
		private $usuario;
		private $email;
		private $password;

		public function __construct($usuario,$email,$password){
			$this->nombre = $nombre;
			$this->email = $email;
			$this->password = $password;
		}
		*/

		public function getTodosUsuarios(){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "SELECT * FROM usuarios";
			$sql = $conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getUsuarioPorID($id){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "SELECT * FROM usuarios WHERE id = ?";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $id);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getUsuarioPorUsuario($usuario){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "SELECT * FROM usuarios WHERE usuario = ?";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $usuario);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getUsuarioPorEmail($email){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "SELECT * FROM usuarios WHERE email = ?";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $email);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}



		public function getUsuarioPorEmail2($email){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = $conexion->prepare("SELECT * FROM usuarios WHERE email=:email");
			$sql->bindParam("email", $email, PDO::PARAM_STR);
			$sql->execute();
			return $result = $sql->fetch(PDO::FETCH_ASSOC);
		}

		public function insertUsuario($usuario, $email, $password){
			$conectar = parent::conexion();
			//parent::set_names();
			$password_hash = password_hash($password, PASSWORD_BCRYPT);
			$sql = "INSERT INTO usuarios(id, usuario, email, password) VALUES (NULL, ?, ?, ?)";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $usuario);
			$sql->bindValue(2, $email);
			$sql->bindValue(3, $password_hash);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateUsuario($id, $usuario, $email){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "UPDATE usuarios SET usuario = ?, email = ? WHERE id = ?";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $usuario);
			$sql->bindValue(2, $email);
			$sql->bindValue(3, $id);
			//$sql->bindValue(4, $id);
			$sql->execute();
			return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
		}



		public function deleteUsuario($id){
			$conectar = parent::conexion();
			//parent::set_names();
			$sql = "DELETE FROM usuarios WHERE id = ?";
			$sql = $conectar->prepare($sql);
			$sql->bindValue(1, $id);
			$sql->execute();
			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
		}


		public function esSuper($usuario){
			$conectar = parent::conexion();
			$sql = "SELECT * FROM admin";
			$sql = $conectar->prepare($sql);
			$sql->execute();
			$resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
			
			$valorSuper = $resultado['iduser'];

			$valor = getUsuarioPorUsuario($usuario);

			$valorId = $valor['id'];

			if($valorSuper==$valorId) {
				return true;
			} else {
				return false;
			}
		}
	}
?>