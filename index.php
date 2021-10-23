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

        <br><br><br>

        <div class="content is-large">
        <h2>Elegir una opcion</h2>
        </div>
        <hr>


        <br><br>

        <div class="columns">
            <div class="column is-8">
                        <!-- Boton de cancelar -->
                        <a href="General/log_general.php">
                        <button type="button" class="button is-success">
                            <span class="icon is-small">
                            <i class="fa fa-user fa-fw"></i>
                            </span>
                            <span>Log in general</span>
                        </button>        
                        </a>
                        <br><br>

                        <!-- Boton de cancelar -->
                        <a href="Admin/log_admin.php">
                        <button type="button" class="button is-info">
                            <span class="icon is-small">
                            <i class="fa fa-user fa-fw"></i>
                            </span>
                            <span>Log in admin</span>
                        </button>        
                        </a>

                        <br><br>
                        <!-- Boton de cancelar -->
                        <a href="registrar.php">
                        <button type="button" class="button is-warning">
                            <span class="icon is-small">
                            <i class="fa fa-user fa-fw"></i>
                            </span>
                            <span>Registrar</span>
                        </button>        
                        </a>
             </div>
        </div>



        <?php 
        include("verificar_general.php");
        ?>
        </div>
    </div>
</body>
</html>