<?php $sharelink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $site_title ?> | SupremeIP</title>
  <meta name="description" content="<?= $site_Description ?>" />
  <meta name="keywords" content="<?= $site_Description ?>">
  <meta name="author" content="SUPREMEiP">

  <meta property="og:url" content="<?= $sharelink ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?= $site_title ?>" />
  <meta property="og:description" content="<?= $site_Description ?>" />
  <meta property="og:image" content="assets/mediacenter/<?= $site_banner ?>" />
  <link rel="icon" href="assets/brand/<?= settings('favicon') ?>" sizes="32x32" />
  <link href="style.php" type='text/css' rel='stylesheet'>
  <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
  <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?<?= FontLink() ?>display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body id="supremeip">

  <?php include "headeredit.php"; ?>

  <div class="">

    <div class="row m-0 p-0">

      <div class="socialicon p-0 d-none d-lg-block d-md-block" style="width:40px; height:100%; background:<?= settings('socialbar_bgcolor'); ?>; z-index:999; position:fixed;">
        <div class="sqecode" style="position: absolute; bottom:50px;">
          <?php $sdata = SelectData('social', "ORDER BY serial_list ASC");
          foreach ($sdata as $srow) { ?>

            <ul>
              <?php if ($srow['social_url'] == '') { ?>
                <li class="icon_box py-2"><i class="<?= $srow['icon'] ?> p-1 ps-3"></i>
                  <ul>
                    <li>
                      <div class="qr_link" style="width:<?= settings('socialbar_imagesize') ?>;">
                        <img src="assets/mediacenter/<?= $srow['qr_image'] ?>" alt="" style='width:100%; cursor:context-menu;'>
                      </div>
                    </li>
                  </ul>
                </li>
              <?php } else { ?>
                <li class="icon_box py-2"><a href="<?= $srow['social_url'] ?>" target="NULL"><i class="<?= $srow['icon'] ?> p-1 ps-3"></i></a></li>


              <?php } ?>

            </ul>


          <?php } ?>

        </div>
      </div>

      <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?= header_menu('background_color'); ?>;padding:0px; padding-left:25px;">
        <div class="position-sticky">
          <div class="logo_text ms-3 px-2 mb-4 py-4">
            <div class="logoimg">
              <a href="/"><img src="assets/brand/<?= settings('logo') ?>" alt="SUPREMEiP"></a>
            </div>
          </div>

          <div class="accordion ps-2" id="accordionExample">
            <div class="accordion-item bg-transparent">
              <div class="accordion-header p-0" id="homebtn">
                <a class="nav-link" href=""> <i class="fas fa-home"></i> Home </a>
              </div>
            </div>
            <?php $data = SelectData('menu_new', "WHERE menu_perent='#' AND manu_status!='0' ORDER BY serial_list ASC");
            foreach ($data as $row) { ?>

              <div class="accordion-item bg-transparent">
                <div class="accordion-header p-0" id="headingTwo">
                  <a class="accordion-button collapsed bg-transparent nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $row['menu_id'] ?>" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="<?= $row['icon'] ?> pe-1"></i> <?= $row['menu_title'] ?></a>
                </div>
                <div id="collapseTwo<?= $row['menu_id'] ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body m-0 p-0">
                    <?php $pageid = $row['menu_id'];
                    $data = SelectData('menu_new', "WHERE menu_perent='$pageid' AND manu_status!='0' ORDER BY serial_list ASC");
                    foreach ($data as $crow) { ?>
                      <a class="nav-link" id="sub_menu_link" href="pages.php?page=<?= $row['manu_url'] ?>&child=<?= $crow['manu_url'] ?>">
                        <i class="<?= $crow['icon'] ?> pe-1"></i> <?= $crow['menu_title'] ?></a>
                    <?php } ?>
                  </div>
                </div>
              </div>

            <?php } ?>

            <?php $sdata = SelectData('menu_new', "WHERE menu_perent='single' AND manu_status!='0' ORDER BY serial_list ASC");
            foreach ($sdata as $srow) { ?>
              <div class="accordion-item bg-transparent">
                <div class="accordion-header p-0" id="homebtn">
                  <a class="nav-link" href="<?= $srow['manu_url'] ?>"> <i class="<?= $srow['icon'] ?>" pe-1></i> <?= $srow['menu_title'] ?> </a>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </nav>

      <!-- mobile menu -->
      <div class="d-sm-block d-md-none mt-5 ">
        <div class="navbar navbar-expand-lg navbar-light fixed-top m-0 p-0" style="background:<?= header_menu('background_color'); ?>;">
          <div class="p-3 m-0" style="background:<?= header_menu('mobilemenu_color'); ?>;">
            <div class="d-flex">
              <a class="" href="index.php"><img src="assets/brand/SUPREMEiP Law Firm.png" width="60%" alt="SUPREMEiP"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white" style="outline: none !important;  box-shadow: none !important;"><i style="color:<?= header_menu('mobilemenuicon_color') ?>; outline: none !important; box-shadow: none !important;" class="fas fa-bars"></i></span>
              </button>
            </div>
          </div>

          <div class="collapse  navbar-collapse mobile_menu" id="navbarNav2">
            <ul class="navbar-nav mt-3">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-transparent">
                  <div class="accordion-header p-0" id="homebtn">
                    <a class="nav-link" href=""> <i class="fas fa-home"></i> Home </a>
                  </div>
                </div>
                <?php $data = SelectData('menu_new', "WHERE menu_perent='#' AND manu_status!='0' ORDER BY serial_list ASC");
                foreach ($data as $row) { ?>

                  <div class="accordion-item bg-transparent">
                    <div class="accordion-header p-0" id="headingTwo">
                      <a class="accordion-button collapsed bg-transparent nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $row['menu_id'] ?>" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="<?= $row['icon'] ?> pe-1"></i> <?= $row['menu_title'] ?></a>
                    </div>
                    <div id="collapseTwo<?= $row['menu_id'] ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body m-0 p-0">
                        <?php $pageid = $row['menu_id'];
                        $data = SelectData('menu_new', "WHERE menu_perent='$pageid' AND manu_status!='0' ORDER BY serial_list ASC");
                        foreach ($data as $crow) { ?>
                          <a class="nav-link" id="sub_menu_link" href="pages.php?page=<?= $row['manu_url'] ?>&child=<?= $crow['manu_url'] ?>">
                            <i class="<?= $crow['icon'] ?> pe-1"></i> <?= $crow['menu_title'] ?></a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>

                <?php } ?>

                <?php $sdata = SelectData('menu_new', "WHERE menu_perent='single' AND manu_status!='0' ORDER BY serial_list ASC");
                foreach ($sdata as $srow) { ?>
                  <div class="accordion-item bg-transparent">
                    <div class="accordion-header p-0" id="homebtn">
                      <a class="nav-link" href="<?= $srow['manu_url'] ?>"> <i class="<?= $srow['icon'] ?>" pe-1></i> <?= $srow['menu_title'] ?> </a>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </ul>
          </div>
        </div>
        </nav>
      </div>



      <style>
        .accordion-item button:focus {
          text-decoration: none !important;
          outline: 0 !important;
          box-shadow: 0 0 0 0 !important;
        }
      </style>


      <div class="d-sm-block d-md-none d-lg-none ">
        <div class="fixed-bottom mobile_bottom_menu" style="background-color: <?= settings('mobilesocialbar_bgcolor'); ?>;padding: 10px 25px !important; width:100%;">
          <div class="d-flex justify-content-between ">
            <?php
            $data = SelectData('mobile_social', 'ORDER BY serial_list ASC');
            if ($data->num_rows > 0) {
              while ($social = $data->fetch_object()) { ?>
                <a href="<?= $social->social_url ?>"><i class="<?= $social->icon ?>"></i></a>
            <?php }
            } ?>

          </div>
        </div>
      </div>


      <style>
        .mobile_bottom_menu a {
          color: <?= settings('mobilesocialbar_iconcolor'); ?> !important;
          font-size: 20px;
        }

        .mobile_bottom_menu a:hover {
          color: <?= settings('mobilesocialbar_iconhovercolor'); ?>;
        }

        .mobile_bottom_menu a:active {
          color: <?= settings('mobilesocialbar_iconhovercolor'); ?> !important;
        }
      </style>