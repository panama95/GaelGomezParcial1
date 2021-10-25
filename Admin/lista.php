<?php

$conex = mysqli_connect("localhost","estudiante","utp2021","bd_parcial1"); 

?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="/GAELGOMEZPARCIAL1/estilo.css">
	<title>Panel de control de usuario general</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/0af84f18a6.js" crossorigin="anonymous"></script>



</head>
<body>
<!--Navbar-->
<nav class="navbar is-success">

    <div class="navbar-start">
        <h1> &nbsp &nbsp</h1>

        <figure class="image is-64x64">
          <a href="panel_admin.php">
          <img src="https://utp.ac.pa/documentos/2015/imagen/logo_utp_1_300.png">
          </a>
        </figure>
        <div class="content is-large">
        <h1> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h1>
        </div>
        
        <div class="content is-large">
        <h1 style="color:white">Panel de control</h1>
        </div>
    </div>

    <div class="navbar-end content is-medium">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
          Cuenta
        </a>
        <div class="navbar-dropdown is-right is-boxed">
          <a class="navbar-item content is-medium" href="foto_usuario.php">
            Actualizar foto
          </a>
          <a class="navbar-item content is-medium" href="mod_cuenta.php">
            Modificar cuenta
          </a>
          <a class="navbar-item content is-medium" href="lista.php">
            Lista
          </a>
          <a class="navbar-item content is-medium" href="log_admin.php">
            Cerrar sesion
          </a>
        </div>
      </div>
    </div>
</nav>

<!--Navbar End-->
<!--Contenido -->
<br>
<div class="columns ">
    <div class="column is-offset-one-quarter">
    <h3>LISTA DE ADMINISTRADORES</h3><br><br>
	<table class="table is-hoverable" >
		<tr>
    <td><strong>Id</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Foto</strong></td>	
      <td><strong>Nivel</strong></td>   
      <td><strong>Cambiar nivel a admin</strong></td>
		</tr>

		<?php 
		$sql="SELECT * from usuarios WHERE nivel=1";
		$result=mysqli_query($conex,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['foto'] ?></td>
      <td><?php echo $mostrar['nivel'] ?></td>
      <td><a href="mod_nivel_user.php"><button name="nivel" class="button is-info">
                            <span>Cambiar</span>
                        </button></a>
      </td>
    </tr>
    
	<?php 
    
	}
	 ?>
	</table>
    </div>
</div>


<div class="columns">
    <div class="column is-offset-one-quarter">

<h3>LISTA DE USUARIOS GENERAL</h3><br><br>
    <table class="table is-hoverable" >
		<tr>
			<td><strong>Id</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Foto</strong></td>	
      <td><strong>Nivel</strong></td>   
      <td><strong>Cambiar nivel a admin</strong></td>
		</tr>

		<?php 
		$sql="SELECT * from usuarios WHERE nivel=2";
		$result=mysqli_query($conex,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['foto'] ?></td>
      <td><?php echo $mostrar['nivel'] ?></td>
      <td><a href="mod_nivel_admin.php"><button name="nivel" class="button is-info">
                            <span>Cambiar</span>
                        </button></a>
      </td>
    </tr>
    
	<?php 
    
	}
	 ?>
	</table>
    </div>
</div>


</body>
</html>