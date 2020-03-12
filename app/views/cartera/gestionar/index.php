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
                <h1 class="page-title">Prestamos</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=""><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Prestamos > Gestionar</li>
                </ol>
            </div>
            <?php require RUTA_APP . "/views/cartera/gestionar/Content".".php"; ?>
            <?php require RUTA_APP . "/views/inc/Footer".".php";?>
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
    <script type="text/javascript" src=<?php echo RUTA_URL . "/plugins/daterangepicker/moment.min.js";?>></script>
    <script type="text/javascript" src=<?php echo RUTA_URL . "/plugins/daterangepicker/daterangepicker.min.js";?>></script>
    <link rel="stylesheet" type="text/css" href=<?php echo RUTA_URL . "/plugins/daterangepicker/daterangepicker.css";?> />
    <script src=<?php echo RUTA_URL . "/plugins/select2/dist/js/select2.full.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/inputmask/jquery.inputmask.bundle.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/jquery-validation/dist/jquery.validate.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/toastr/build/toastr.min.js";?> type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src=<?php echo RUTA_URL . "/js/app.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/js/pages/prestamos.gestionar/app.js";?> type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#date_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            $('#date_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });
        })
        
    </script>
</body>
</html>