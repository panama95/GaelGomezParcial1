<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/0af84f18a6.js" crossorigin="anonymous"></script>



</head>
<body>
    <div class="columns is-mobile">
        <div class="column is-3 is-offset-one-third">

        <form method="post">
        <br><br><br>

        <div class="content is-large">
        <h2>Registrarse</h2>
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
                <input class="input" name="pass" type="password" placeholder="Password">
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
            <div class="column is-8">
                        <!-- Boton de cancelar -->
                        <a href="index.php">
                        <button type="button" class="button is-danger">
                            <span class="icon is-small">
                            <i class="fas fa-times"></i>
                            </span>
                            <span>Cancelar</span>
                        </button>        
                        </a>
            </div>
            <div class="column">

                        <!-- Boton de guardar -->
                        <button type="submit" name="register" class="button is-success">
                            <span class="icon is-small">
                            <i class="fas fa-check"></i>
                            </span>
                            <span>Guardar</span>
                        </button>
            </div>
        </div>



        <?php 
        include("registrar_bd.php");
        ?>
        </div>
    </div>
</body>
</html>