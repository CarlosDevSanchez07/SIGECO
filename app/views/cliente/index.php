<!DOCTYPE html>
<html lang="en">
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
    <link href=<?php echo RUTA_URL . "/plugins/DataTables/datatables.min.css"; ?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css"; ?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css";?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/css/main.css"; ?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/toastr/build/toastr.min.css"; ?> rel="stylesheet" /> 
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <?php require RUTA_APP . "/views/inc/Navbar".".php"; ?>
        <?php require RUTA_APP . "/views/inc/Sidebar".".php"; ?>
        <div class="content-wrapper">
            <div class="page-heading">
                <h1 class="page-title">Usuarios Clientes</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=""><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Usuarios Clientes</li>
                </ol>
            </div>
            <?php require RUTA_APP . "/views/cliente/Content".".php"; ?>
            <?php require RUTA_APP . "/views/inc/Footer".".php";?>
            <?php require RUTA_APP . "/views/Modals/Modals".".php"; ?>
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Espere un momento por favor</div>
    </div>
    <script src=<?php echo RUTA_URL . "/plugins/jquery/dist/jquery.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/popper.js/dist/umd/popper.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap/dist/js/bootstrap.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/metisMenu/dist/metisMenu.min.js"; ?> type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src=<?php echo RUTA_URL . "/plugins/DataTables/datatables.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/jquery-validation/dist/jquery.validate.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/toastr/build/toastr.min.js";?> type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src=<?php echo RUTA_URL . "/js/app.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/js/pages/cliente/app.js"; ?> type="text/javascript"></script>
</body>
</html>