<!DOCTYPE html>
<html>
<head>
	<title>Log in general</title>
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
        <h2>Log in general</h2>
        </div>
        <hr>


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
                <input class="input" name="password" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>


        <br><br>
        <div class="columns">
            <div class="column is-8">
                        <!-- Boton de cancelar -->
                        <a href="registrar.php">
                        <button type="button" class="button is-info">
                            <span class="icon is-small">
                            <i class="fas fa-times"></i>
                            </span>
                            <span>Registrar</span>
                        </button>        
                        </a>
            </div>
            <div class="column">

                        <!-- Boton de guardar -->
                        <button type="submit" name="loguear" class="button is-success">
                            <span class="icon is-small">
                            <i class="fas fa-check"></i>
                            </span>
                            <span>Log in</span>
                        </button>
            </div>
        </div>



        <?php 
        include("verificar_general.php");
        ?>
        </div>
    </div>
</body>
</html>