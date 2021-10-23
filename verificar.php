<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1) {

	    $email = trim($_POST['email']);
		$password = trim($_POST['password']);


	    $consulta = "SELECT * FROM usuarios";
	    $resultado = mysqli_query($conex,$consulta);
	    if (mysql_num_rows($resultado)>=1) {
            header ('Location: panel_usuario.php');
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