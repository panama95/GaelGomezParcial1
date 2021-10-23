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
        <h2>Log in admin</h2>
        </div>
        <hr>


        <!--Email-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="text" name="email"  placeholder="Correo">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
            </p>
        </div>

        <!--Contrasena-->
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" name="pass" Placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>


        <br><br>
        <div class="columns">
            <div class="column is-8">
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
        include("verificar_admin.php");
        ?>
        </div>
    </div>
</body>
</html>