<?php
    include("partials/config.php");

    ob_start();
    session_start();

    if (!isset($_SESSION['valid'])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.php"); ?>
    <title><?php echo $SITE_TITLE; ?></title>
</head>
<style>
    .table td {
        color:#000;
    }
</style>
<body id="page-top">

    <div id="preloader" class="loader">
        <div class="loader-text">
            <img src="img/25.gif" width="40">
            <div style="color: #000000;">&nbsp;&nbsp;Loading...</div>
        </div>
    </div>

    <div id="notification" class="badge badge-secondary notification fade-out enable-animation"></div>

    <div id="wrapper">
        <?php

         if ($_SESSION['username']=='Ramesh') {
                     include("partials/sidebar.php");
                    // header("Location: index.php#order");


            }

          ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/topbar.php"); ?>
                <div id="pageResult"></div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    <?php include("partials/modals.php"); ?>
    <?php include("partials/pages.php"); ?>

    <?php include("partials/js.php"); ?>
    <script type="text/javascript">
        $(function() {
            window.location.hash = 'order';
        });
    </script>

</body>

</html>