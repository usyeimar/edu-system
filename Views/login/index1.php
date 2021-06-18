<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variedades y Comunicaciones |
        <?php echo $title; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href=" ?>login_libs/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href=" ?>login_libs/login.css" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <div id="formContent">
            <!-- Tabs Titles -->

            <div>
                <h4>
                    <b>Variedades</b> y comunicaciones
                </h4>
            </div>

            <!-- Icon -->
            <div>
                <img src="login_libs/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="login/auth">
                <input type="text" id="txtUsuario" name="txtUsuario" placeholder="Usuario">
                <input type="password" id="txtContrasena" name="txtContrasena" placeholder="Contraseña">
                
                <div class="loginButton">
                    <input type="submit" value="Iniciar Sesión">
                </div>
                
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="login/register">No tienes cuenta, registrate.</a>
                <br>
                <a class="underlineHover" href="login/recover">¿Olvidaste la contraseña?</a>
            </div>

        </div>
    </div>

   

</body>

</html>