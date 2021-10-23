<?php
include('conexion.php');

if (isset($_POST['loguear'])) {
      if (strlen($_POST['email']) >= 1) {

        $email = trim($_POST['email']);
        $pass= trim($_POST['pass']);

    $consulta="SELECT * FROM usuarios WHERE usuarios.email='$email'";
    $resultado=mysqli_query($conex,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
      
        header("location:panel_usuario.php");

    }else{
        ?>
      <h3>esta vacio</h3>
      <?php
    }

}
?>