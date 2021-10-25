<?php
include('conexion.php');

if (isset($_POST['actualizar'])) {
      if (strlen($_POST['valido']) >= 1) {
        $valido = trim($_POST['valido']);
	    $nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
		$pass= trim($_POST['pass']);
		$foto = trim($_POST['foto']);


    $consulta= "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email', pass='$pass', foto='$foto' WHERE email='$valido' ";
    $resultado=mysqli_query($conex,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
      
        echo "No se actualizado";

    }else{
      
        echo "Se actualizo";
    }

  }

}
?>