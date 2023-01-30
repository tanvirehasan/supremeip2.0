<?php
include_once "inc/db.php";
include_once "inc/function.php";
$site_title = 'Contact Us';
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
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '1') == 1) ? contactPage('image', '1') : ''; ?>);">
                <div class="page1overlay" style="background:<?= contactPage('bg_color', '1') ?>; opacity:<?= contactPage('opasity', '1') ?>;">
                    <div class="p-5"><?= contactPage('content', '1') ?></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 m-0 p-0">
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '2') == 1) ? contactPage('image', '2') : ''; ?>);">
                <div class="page1overlay " style="background:<?= contactPage('bg_color', '2') ?>;opacity: <?= contactPage('opasity', '2') ?>;">
                    <div class="p-5"><?= contactPage('content', '2') ?></div>
                </div>
            </div>
        </div>
    </div>


    <div class="row m-0">
        <!-- section-2 -->
        <div class="col-md-2 m-0 p-0 mb-lg-0" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '3') == 1) ? contactPage('image', '3') : ''; ?>);">
            <div class=" page-content page2">
                <div class="page2overlay" style="background:<?= contactPage('bg_color', '3') ?>; opacity:<?= contactPage('opasity', '3') ?>;">
                    <div class="p-5"><?= contactPage('content', '3') ?></div>
                </div>
            </div>
        </div>

        <div class="col-md-8 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '4') == 1) ? contactPage('image', '4') : ''; ?>);">
                <div class="page2overlay" style="background:<?= contactPage('bg_color', '4') ?>;opacity: <?= contactPage('opasity', '4') ?>;">
                    <div class="p-5">
                        <?php
                        echo contactPage('content', '4');

                        $data = SelectData('address_map', "");
                        while ($row = $data->fetch_object()) { ?>

                            <div class="row bg-light p-0 m-0">
                                <div class="col-md-6 p-3"><?= htmlspecialchars_decode($row->address, ENT_QUOTES | ENT_HTML5); ?>
                                </div>
                                <div class="col-md-6 p-0">
                                    <embed src="<?= $row->map ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 m-0 p-0 mb-lg-0" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '5') == 1) ? contactPage('image', '5') : ''; ?>);">
            <div class=" page-content page2">
                <div class="page2overlay" style="background:<?= contactPage('bg_color', '5') ?>; opacity:<?= contactPage('opasity', '5') ?>;">
                    <div class="p-5"><?= contactPage('content', '5') ?></div>
                </div>
            </div>
        </div>


    </div>

    <div class="row m-0">
        <!-- section-3 -->
        <div class="col-md-6 m-0 p-0 mb-lg-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '6') == 1) ? contactPage('image', '6') : ''; ?>);">
                <div class="page3overlay" style="background:<?= contactPage('bg_color', '6') ?>; opacity:<?= contactPage('opasity', '6') ?>;">
                    <div class="p-5"><?= contactPage('content', '6') ?></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 m-0 p-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?= (contactPage('img_yes_no', '7') == 1) ? contactPage('image', '7') : ''; ?>);">
                <div class="page3overlay " style="background:<?= contactPage('bg_color', '7') ?>;opacity: <?= contactPage('opasity', '7') ?>;">
                    <div class="p-5"><?= contactPage('content', '7') ?></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once 'inc/footer.php' ?>