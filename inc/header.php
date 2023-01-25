<body id="supremeip">
  <div class="">

    <div class="row m-0 p-0">

      <div class="socialicon p-0 d-none d-lg-block d-md-block" style="width:40px; height:100%; background:<?= settings('socialbar_bgcolor'); ?>; z-index:999; position:fixed;">
        <div class="sqecode" style="position: absolute; bottom:50px;">
          <?php $sdata = SelectData('social', "ORDER BY serial_list ASC");
          foreach ($sdata as $srow) { ?>

            <div class="icon_box py-2" id="icon_<?= $srow['id'] ?>">
              <?php
              if ($srow['social_url'] == '') { ?>
                <i class="<?= $srow['icon'] ?> p-1 ps-3"></i>
                <div class="qr_link" id="qr_link_<?= $srow['id'] ?>">
                  <a href="<?= $srow['social_url'] ?>" target="NULL"><img src="assets/mediacenter/<?= $srow['qr_image'] ?>" alt="" width="100%"></a>
                </div>
              <?php } else { ?>
                <a href="<?= $srow['social_url'] ?>" target="NULL"><i class="<?= $srow['icon'] ?> p-1 ps-3"></i></a>
              <?php } ?>
            </div>
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
      <div class="d-sm-block d-md-none">
        <div class="navbar navbar-expand-lg navbar-light fixed-top" style="background:<?= header_menu('background_color'); ?>;">
          <div class="container-fluid  mb-2">
            <div class="d-flex">
              <a class="" href="index.php"><img src="assets/brand/SUPREMEiP Law Firm.png" width="60%" alt="SUPREMEiP"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white" style="outline: none !important;  box-shadow: none !important;"><i style="color:<?= header_menu('font_color') ?>; outline: none !important; box-shadow: none !important;" class="fas fa-bars"></i></span>
              </button>
            </div>
          </div>

          <div class="collapse  navbar-collapse mobile_menu" id="navbarNav2">
            <ul class="navbar-nav mt-3 ">
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

      <div class="mobile-margin mt-5"></div>

      <div class="d-sm-block d-md-none">
        <div class="fixed-bottom p-0 m-0">
          <div class="sc-bottom-bar">
            <a class="sc-menu-item">
              <i class="fas fa-list"></i>
            </a>

            <a class="sc-menu-item">
              <i class="fas fa-calendar-alt"></i>
            </a>

            <a class="sc-menu-item sc-current">
              <i class="fas fa-home"></i>
            </a>
            <a class="sc-nav-indicator">
            </a>


            <a class="sc-menu-item">
              <i class="fas fa-calendar-alt"></i>
            </a>
            <a class="sc-menu-item">
              <i class="fas fa-calendar-alt"></i>
            </a>
          </div>
        </div>
      </div>



      <script>
        var menu_bar = document.querySelector('.sc-bottom-bar');
        var menu_item = document.querySelectorAll('.sc-menu-item');
        var menu_indicator = document.querySelector('.sc-nav-indicator');
        var menu_current_item = document.querySelector('.sc-current');
        var menu_position;

        menu_position = menu_current_item.offsetLeft - 16;
        menu_indicator.style.left = menu_position + "px";
        menu_bar.style.backgroundPosition = menu_position - 8 + 'px';
        menu_item.forEach(
          function(select_menu_item) {
            select_menu_item.addEventListener('click', function(e) {
              e.preventDefault();
              menu_position = this.offsetLeft - 16;
              menu_indicator.style.left = menu_position + "px";
              menu_bar.style.backgroundPosition = menu_position - 8 + 'px';
              [...select_menu_item.parentElement.children].forEach(
                sibling => {
                  sibling.classList.remove('sc-current');
                })
              select_menu_item.classList.add('sc-current');
            });
          }
        )
      </script>