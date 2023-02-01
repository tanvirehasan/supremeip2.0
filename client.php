<?php
    include_once "inc/db.php";
    include_once "inc/function.php";
    include_once "inc/header.php";
?>

<!-- main content -->
<main class="col-md-10 ms-md-auto col-lg-10 mt-5 mt-md-0 p-2" style="overflow: hidden;">
    <div class="row p-0 mx-0 m-0">
        <?php
        $data = SelectData('client_logos', "");
        while ($row = $data->fetch_object()) { ?>
            <div class="col-4 col-md-2 p-1 m-0">
                <div class="card p-2 bg-light" style="border: 1px solid #979797;">
                    <img src="assets/mediacenter/client/logo.jpeg" alt="" style="width: 100%;">
                </div>

            </div>
        <?php } ?>
    </div>

    <div class="row">
        <div class="col-md-12 mt-5">
            <?php $faq_data = SelectData('our_clients', "");
            if ($faq_data->num_rows > 0) { ?>
                <h3 class="section_title_page "> <i class="fa fa-circle-o-notch" aria-hidden="true"></i> Our Clients</h3>
                <div class="faq  p-0 px-md-0 " style="background-color:<?= widget_set('Section_bg', 3) ?>; padding:<?= widget_set('padding', 3) ?>px !important; border:<?= widget_set('border', 3) ?> !important;">
                
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php while ($faq = $faq_data->fetch_object()) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header p-0" id="flush-heading<?= $faq->cid ?>">
                                    <button class="accordion-button collapsed <?= widget_set('ptsize', 3) ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $faq->cid ?>" aria-expanded="false" aria-controls="flush-collapse<?= $faq->cid ?>" style="font-family:<?= widget_set('ptfont', 3) ?> !important; color:<?= widget_set('ptcolor', 3) ?> !important; text-transform:<?= widget_set('ptcase', 3) ?> !important;"><?= $faq->client_countri ?></button>
                                </h2>
                                <div id="flush-collapse<?= $faq->cid ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $faq->cid ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body fw-normal <?= widget_set('pdsize', 3) ?>" style="font-family:<?= widget_set('pdfont', 3) ?> !important; color:<?= widget_set('pdcolor', 3) ?> !important; text-transform:<?= widget_set('pdcase', 3) ?> !important;"><?= html_entity_decode($faq->client_ditils, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            <?php } ?>
            <!-- FAQ End-->
        </div>
    </div>
</main>



<?php include_once 'inc/footer.php' ?>