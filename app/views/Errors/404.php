<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title><?php echo NAME_APP;?></title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href=<?php echo RUTA_URL . "/plugins/bootstrap/dist/css/bootstrap.min.css";?> rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href=<?php echo RUTA_URL . "/css/main.css"; ?> rel="stylesheet" />
</head>

<body class="bg-silver-100">
    <div class="content">
        <h1 class="m-t-20">404</h1>
        <p class="error-title">PAGINA NO ENCONTRADA</p>
        <p class="m-b-20">Lo siento, la pagina buscada no fue encontrada. Por favor verificar la URL y intentelo de nuevo.
            <a class="color-green" href="principalController/index">Vamor a la pagina principal</a> o intente buscar la pagina.</p>
        <form action="javascript:;">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Buscar pagina">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <style>
        .content {
            max-width: 450px;
            margin: 0 auto;
            text-align: center;
        }

        .content h1 {
            font-size: 160px
        }

        .error-title {
            font-size: 22px;
            font-weight: 500;
            margin-top: 30px
        }
    </style>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src=<?php echo RUTA_URL . "/plugins/jquery/dist/jquery.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/popper.js/dist/umd/popper.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap/dist/js/bootstrap.min.js"; ?> type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src=<?php echo RUTA_URL . "/js/app.min.js";?> type="text/javascript"></script>
</body>

</html>