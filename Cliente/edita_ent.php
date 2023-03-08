<?php 
include ('Usuario.php');
?>


<?php 
//print_r($_POST);
    $id = $_POST['id_ent'];
    $tipo = $_POST['tipo'];
    //$email = $_POST['email'];

    $entrenamiento = new Entrenamiento();

    $entrenamiento->updateEntrenamiento($id, $tipo);

    header('location: entrenamientos.php');

 ?>