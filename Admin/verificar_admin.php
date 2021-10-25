<?php
include('conexion.php');

if (isset($_POST['loguear'])) {
      if (strlen($_POST['email']) >= 1) {

        $email = $_POST['email'];
        $pass= $_POST['pass'];

    $consulta= "SELECT * FROM usuarios WHERE email='$email' AND pass='$pass' AND nivel=1 OR nivel=3  ";
    $resultado=mysqli_query($conex,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
      
        header("location:panel_admin.php");

    }else{  
      ?>
        
      <?php
    }

  }

}
?>