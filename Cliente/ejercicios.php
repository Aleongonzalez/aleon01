<?php 
session_start();
if (empty($_SESSION['username']) or ($_SESSION['admin']==0)) {
	header('location: index.php');
}
?>


<?php 
include ('template/header.php');
//include ('template/navegacion.php');
?>



<?php include ('template/footer.php');?>