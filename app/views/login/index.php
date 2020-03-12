<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title><?php echo NAME_APP;?></title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href=<?php echo RUTA_URL . "/plugins/bootstrap/dist/css/bootstrap.min.css";?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/font-awesome/css/font-awesome.min.css";?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/themify-icons/css/themify-icons.css"; ?> rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href=<?php echo RUTA_URL . "/css/main.css"; ?> rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href=<?php echo RUTA_URL . "/css/pages/auth-light.css"; ?> rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="">Sistema <?php echo NAME_APP;?></a>
        </div>
        <?php if(isset($datos["mensaje"])): ?>
            <div class="alert alert-danger alert-dismissable fade show">
                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                <strong>Fallo!</strong> <?php print($datos["mensaje"]); ?>.
            </div> 
        <?php endif;?>
        <form id="login-form" action=<?php echo RUTA_URL . "/Login/getLogin"; ?> method="post" class="mt-5">
            <h2 class="login-title">Inicio de sesion</h2>
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    <input class="form-control" type="text" name="username" placeholder="Nombre de usuario" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label for="contrasena">Contrasena</label>
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="contrasena" placeholder="Contrasena">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Recuerdame</label>
                <a href="">Olvidaste tu contrasena?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">Ingresar</button>
            </div>
            <div class="text-center">No tienes una cuenta?
                <a class="color-blue" href="">Crear una</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Espere un momento por favor</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src=<?php echo RUTA_URL . "/plugins/jquery/dist/jquery.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/popper.js/dist/umd/popper.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap/dist/js/bootstrap.min.js"; ?> type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src=<?php echo RUTA_URL . "/plugins/jquery-validation/dist/jquery.validate.min.js"; ?> type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src=<?php echo RUTA_URL . "/js/app.js";?> type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    username: {
                        required: true,
                    },
                    contrasena: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>