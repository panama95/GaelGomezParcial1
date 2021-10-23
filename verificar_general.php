<?php

$nivel=2;

include('conexion.php');
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;


$conexion=mysqli_connect("localhost","estudiante","utp2021","bd_parcial1"); 

$consulta="SELECT*FROM usuarios where email='$email' and password='$password' and nivel='$nivel'" ;
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

        header("location:panel_usuario.php");    

}else{
    ?>
    <?php
    include("log_general.php");

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);