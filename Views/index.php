<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> <?php echo $data['title']; ?> </title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/pace/pace.css';  ?>" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?php echo BASE_URL . 'Assets/css/main.min.css';  ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css';  ?>" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL . '/Assets/images/tradoc.png'; ?>" />

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL . '/Assets/images/tradoc.png'; ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="#">Portal TraDoc</a>
            </div>
            <p class="auth-description">Por favor, ingresa con las credenciales que te proporcionó el Dpto. de Sistemas.<br> <br> ¿No tienes cuenta? <a href="https://wa.me/528993218419?text=Hola%20quisiera%20la creación%20de%20mi%20cuenta%20TraDoc.
">Haz clic aquí</a></p>

            <form id="formulario">

                <div class="auth-credentials m-b-xxl">
                    <label for="correo" class="form-label">Correo electrónico <span class="text-danger"> * </span></label>
                    <input type="email" class="form-control" id="correo" name="correo" aria-describedby="correo" placeholder="usuario@example.com">

                    <label for="clave" class="form-label">Contraseña<span class="text-danger"> * </span></label>
                    <input type="password" class="form-control" id="clave" name="clave" aria-describedby="clave" placeholder="Ingresa tu contraseña" >
                </div>

                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    <a href="https://wa.me/528993095494?text=Hola,%20olvidé%20mi%20contraseña%20de%20mi%20cuenta%20TraDoc" class="auth-forgot-password float-end">¿Olvidaste la contraseña?</a>
                </div>
            </form>

            <div class="divider"></div>

        </div>
    </div>

    <!-- Javascripts -->
    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/js/sweetalert2@11.js'; ?>"> </script>
    <script src="<?php echo BASE_URL . 'Assets/js/custom.js'; ?>"></script>
    <script>

       const base_url = '<?php echo BASE_URL; ?>';


    </script>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/login.js'; ?>"></script>
</body>

</html>