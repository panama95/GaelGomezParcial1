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
<br><br><br><br>

      <div class="columns">
        <div class="column">

          <div id="file-js-example" class="file is-warning  has-name is-centered is-boxed">
            <label class="file-label">
              <input class="file-input" type="file" name="resume">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Escoger archivo…
                </span>
              </span>
              <span class="file-name">
                No ha seleccionado
              </span>
            </label>
          </div>



        <script>
          const fileInput = document.querySelector('#file-js-example input[type=file]');
          fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
              const fileName = document.querySelector('#file-js-example .file-name');
              fileName.textContent = fileInput.files[0].name;
            }
          }
        </script>

        </div>
      </div>
      
      <br><br><br><br><br>
      <div class="columns">
      <div class="column is-offset-one-quarter">
                        <!-- Boton de cancelar -->
                        <a href="index.php">
                        <button type="button" class="button is-danger is-medium">
                            <span class="icon is-small">
                            <i class="fas fa-times"></i>
                            </span>
                            <span>Cancelar</span>
                        </button>        
                        </a>
            </div>
          <div class="column">
            <!-- Boton de guardar -->
              <button type="submit" name="register" class="button is-success is-medium">
                <span class="icon is-small">
                <i class="fas fa-check"></i>
                </span>
                <span>Guardar</span>
              </button>
            </div>
              <!--CAMBIAR HACIA EL QUE MODIFIQUE LA FOTO -->
            <?php 
            include("registrar_bd.php"); 
            ?>
      </div>   


</body>
</html>