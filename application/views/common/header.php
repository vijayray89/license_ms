<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>License Management System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/vendors/mdi/css/materialdesignicons.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/vendors/flag-icon-css/css/flag-icon.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/vendors/css/vendor.bundle.base.css" ?> ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/vendors/jquery-bar-rating/css-stars.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/vendors/font-awesome/css/font-awesome.min.css" ?>" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/css/demo_2/style.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/css/colors.min.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/css/style.min.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "CHF/assets/css/bootstrap-extended.min.css" ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . "CHF/assets/css/bootstrap.min.css" ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo BASE_URL . "CHF/assets/images/favicon.png" ?>" />
    <style>
    .main-panel .content-wrapper .color-card-wrapper .card-body {
        position: relative;
        padding-top: 15px !important;
    }

    option {
        padding: 0 24px;
    }

    select.form-control {
        padding: 0 20px;
    }

    .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search {
        width: 100%;
    }
    .input-group,form{
        width: 100%;
    }
    </style>

</head>

<body>
<?php
if($this->session->userdata('logged_in')==1){
?>
    <!-- Navigation Start -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="<?= BASE_URL ?>">
                        <!-- <img src="<?php echo BASE_URL . "CHF/assets/images/logo.svg" ?>" alt="logo" /> -->
                        License Management System
                        <!-- <span class="font-12 d-block font-weight-light">Making Bachpan Strong </span> -->
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="<?php echo BASE_URL ?>"><img
                            src="<?php echo BASE_URL . "CHF/assets/images/logo-mini.svg" ?>" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="<?= BASE_URL . "CHF/assets/images/faces/face1.jpg" ?>" alt="image" />
                                </div>
                                <div class="nav-profile-text">
                                    <p class="text-black font-weight-semibold m-0"> Testing Vijay </p>
                                    <span class="font-13 online-color">online <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASE_URL.'license_ms/index.php/Welcome/registration'; ?>">
                                    <i class="mdi mdi-logout me-2 text-primary"></i> Register </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASE_URL.'license_ms/index.php/Welcome/logout'; ?>">
                                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL.'license_ms/index.php/Welcome/home' ?>">
                            <i class="mdi mdi-compass-outline menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <?php if($this->session->userdata('user_role')==1 || $this->session->userdata('user_role')==2){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL.'license_ms/index.php/Welcome/license' ?>">
                        <i class="mdi mdi-clipboard-text menu-icon"></i>
                        <span class="menu-title">manage licenses</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navigation part End -->
    <?php } ?>