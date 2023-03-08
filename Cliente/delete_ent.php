<?php 
include ('Usuario.php');
?>
<?php 
$id = $_GET['id'];

$entrenamiento = new Entrenamiento();
$entrenamiento->deleteEntrenamiento($id);
header('location: entrenamientos.php');

 ?>