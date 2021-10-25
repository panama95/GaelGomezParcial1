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
<div class="columns is-mobile">
        <div class="column is-3 is-offset-one-third">

        <form method="post">
        <br><br><br>

        <div class="content is-large">
        <h2>Modificar cuenta</h2>
        </div>
        <hr>

        <!--Valido-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="valido" type="text" placeholder="Correo actual">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
            </p>
        </div>
        <hr>

        <!--Nombre-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="nombre" type="text" placeholder="Nombre">
                <span class="icon is-small is-left">
                <i class="fa fa-user fa-fw"></i>
                </span>
            </p>
        </div>

        <!--Apellido-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="apellido" type="text" placeholder="Apellido">
                <span class="icon is-small is-left">
                <i class="far fa-user"></i>
                </span>
            </p>
        </div>

        <!--Email-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="email" type="text" placeholder="Correo">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
            </p>
        </div>

        <!--Contrasena-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="pass" type="password" minlength="6" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>

        <!--Imagen-->
        <!--
        <div class="file has-name">
        <label class="file-label">
            <input class="file-input" type="file" name="foto">
            <span class="file-cta">
            <span class="file-icon">
                <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
                Escoja un archivo
            </span>
            </span>
            <span class="file-name">
            Elegir foto 
            </span>
        </label>
        </div>
        -->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="foto" type="text" placeholder="Foto">
                <span class="icon is-small is-left">
                <i class="fas fa-upload"></i>
                </span>
            </p>
        </div>

        <br><br>
        <div class="columns">
            <div class="column is-half">

                        <!-- Boton de guardar -->
                        <button type="submit" name="actualizar" class="button is-info">
                            <span class="icon is-small">
                            <i class="fas fa-check"></i>
                            </span>
                            <span>Guardar</span>
                        </button>
            </div>
        </div>



        <?php 
        include("mod_datos.php");
        ?>
        </div>
    </div>

</body>
</html>