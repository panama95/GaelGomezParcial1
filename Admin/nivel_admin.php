<?php
include('conexion.php');

if (isset($_POST['actualizar'])) {
      if (strlen($_POST['email']) >= 1) {

	    $email = trim($_POST['email']);



    $consulta= "UPDATE usuarios SET nivel=1 WHERE email='$email'  ";
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