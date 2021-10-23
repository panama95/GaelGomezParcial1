<?php
include('conexion.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
session_start();
$_SESSION['email']=$email;

$conexion=mysqli_connect("localhost","estudiante","utp2021","bd_parcial1"); 

$consulta="SELECT*FROM usuarios WHERE email='$email' and pass='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:panel_admin.php");

}else{
    ?>
    <?php
    include("log_admin.html");

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);