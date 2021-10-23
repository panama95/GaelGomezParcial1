<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$foto = trim($_POST['foto']);
		$nivel = 2;

	    $consulta = "INSERT INTO usuarios(nombre, apellido, email, password, foto, nivel) VALUES ('$nombre','$apellido','$email','$password','$foto','$nivel')";
	    $resultado = mysqli_query($conex,$consulta);
	    
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>