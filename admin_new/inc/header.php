<?php
session_start();
include "db.php";
include "function.php";

if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Admin Panel - SUPREMEiP</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="SUPREMEiP” is top-ranked Corporate & ip law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation." />
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="../assets/brand/<?= settings('favicon') ?>" sizes="32x32" />
    <link rel="icon" href="../assets/brand/<?= settings('favicon') ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="../assets/brand/<?= settings('favicon') ?>" />


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/flot/flot.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- <script src="assets/js/tinymce.min.js" referrerpolicy="origin"></script> -->
    <script src="https://cdn.tiny.cloud/1/4ji99lkzm49svloyysqo9xvmtu03b24c3gvvfby23di6bhfa/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="dist/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>


<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="assets/img/logo.png" alt="Brand Logo" width="170" class="img-fluid">
                    </span>
                    <!--  <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal  ml-2">supremeip</a> -->
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">
                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="index.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                        </a>
                    </li>

                    <!-- Home-->
                    <li class="sidenav-item">
                        <a href="home_list.php" class="sidenav-link ">
                            <i class="sidenav-icon fas fa-copy"></i>
                            <div>Home Content</div>
                        </a>
                    </li>

                    <!-- Pages  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Post Pages</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="pages.php" class="sidenav-link">
                                    <div>Add/Edit</div>
                                </a></li>
                            <li class="sidenav-item"><a href="setting.php?setting=Page" class="sidenav-link">
                                    <div>Page Settings</div>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Fixed Pages  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Fixed Pages</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="about_list.php" class="sidenav-link">
                                    <div>About Us</div>
                                </a></li>
                            <li class="sidenav-item"><a href="contact_list.php" class="sidenav-link">
                                    <div>Contact Us</div>
                                </a></li>
                            <li class="sidenav-item"><a href="team_list.php" class="sidenav-link">
                                    <div>Our Team</div>
                                </a></li>                            
                            <li class="sidenav-item"><a href="ourclients.php" class="sidenav-link">
                                    <div>Our Client</div>
                                </a></li>
                            <li class="sidenav-item"><a href="services.php" class="sidenav-link">
                                    <div>Our Services</div>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Menu  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Menu</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="menu2.php" class="sidenav-link">
                                    <div>Add/Edit</div>
                                </a></li>
                            <li class="sidenav-item"><a href="setting.php?setting=Menu" class="sidenav-link">
                                    <div>Desktop Menu Settings</div>
                                </a></li>
                            <li class="sidenav-item"><a href="#" class="sidenav-link">
                                    <div>Mobile Menu Settings</div>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Social Bar Setting  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Social Bar Settings</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="setting.php?setting=General" class="sidenav-link">
                                    <div>Desktop Social Bar</div>
                                </a></li>
                            <li class="sidenav-item"><a href="setting.php?setting=mobilesocil" class="sidenav-link">
                                    <div>Mobile Social Bar</div>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Widget Setting  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Widget Settings</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="setting.php?setting=section" class="sidenav-link">
                                    <div>Section Title Settings</div>
                                </a></li>
                            <li class="sidenav-item"><a href="widget.php" class="sidenav-link">
                                    <div>Price</div>
                                </a></li>
                            <li class="sidenav-item"><a href="widget.php" class="sidenav-link">
                                    <div>Flowchart</div>
                                </a></li>
                            <li class="sidenav-item"><a href="widget.php" class="sidenav-link">
                                    <div>FAQ</div>
                                </a></li>
                            <li class="sidenav-item"><a href="widget.php" class="sidenav-link">
                                    <div>File Manager</div>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Widget Setting  -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon fas fa-cog"></i>
                            <div>Site Settings</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item"><a href="setting.php?setting=logotitle" class="sidenav-link">
                                    <div>Site Identity</div>
                                </a></li>
                            <li class="sidenav-item"><a href="setting.php?setting=Color" class="sidenav-link">
                                    <div>Font Settings</div>
                                </a></li>
                            <li class="sidenav-item"><a href="header_footer_edit.php" class="sidenav-link">
                                    <div>Custom Codes</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>


            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">SupremeIP</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="../assets/brand/<?= settings('favicon') ?>" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php echo UserData('email'); ?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout.php" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i>   Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->