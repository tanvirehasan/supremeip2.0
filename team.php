<?php
include_once "inc/db.php";
include_once "inc/function.php";
$site_title = 'Our Team';
$site_Description = settings('site_Description');
$site_banner = settings('site_banner');
include_once "inc/header.php";
?>

<style type="text/css">
  /*Home Page*/

  .page1 {
    height: 250px;
  }

  .page1overlay {
    height: 250px;
    width: 100%;
    overflow: hidden;
  }


  .page2overlay {

    width: 100%;
    overflow: hidden;
  }

  .page3 {
    height: 250px;
  }

  .page3overlay {
    height: 250px;
    width: 100%;
    overflow: hidden;
  }

  .page-content {
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
      <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (TeamPage('img_yes_no', '1') == 1) ? TeamPage('image', '1') : ''; ?>);">
        <div class="page1overlay" style="background:<?= TeamPage('bg_color', '1') ?>; opacity:<?= TeamPage('opasity', '1') ?>;">
          <div class="p-5"><?= TeamPage('content', '1') ?></div>
        </div>
      </div>
    </div>

    <div class="col-md-6 m-0 p-0">
      <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (TeamPage('img_yes_no', '2') == 1) ? TeamPage('image', '2') : ''; ?>);">
        <div class="page1overlay " style="background:<?= TeamPage('bg_color', '2') ?>;opacity: <?= TeamPage('opasity', '2') ?>;">
          <div class="p-5"><?= TeamPage('content', '2') ?></div>
        </div>
      </div>
    </div>
  </div>


  <div class="row m-0">
    <!-- section-2 -->

    <div class="col-md-2 m-0 p-0 mb-lg-0" <?php
                                          if (TeamPage('img_yes_no', '3') == 1) {
                                            echo "style='background-image:url(assets/mediacenter/" . TeamPage('image', '3') . "'";
                                          } else {
                                            echo "style='background:" . TeamPage('bg_color', '3') . ";opacity:" . TeamPage('opasity', '3') . "'";
                                          } ?>>
      <div class=" page-content page2">
        <div class="p-5">
          <?= TeamPage('content', '3') ?>
        </div>
      </div>
    </div>



    <div class="col-md-8 m-0 p-0">
      <div class=" page-content page2" style="background-image:url(assets/mediacenter/<?= (TeamPage('img_yes_no', '4') == 1) ? TeamPage('image', '4') : ''; ?>);">
        <div class="page2overlay" style="background:<?= TeamPage('bg_color', '4') ?>;opacity: <?= TeamPage('opasity', '4') ?>;">

          <?php
          $team_data = SelectData('our_team', "ORDER BY serial_list ASC");
          if ($team_data->num_rows > 0) { ?>
            <?php while ($teaminfo = $team_data->fetch_object()) { ?>
              <div class="row mx-3 my-3" style="background-color:<?= Team_Design('background_color') ?>;">
                <div class="col-md-4 p-0">
                  <img src="assets/mediacenter/team/<?= $teaminfo->Profile_pic ?>" alt="" width="100%">
                </div>
                <div class="col-md-8 p-3">
                  <div class="p-0 m-0 pt-1 teamname"><?= $teaminfo->Name ?></div>
                  <div class="designation"><?= $teaminfo->Designation ?></div>
                  <div class="text">
                    <?php echo html_entity_decode($teaminfo->About) ?>
                    <div class="teamsocalbar team_icon pt-3">
                      <?php echo ($teaminfo->facebook != '') ? "<a href='$teaminfo->facebook'><i class='fab fa-facebook-f' aria-hidden='true'></i></a>" : ''; ?>
                      <?php echo ($teaminfo->whatsapp != '') ? "<a href='https://api.whatsapp.com/send?phone= $teaminfo->whatsapp'><i class='fab fa-whatsapp' aria-hidden='true'></i></a>" : ''; ?>
                      <?php echo ($teaminfo->Email != '') ? "<a href='mailto:$teaminfo->Email'><i class='fas fa-envelope' aria-hidden='true'></i></a>" : ''; ?>
                      <?php echo ($teaminfo->linkedin != '') ? "<a href='$teaminfo->linkedin'><i class='fab fa-linkedin' aria-hidden='true'></i></a>" : ''; ?>
                      <?php echo ($teaminfo->Phone_No != '') ? "<a href='tel:$teaminfo->Phone_No'><i class='fas fa-phone' aria-hidden='true'></i></a>" : ''; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-2 m-0 p-0 mb-lg-0" <?php
      if (TeamPage('img_yes_no', '5') == 1) {
        echo "style='background-image:url(assets/mediacenter/" . TeamPage('image', '5') . "'";
      } else {
        echo "style='background:" . TeamPage('bg_color', '5') . ";opacity:" . TeamPage('opasity', '5') . "'";
      } ?>>
      <div class=" page-content page2">
        <div class="p-5">
          <?= TeamPage('content', '5') ?>
        </div>
      </div>
    </div>


  </div>

  <div class="row m-0">
    <!-- section-3 -->
    <div class="col-md-6 m-0 p-0 mb-lg-0">
      <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (TeamPage('img_yes_no', '6') == 1) ? TeamPage('image', '6') : ''; ?>);">
        <div class="page3overlay" style="background:<?= TeamPage('bg_color', '6') ?>; opacity:<?= TeamPage('opasity', '6') ?>;">
          <div class="p-5"><?= TeamPage('content', '6') ?></div>
        </div>
      </div>
    </div>

    <div class="col-md-6 m-0 p-0">
      <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (TeamPage('img_yes_no', '7') == 1) ? TeamPage('image', '7') : ''; ?>);">
        <div class="page3overlay " style="background:<?= TeamPage('bg_color', '7') ?>;opacity: <?= TeamPage('opasity', '7') ?>;">
          <div class="p-5"><?= TeamPage('content', '7') ?></div>
        </div>
      </div>
    </div>

  </div>
</main>
<?php include_once 'inc/footer.php' ?>