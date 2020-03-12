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
    <link href=<?php echo RUTA_URL . "/plugins/fullcalendar/dist/fullcalendar.min.css";?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/plugins/fullcalendar/dist/fullcalendar.print.min.css";?> rel="stylesheet" media="print" />
    <link href=<?php echo RUTA_URL . "/plugins/DataTables/datatables.min.css"; ?> rel="stylesheet" />
    <link href=<?php echo RUTA_URL . "/css/main.css"; ?> rel="stylesheet" />
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <?php require_once RUTA_APP . "/views/inc/Navbar".".php"; ?>
        <?php require_once RUTA_APP . "/views/inc/Sidebar".".php"; ?>
        <div class="content-wrapper">
            <div class="page-heading">
                <h1 class="page-title">Cobros</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=""><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Cobros</li>
                </ol>
            </div>
            <?php require_once RUTA_APP . "/views/cobro/Content".".php"; ?>
            <?php require_once RUTA_APP . "/views/inc/Footer".".php";?>
            <?php require_once RUTA_APP . "/views/Modals/Modals".".php";?>
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
    <script src=<?php echo RUTA_URL . "/plugins/moment/min/moment.min.js"; ?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/fullcalendar/dist/fullcalendar.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/jquery-ui/jquery-ui.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/DataTables/datatables.min.js"; ?> type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src=<?php echo RUTA_URL . "/js/app.min.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/js/pages/cobro/app.js";?> type="text/javascript"></script>
    <script src=<?php echo RUTA_URL . "/plugins/fullcalendar/dist/locale/es.js"?> type="text/javascript"></script>
</body>
</html>