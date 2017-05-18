<?php

if(!isset($_SESSION)){
	session_start();
}

if (!$_SESSION["validar"]) { //Esto es, si no está autenticado, lo lleva fuera y no puede editar
	header("location:index.php?action=login");
	exit(); //usando el método exit() hacemos que nadie pueda, de ninguna forma continuar el script y alterarlo. 
}

if(($_SESSION["rol"] == 1) || ($_SESSION["rol"] == 2) ){ //si no es profesor (rol 2) o administrador (rol 1) lo lleva fuera

}else{
    header("location:index.php?action=index");
}

?>
<section id="asigNueva">
<h1>Nueva Asignatura</h1>

<form method="post">
	
    <input type="text" placeholder="Nombre asignatura" name="nbAsignatura" required autofocus>

	<input type="number" placeholder="Horas asignatura" name="horasAsignatura" min="0">

	<textarea placeholder="Descripción asignatura" name="descripcionAsignatura" required></textarea>
        <?php 
        $cursos = new CursosController();
        $cursos->listadoCursosController();
        ?>

	<input type="submit" value="Enviar">
	<input type="reset" value="Limpiar">

</form></section>




<?php

$asignatura = new AsignaturasController();
$asignatura -> asignaturaNuevaController();

if(isset($_GET["action"])){
	if ($_GET["action"] == "ok") {
		echo "Asignatura nueva grabada.";
	}
}


?>