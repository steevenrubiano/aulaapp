<h1>Login</h1>

	<form method="post">
		
		<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

		<input type="password" placeholder="Contraseña" name="passwordIngreso" required>

		<input type="submit" value="Enviar">

	</form>
	<a href="index.php?action=registro">Aun no estoy registrado.</a>

	<?php

		$ingreso = new UsuariosController();
		$ingreso -> ingresoUsuarioController();

		if(isset($_GET["action"])){
			if ($_GET["action"] == "fallo") {
				echo "Fallo al hacer login.";
			}
		}



	?>