<?php
include "inc/db.php";
include "inc/function.php";
$sharelink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$baseurl = basename($_SERVER['REQUEST_URI']);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= settings('site_title') ?></title>
    <!-- <base href="http://localhost/supremeip2.0/"> -->
    <meta name="description" content="<?= settings('site_Description') ?>" />
    <meta name="keywords" content="trademark, ipr, patent, design, copyright, registration, renewal, objection, opposition, assignment, remove, journal, search,">
    <meta name="author" content="SUPREMEiP">

    <meta property="og:url" content="http://supremeip.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="SUPREMEiP" />
    <meta property="og:description" content="SUPREMEiP is top-ranked IP law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation." />
    <meta property="og:image" content="assets/mediacenter/<?= settings('site_banner') ?>" />

    <link rel="icon" href="assets/brand/<?= settings('favicon') ?>" sizes="32x32" />


    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<?php include "inc/header.php"; ?>



<!-- mobile menu -->
<div class="d-sm-block d-md-none">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background:#ece7e3 !important">
        <div class="container-fluid  mb-2">
            <div class="d-flex">
                <a class="" href="index.php"><img src="assets/brand/SUPREMEiP Law Firm.png" width="60%" alt="SUPREMEiP"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white" style="outline: none !important;  box-shadow: none !important;"><i style="outline: none !important; box-shadow: none !important;" class="fas fa-bars"></i></span>
                </button>
            </div>

            <div class="collapse  navbar-collapse " id="navbarNav2">
                <ul class="navbar-nav mt-3 mobile_menu">
                    <li class="nav-item">
                        <a class="nav-link nav_menu fw-bold" href="https://test.supremeip.com/" style="">
                            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg); "></i>

                            Home</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</div>


<!-- quick contact -->


<div class="mobile-margin"></div>

<style type="text/css">
    /*Home Page*/

    .page1 {
        min-height: 300px;
    }

    .page1overlay {
        min-height: 300px;
        width: 100%;
        overflow: hidden;
    }

    .page2 {
        min-height: 550px;
    }

    .page2overlay {
        min-height: 550%;
        width: 100%;
        overflow: hidden;
    }

    .page3 {
        min-height: 200px;
    }

    .page3overlay {
        min-height: 200px;
        width: 100%;
        overflow: hidden;
    }


    .page-content {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }


    .page_titletext {
        color: #fff;
        padding-top: 10%;
        font-family: serif;
    }


    .home-link {
        text-decoration: none;
        margin: 0;
        padding: 0;
    }

    @media only screen and (max-width: 600px) {
        .mobile-margin {
            margin-top: 60px;
        }

        .page1,
        .page2,
        .page3,
        .page1overlay,
        .page2overlay,
        .page3overlay {
            min-height: 100px;

        }
    }
</style>

<!-- main content -->
<main class="col-md-10 ms-md-auto col-lg-10 px-md-0 mx-0 px-0" style="overflow: hidden;">
    <div class="row m-0">
        <!-- section-1 -->
        <div class="col-md-6 m-0 p-0 mb-lg-0">
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '1') == 1) ? AboutPage('image', '1') : ''; ?>);">
                <div class="page1overlay" style="background:<?= AboutPage('bg_color', '1') ?>; opacity:<?= AboutPage('opasity', '1') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '1') ?>">
                        <div class="p-5"><?= AboutPage('content', '1') ?></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 m-0 p-0">
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '2') == 1) ? AboutPage('image', '2') : ''; ?>);">
                <div class="page1overlay " style="background:<?= AboutPage('bg_color', '2') ?>;opacity: <?= AboutPage('opasity', '2') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '2') ?>">
                        <div class="p-5"><?= AboutPage('content', '2') ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row m-0">
        <!-- section-2 -->
        <div class="col-md-2 m-0 p-0 mb-lg-0">
            <div class=" page-content page2" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '3') == 1) ? AboutPage('image', '3') : ''; ?>);">
                <div class="page2overlay" style="background:<?= AboutPage('bg_color', '3') ?>; opacity:<?= AboutPage('opasity', '3') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '3') ?>">
                        <div class="p-5"><?= AboutPage('content', '3') ?></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '4') == 1) ? AboutPage('image', '4') : ''; ?>);">
                <div class="page2overlay" style="background:<?= AboutPage('bg_color', '4') ?>;opacity: <?= AboutPage('opasity', '4') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '4') ?>">
                        <div class="p-5"><?= AboutPage('content', '4') ?></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-2 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '5') == 1) ? AboutPage('image', '5') : ''; ?>);">
                <div class="page2overlay " style="background:<?= AboutPage('bg_color', '5') ?>;opacity: <?= AboutPage('opasity', '5') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '5') ?>">
                        <div class="p-5"><?= AboutPage('content', '5') ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-0">
        <!-- section-3 -->
        <div class="col-md-6 m-0 p-0 mb-lg-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '6') == 1) ? AboutPage('image', '6') : ''; ?>);">
                <div class="page3overlay" style="background:<?= AboutPage('bg_color', '6') ?>; opacity:<?= AboutPage('opasity', '6') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '6') ?>">
                        <div class="p-5"><?= AboutPage('content', '6') ?></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 m-0 p-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (AboutPage('img_yes_no', '7') == 1) ? AboutPage('image', '7') : ''; ?>);">
                <div class="page3overlay " style="background:<?= AboutPage('bg_color', '7') ?>;opacity: <?= AboutPage('opasity', '7') ?>;">
                    <a class="home-link" href="<?= AboutPage('link', '7') ?>">
                        <div class="p-5"><?= AboutPage('content', '7') ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>





</main>

<style>
    .navbar-toggler:focus {
        text-decoration: none !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0 !important;
    }
</style>


<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

<script src="assets/dist/js/dashboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/dist/js/owl.carousel.min.js"></script>


</body>

</html>