<?php 
include ('Usuario.php');
?>

<?php 
/*
$db =new Database();
$conexion = $db->conexion();
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $sql = $conexion->prepare("UPDATE usuarios SET usuario= ?, email= ? WHERE id= ?");
    $sql->bindValue(1, $usuario);
    $sql->bindValue(2, $email);
    $sql->bindValue(3, $id);
    $sql->execute();
    header('location: register.php');
}
*/
?>

<?php 

    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];

    $user = new Usuario();

    $user->updateUsuario($id, $usuario, $email);

    header('location: register.php');

 ?>