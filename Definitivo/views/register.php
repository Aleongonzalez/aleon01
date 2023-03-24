<?php 
session_start();
if (empty($_SESSION['username']) or ($_SESSION['admin']==0)) {
	header('location: ../index.php');
}
?>

<?php 
include ('../template/header.php');
include ('../template/navegacion.php');
 ?>




<main class="container">
	<div class="row mt-2">
		<div class="col-md-4 mx-auto">
			<form  id="form-register" name="register">
				<div id="result"></div>
				<div class="form-group">
					<div class="form-label" for='usuario'>Usuario</div>
					<input class="form-control" autofocus type="text" name="usuario" id="usuario_registro" pattern="[a-zA-Z0-9]+" required>
				</div>
				<div class="form-group">
					<div class="form-label" for='email'>Email</div>
					<input class="form-control" id="email_registro" type="email" name="email" required>
				</div>
				<div class="form-group">
					<div class="form-label" for='password'>Contraseña</div>
					<input class="form-control" id="password_registro" type="password" name="password" required>
				</div>
				<div class="form-group py-3">
					<input class="btn btn-primary" type="submit" name="registrar" id="registrar_registro"  value="Registrar">
					
				</div>
			</form>
		</div>
		<div class="col-md-8 mx-auto">
			<table class="table table-boreded">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Usuario</th>
						<th scope="col">Email</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody id="tabla_usuarios_register">
					
				</tbody>
			</table>
		</div>
	</div>
</main>



<script src="../js/jquery.js"></script>
<?php 
include ('../template/footer.php');
 ?>