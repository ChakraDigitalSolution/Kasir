<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url(''); ?>/assets/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Shop Cart</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/assets/assets/img/favicon/logo.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url(''); ?>/assets/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(''); ?>/assets/assets/js/config.js"></script>

    <!-- DATATABLE -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>/assets/assets/css/datatable.css">

    <!-- SWAL 2 -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/assets/css/sweetalert.css">
    <script src="<?= base_url(''); ?>/assets/assets/js/sweetalert.js"></script>


    <style>
        .swal2-container {
            z-index: 9999 !important;
        }
    </style>
</head>

<body>
    <!-- JQUERY -->
    <script type="text/javascript" src="<?= base_url(''); ?>/assets/js/jquery.js"></script>

    <!-- JQUERY MASKING -->
    <script type="text/javascript" src="<?= base_url(''); ?>/assets/js/jquery.mask.js"></script>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Panggil Sidebar     -->
            <?= $this->include('Templates/Sidebar'); ?>
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Panggil Navbar -->
                <?= $this->include('Templates/Navbar'); ?>

                <!-- Panggil Content -->
                <?= $this->renderSection('content'); ?>
            </div>



        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(''); ?>/assets/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(''); ?>/assets/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(''); ?>/assets/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(''); ?>/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url(''); ?>/assets/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->



    <!-- Main JS -->
    <script src="<?= base_url(''); ?>/assets/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url(''); ?>/assets/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <script type="text/javascript" src="<?= base_url(''); ?>/assets/js/button.js"></script>

    <!-- DATATABLE -->
    <script type="text/javascript" charset="utf8" src="<?= base_url(''); ?>/assets/assets/js/datatable.js"></script>





</body>

</html>