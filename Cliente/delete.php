<?php 
include ('Usuario.php');
?>
<?php 
$id = $_GET['id'];

$usuario = new Usuario();
$usuario->deleteUsuario($id);
header('location: register.php');

 ?>