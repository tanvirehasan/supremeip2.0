<?php
include_once "inc/db.php";
include_once "inc/function.php";

$pageurl = $_GET['child'];
$pdata = SelectData('menu_new', "WHERE manu_url='$pageurl' AND manu_status!='0' ");
$page  = $pdata->fetch_object();

$page_iid  = $page->page_id;
$page_data = SelectData('pages', "WHERE page_id='$page_iid' AND page_status='1'");
$pageinfo  = $page_data->fetch_object();

$site_title = strip_tags(html_entity_decode($pageinfo->page_title), ENT_QUOTES | ENT_XML1, 'UTF-8');
$site_Description = settings('site_Description');
$site_banner = settings('site_banner');


include_once "inc/header.php";
?>

<!-- main content -->
<main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
    <div class="row mx-0 p-0 m-0 d-flex justify-content-center" style="background:<?= settings('Center_bg') ?>">
        <div class="col-md-9 mt-3">
            <div class="row">
                <div class="col-md-4" style="background:<?= settings('page_title_bg') ?>">
                    <div class="p-3 pt-5"><?= html_entity_decode($pageinfo->page_title, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>
                </div>
                <div class="col-md-8 p-0 m-0" style="background:<?= settings('page_sub_title_bg') ?>">
                    <div class="notice d-none d-md-block d-lg-block">
                        <div class="p-2 float-end" style="background:<?= settings('page_contact_bg') ?>; color:<?= settings('page_contact_text_color') ?>;"><?= settings('page_contact_text') ?></div>
                    </div>
                    <div class="p-3 mt-5"><?= html_entity_decode($pageinfo->page_sub_title, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>
                </div>
                <div class="col-12 mt-3 p-1" style="background:<?= settings('page_submenu_bg') ?>">
                    <?php
                    $data = SelectData('menu_new', "WHERE menu_perent='$page->menu_perent' AND manu_status!='0' ");
                    foreach ($data as $drow) { ?>
                        <li class="nav-item d-flex float-start p-0 ">
                            <a class="nav-link nav_menu p-0 ps-1" style="color:<?= settings('page_submenu_textcolor') ?>" href="pages.php?page=<?= $page->menu_title; ?>&child=<?= $drow['manu_url'] ?>"> <?= $drow['menu_title'] ?> | </a>
                        </li>
                    <?php } ?>
                </div>

                <div class="col-md-12 mt-3 p-5" style="background:<?= settings('page_content_bg') ?>"><?= html_entity_decode($pageinfo->page_content, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>

                <!-- widget_set -->
                <div class="col-md-12 p-0 m-0 mb-5 ">
                    <?php
                    $price_data = SelectData('prices', "WHERE price_page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                    if ($price_data->num_rows > 0) { ?>
                        <!-- price table -->
                        <div class="p-0 mt-4" style="background-color:<?= widget_set('Section_bg', 1) ?>; padding:<?= widget_set('padding', 1) ?>px !important; ">
                            <h3 class="section_title_page m-0 ps-5 p-3 "><i class="fas fa-money-check-alt px-1"></i> <?= $pageinfo->Section_Title_Price ?></h3>
                            <div class="row mx-0 p-0">
                                <table id="priceTable" class="table table-bordered p-0 m-0" style="width:100%;">
                                    <tr>
                                        <th class="px-5 ">Description</th>
                                        <th class="px-5 ">Cost </th>
                                    </tr>
                                    <?php while ($price = $price_data->fetch_object()) { ?>
                                        <tr>
                                            <td class="px-5 p-4">
                                                <div class='<?= widget_set('ptsize', 1) ?>' style="font-family:<?= widget_set('ptfont', 1) ?> !important; color:<?= widget_set('ptcolor', 1) ?> !important; text-transform:<?= widget_set('ptcase', 1) ?> !important "><?= $price->price_title ?></div>
                                                <p class="<?= widget_set('pdsize', 1) ?>" style="font-family:<?= widget_set('pdfont', 1) ?> !important; color:<?= widget_set('pdcolor', 1) ?> !important; text-transform:<?= widget_set('pdcase', 1) ?> !important; margin: 0; padding: 0;"> <?= html_entity_decode($price->Price_Description, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></p>
                                            </td>
                                            <td>
                                                <h5 class="<?= widget_set('psize', 1) ?> p-4" style="font-family:<?= widget_set('pfont', 1) ?> !important; color:<?= widget_set('pcolor', 1) ?> !important; text-transform:<?= widget_set('pcase', 1) ?> !important "><?= $price->Priceamount ?></h5>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- price table end -->

                    <!-- download fle -->
                    <?php $service_file_data = SelectData('page_file', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                    if ($service_file_data->num_rows > 0) { ?>
                        <div class="downlod_file p-0 px-md-0 mt-4">
                            <h3 class="section_title_page"><i class="fas fa-file-download px-1"></i><?= $pageinfo->Section_Title_File ?></h3>
                            <li class=" px-3 my-4 d-flex justify-content-between align-items-start">
                                <p class="fw-bold m-0 p-0 ">TTLE</p>
                                <p class="fw-bold m-0 p-0">LAST MODIFIED</p>
                            </li>
                            <div class="downlod_file_item">
                                <ul class="list-group list-group-flush">
                                    <?php while ($servicefile = $service_file_data->fetch_object()) { ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <a href="assets/servicefile/<?= $servicefile->file_name ?>" class="text-dark" download><i class="fas fa-file-pdf px-1 text-danger"></i> <?= $servicefile->file_title ?></a>
                                            <span><?= $servicefile->fileuploaddate ?></span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- download fle end -->

                    <!-- flowchart -->
                    <?php
                    $i = 1;
                    $flowchart_data = SelectData('flowchart', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                    if ($flowchart_data->num_rows > 0) { ?>
                        <div class=" p-0 px-md-3 mt-4" style="background-color:<?= widget_set('Section_bg', 2) ?>; padding:<?= widget_set('padding', 2) ?>px !important; border:<?= widget_set('border', 2) ?> !important;">
                            <h3 class="section_title_page "><i class="fas fa-chart-line px-1"></i> <?= $pageinfo->Section_Title_Flowchart ?></h3>
                            <div class="">
                                <?php while ($flowchart = $flowchart_data->fetch_object()) { ?>
                                    <!-- stage1 -->
                                    <div class="mb-2 p-3" style="background-color:<?= widget_set('stage_bg', 2) ?> !important;">
                                        <div class="<?= widget_set('ptsize', 2) ?> border-0 border-bottom pb-2" style="font-family:<?= widget_set('ptfont', 2) ?> !important; color:<?= widget_set('ptcolor', 2) ?> !important; text-transform:<?= widget_set('ptcase', 2) ?> !important; width: 120px; "><?= $flowchart->Process_Title ?></div>
                                        <div class='<?= widget_set('psize', 2) ?>' style="font-family:<?= widget_set('pfont', 2) ?> !important; color:<?= widget_set('pcolor', 2) ?> !important; text-transform:<?= widget_set('pcase', 2) ?> !important; "><?= $flowchart->Flowchart_Titel; ?></div>
                                        <div class='<?= widget_set('pdsize', 2) ?>' style="font-family:<?= widget_set('pdfont', 2) ?> !important; color:<?= widget_set('pdcolor', 2) ?> !important; text-transform:<?= widget_set('pdcase', 2) ?> !important; margin: 0; padding: 0;"><?= html_entity_decode($flowchart->Flowchart_descripstion, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- flowchart end -->

                    <!-- FAQ -->
                    <?php $faq_data = SelectData('faq', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");

                    if ($faq_data->num_rows > 0) { ?>
                        <div class="faq mt-4 p-0 px-md-0 " style="background-color:<?= widget_set('Section_bg', 3) ?>; padding:<?= widget_set('padding', 3) ?>px !important; border:<?= widget_set('border', 3) ?> !important;">
                            <h3 class="section_title_page "><i class="fas fa-question-circle px-1"></i><?= $pageinfo->Section_Title_Faq ?></h3>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php while ($faq = $faq_data->fetch_object()) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header p-0" id="flush-heading<?= $faq->FAQid ?>">
                                            <button class="accordion-button collapsed <?= widget_set('ptsize', 3) ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $faq->FAQid ?>" aria-expanded="false" aria-controls="flush-collapse<?= $faq->FAQid ?>" style="font-family:<?= widget_set('ptfont', 3) ?> !important; color:<?= widget_set('ptcolor', 3) ?> !important; text-transform:<?= widget_set('ptcase', 3) ?> !important;"><?= $faq->faq_title ?></button>
                                        </h2>
                                        <div id="flush-collapse<?= $faq->FAQid ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $faq->FAQid ?>" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body fw-normal <?= widget_set('pdsize', 3) ?>" style="font-family:<?= widget_set('pdfont', 3) ?> !important; color:<?= widget_set('pdcolor', 3) ?> !important; text-transform:<?= widget_set('pdcase', 3) ?> !important;"><?= html_entity_decode($faq->faq_descrippstion, ENT_QUOTES | ENT_XML1, 'UTF-8') ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    <?php } ?>
                    <!-- FAQ End-->
                </div>
                <!-- widget_set end  -->

            </div>
        </div>

    </div><!-- row end  -->
</main>

<?php include_once 'inc/footer.php' ?>