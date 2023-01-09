<?php 
  include "inc/db.php";
  include "inc/function.php";

  $pageurl = $_GET['child'];
  $pdata = SelectData('menu_new',"WHERE manu_url='$pageurl' AND manu_status!='0' ");
  $page  = $pdata->fetch_object();

  $manu_title = $page->menu_page;
  $page_data = SelectData('pages', "WHERE manu_title='$manu_title' AND page_status='1'");
  $pageinfo  = $page_data->fetch_object();


  $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $baseurl=basename($_SERVER['REQUEST_URI']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRADEMARK in BANGLADESH (Complete Procedure) - SUPREMEiP Law Firm, Bangladesh</title> 
    <!--<base href="//supremeip.com">-->
    <meta property="og:url" content="http://supremeip.com/trademark" />
    <meta property="og:type" content="article" />
    <meta property="og:title"  content="TRADEMARK in BANGLADESH (Complete Procedure) -SUPREMEiP Law Firm, Bangladesh"/>
    <meta property="og:description" content=" "/>
    <meta property="og:image"content="https://supremeip.com/assets/mediacenter/Trademark in Bangladesh.png" />
    <meta property="fb:app_id" content="XXXXXXXXXXXXXXX" />    
    <meta name="keywords" content="" />
    <meta name="description" content=" ">

    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="32x32" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/brand/<?=settings('favicon')?>" />   

    <link rel='stylesheet' type='text/css' href='style.php' />
    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">  
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  
  </head>
    <?php include "inc/header.php"; ?>


    <style>
        .navbar-toggler:focus {
           text-decoration: none !important;
           outline: 0 !important;
           box-shadow: 0 0 0 0 !important; 
        }
    </style>

    <!-- mobile menu -->
        <!-- mobile menu -->
    <div class="d-sm-block d-md-none" >
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background:#ece7e3 !important">
        <div class="container-fluid  mb-2">
            <div class="d-flex">
              <a class="" href="index.php"><img src="assets/brand/SUPREMEiP Law Firm.png" width="60%" alt="SUPREMEiP"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white" style="outline: none !important;  box-shadow: none !important;"   ><i style="outline: none !important; box-shadow: none !important;" class="fas fa-bars"></i></span>
              </button>
            </div>

            <div class="collapse  navbar-collapse "  id="navbarNav2">
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


 <div class="mobile-margin" ></div>



<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">

 	<!-- detail content --> 
 	<div class="row mx-0 p-0 m-0" style="background:<?=sub_menu('background_color')?>">
 		 <!--short sidebar -->
 		<div class="col-md-2 col-lg-2 pt-4 p-0 h-100 side-menu">
            <ul class="nav flex-column ">
              <?php                 
                $data = SelectData('menu_new',"WHERE menu_perent='$page->menu_perent' AND manu_status!='0' ");
                foreach($data as $drow){?>
                <li class="nav-item">                
                    <a class="nav-link nav_menu "  href="pages.php?page=<?=$_GET['page'];?>&child=<?=$drow['manu_url']?>"><i class="fas <?=$drow['icon']?>" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$drow['menu_title']?></a>
                </li>
                <?php } ?>               
            </ul>	

            <!-- Your lowyer -->
              <?php                              
                    $cdata = SelectData('contactlawer','');
                    $crow = $cdata->fetch_object();?>
                    
                     
                    <div class="for_pc p-2 d-none d-sm-none d-md-block">
                        <h6 class="row section_title m-0" id="ylhbtn">
                        <div class="col-11 p-0" style="color:<?=sub_menu('font_color')?> !important;"><i style="color:<?=sub_menu('font_color')?> !important;" class="fas fa-user-graduate pe-2"></i><?=$crow->heading;?></div>
                            <div class="col-1 p-0 text-end"><i class="fal fa-angle-down"></i></div> </h6> 
                            <div class="team-card" id="ylh" style="background:<?= $crow->bg_color?>; <?php if(settings('Your_Lawyer_pc')!=1){echo "display: none;";}?>">   
                            <div class="profile_pic"><img src="assets/mediacenter/<?=$crow->imge;?>" alt="" > </a></div>                                            
                            <div class="team_info" style="background:<?= $crow->bg_color?>;"><?=$crow->text;?></div>                                 
                        </div> 
                    </div>
                    
                    
                    <?php if(settings('Your_Lawyer_mobile')==1){?>
                    <div class='for_mobile d-md-none d-lg-none mb-5'>
                        <h6 class="row section_title m-0" id="ylhbtn">
                        <div class="col-11 p-0" style="color:<?=sub_menu('font_color')?> !important;"><i style="color:<?=sub_menu('font_color')?> !important;" class="fas fa-user-graduate pe-2"></i><?=$crow->heading;?></div>
                            <div class="col-1 p-0 text-end"><i class="fal fa-angle-down"></i></div> </h6> 
                            <div class="team-card" id="ylh" style="background:<?= $crow->bg_color?>;">   
                            <div class="profile_pic"><img src="assets/mediacenter/<?=$crow->imge;?>" alt="" > </a></div>                                            
                            <div class="team_info" style="background:<?= $crow->bg_color?>;"><?=$crow->text;?></div>                                 
                        </div>
                    </div>
                    <?php } ?>



 		</div>

        <div class="col-12 col-md-10 col-lg-10 pb-5 pt-4 " style="background:<?php echo settings('Center_bg') ?>; min-height: 900px ">                 
            <nav class="mb-1 d-md-none d-lg-none pt-5 pt-md-0 m-md-0">
                <ol class="nav mt-2" style="cursor: pointer;">
                    <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 text-muted"></i></a> </li>
                    <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 text-muted "></i></a></li>
                    <li class="nav-link p-1 "><a href="print.php?id=<?= $pageinfo->page_id?>" target="null" > <i class="fas fa-print fs-5 text-muted "></i> </a> </li>
                </ol>                       
            </nav>

                            
            <div class="page_content  px-md-3 mb-5 p-0 m-0" >

            <div class="row">
                <div class="<?=($pageinfo->page_sub_title=='') ? 'col-12' : 'col-md-6' ; ?>">                    
                    <?=html_entity_decode($pageinfo->page_title)?>
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->page_sub_title)?>
                </div>
            </div>

            <!-- content content 1,2  -->
            <div class="row">
                <div class="<?=($pageinfo->content2=='') ? 'col-12' : 'col-md-6' ; ?>">
                     <?=html_entity_decode($pageinfo->content1)?>
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->content2)?>
                </div>
            </div>
            <!-- content content 4,5  end -->

            <!-- content3 -->
            <div class="row">
                <div class="<?=($pageinfo->content3=='') ? 'col-12' : 'col-md-6' ; ?>">
                <?php 
                        $price_data = SelectData('prices', "WHERE price_page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                        if ($price_data->num_rows>0) {?>                      
                            <!-- price table -->
                            <div class="p-0 mt-4" style="background-color:<?=widget_set('Section_bg',1)?>; padding:<?=widget_set('padding',1)?>px !important; border:<?=widget_set('border',1)?> !important;">
                                <h3 class="section_title_page ps-2"><i class="fas fa-money-check-alt px-1"></i> <?=$pageinfo->Section_Title_Price?></h3>
                                <div class="row mx-0">                       
                                    <table id='priceTable' class="table" >
                                        <?php while ($price = $price_data->fetch_object()) {?> 
                                                <tr>
                                                    <td style="width: 80%;" class="p-3" >
                                                        <div class='<?=widget_set('ptsize',1)?>' style="font-family:<?=widget_set('ptfont',1)?> !important; color:<?=widget_set('ptcolor',1)?> !important; text-transform:<?=widget_set('ptcase',1)?> !important " ><?=$price->price_title?></div>
                                                        <p class="<?=widget_set('pdsize',1)?> p-0 m-0" style="font-family:<?=widget_set('pdfont',1)?> !important; color:<?=widget_set('pdcolor',1)?> !important; text-transform:<?=widget_set('pdcase',1)?> !important; margin: 0; padding: 0;" > <?=html_entity_decode($price->Price_Description)?></p>
                                                    </td>
                                                    <td><h5 class="<?=widget_set('psize',1)?> p-0 m-0 pt-4" style="font-family:<?=widget_set('pfont',1)?> !important; color:<?=widget_set('pcolor',1)?> !important; text-transform:<?=widget_set('pcase',1)?> !important " ><?=$price->Priceamount?></h5></td>
                                                </tr>
                                        <?php } ?>
                                    </table>   
                                </div>
                            </div>
                        <?php } ?>
                        <!-- price table end -->                    
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->content3)?>
                </div>
            </div>
            <!-- content end -->

            <!-- File -->
            <div class="row">
                <div class="col-12?>">
                    <!-- download fle -->
                    <?php  $service_file_data = SelectData('page_file', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                    if ($service_file_data->num_rows>0) {?>  
                        <div class="downlod_file p-0 px-md-0 mt-4">
                            <h3 class="section_title_page"><i class="fas fa-file-download px-1"></i><?=$pageinfo->Section_Title_File?></h3>
                            <li class=" px-3 my-4 d-flex justify-content-between align-items-start">
                                <p class="fw-bold m-0 p-0 ">TTLE</p>
                                <p class="fw-bold m-0 p-0">LAST MODIFIED</p>
                            </li>
                        <div class="downlod_file_item">
                            <ul class="list-group list-group-flush">     
                            <?php  while ($servicefile = $service_file_data->fetch_object()) {?>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <a href="assets/servicefile/<?=$servicefile->file_name?>" class="text-dark" download><i class="fas fa-file-pdf px-1 text-danger"></i> <?=$servicefile->file_title?></a>
                                    <span><?=$servicefile->fileuploaddate?></span>
                                </li>  
                            <?php } ?>                            
                            </ul>
                        </div>
                    </div>
                    <?php } ?> 
                    <!-- download fle end -->
                </div>                
            </div>
            <!-- File end -->

            <!-- content content 4,5  -->
            <div class="row">
                <div class="<?=($pageinfo->content5=='') ? 'col-12' : 'col-md-6' ; ?>">
                     <?=html_entity_decode($pageinfo->content4)?>
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->content5)?>
                </div>
            </div>
            <!-- content content 4,5  end -->

            <!-- flowchart -->
            <div class="row">
                <div class="col-12?>">
                     <!-- flowchart -->
                    <?php 
                    $i=1;
                    $flowchart_data = SelectData('flowchart', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
                    if ($flowchart_data->num_rows>0) {?>                
                        <div class=" p-0 px-md-3 mt-4" style="background-color:<?=widget_set('Section_bg',2)?>; padding:<?=widget_set('padding',2)?>px !important; border:<?=widget_set('border',2)?> !important;" >
                            <h3 class="section_title_page "><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Flowchart?></h3>
                            <div class="">
                            <?php while ($flowchart = $flowchart_data->fetch_object()) {?>
                                <!-- stage1 -->
                                <div class="mb-2 p-3" style="background-color:<?=widget_set('stage_bg',2)?> !important;">
                                    <div class="<?=widget_set('ptsize',2)?> border-0 border-bottom pb-2" style="font-family:<?=widget_set('ptfont',2)?> !important; color:<?=widget_set('ptcolor',2)?> !important; text-transform:<?=widget_set('ptcase',2)?> !important; width: 120px; "><?=$flowchart->Process_Title?></div>
                                    <div class='<?=widget_set('psize',2)?>'  style="font-family:<?=widget_set('pfont',2)?> !important; color:<?=widget_set('pcolor',2)?> !important; text-transform:<?=widget_set('pcase',2)?> !important; "><?=$flowchart->Flowchart_Titel; ?></div>
                                    <div class='<?=widget_set('pdsize',2)?>'  style="font-family:<?=widget_set('pdfont',2)?> !important; color:<?=widget_set('pdcolor',2)?> !important; text-transform:<?=widget_set('pdcase',2)?> !important; margin: 0; padding: 0;"><?=html_entity_decode($flowchart->Flowchart_descripstion)?></div >
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- flowchart end -->
                </div>                
            </div>
            <!-- flowchart end -->


            <!-- content 6,7 -->
            <div class="row">
                <div class="<?=($pageinfo->content7=='') ? 'col-12' : 'col-md-6' ; ?>">
                     <?=html_entity_decode($pageinfo->content6)?>
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->content7)?>
                </div>
            </div>
            <!-- content 6,7 end -->

            <!-- FAQ -->
            <div class="row">
                <div class="col-12?>">
                     <!-- FAQ -->                 
                        <?php $faq_data = SelectData('faq', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");

                            if ($faq_data->num_rows>0) {?>
                            <div class="faq mt-4 p-0 px-md-0 " style="background-color:<?=widget_set('Section_bg',3)?>; padding:<?=widget_set('padding',3)?>px !important; border:<?=widget_set('border',3)?> !important;">  
                                <h3 class="section_title_page "><i class="fas fa-question-circle px-1"></i><?=$pageinfo->Section_Title_Faq?></h3> 

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <?php while ($faq = $faq_data->fetch_object()) {?> 
                                            <div class="accordion-item">
                                            <h2 class="accordion-header p-0" id="flush-heading<?=$faq->FAQid?>">
                                                <button class="accordion-button collapsed <?=widget_set('ptsize',3)?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$faq->FAQid?>" aria-expanded="false" aria-controls="flush-collapse<?=$faq->FAQid?>"   style="font-family:<?=widget_set('ptfont',3)?> !important; color:<?=widget_set('ptcolor',3)?> !important; text-transform:<?=widget_set('ptcase',3)?> !important;"  ><?=$faq->faq_title?></button>
                                            </h2>
                                            <div id="flush-collapse<?=$faq->FAQid?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$faq->FAQid?>" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body fw-normal <?=widget_set('pdsize',3)?>"  style="font-family:<?=widget_set('pdfont',3)?> !important; color:<?=widget_set('pdcolor',3)?> !important; text-transform:<?=widget_set('pdcase',3)?> !important;"  ><?=html_entity_decode($faq->faq_descrippstion)?></div>
                                            </div>
                                            </div>
                                    <?php } ?> 
                                </div>         

                            </div>
                        <?php } ?>
                        <!-- FAQ End-->
                </div>                
            </div>
            <!-- FAQ end -->

            <!-- content 8,9 -->
            <div class="row">
                <div class="<?=($pageinfo->content9=='') ? 'col-12' : 'col-md-6' ; ?>">
                     <?=html_entity_decode($pageinfo->content8)?>
                </div>
                <div class="col-md-6">                    
                    <?=html_entity_decode($pageinfo->content9)?>
                </div>
            </div>
            <!-- content 6,7 end -->

            
            
                        

       
 
                
                              
        </div> 
      

    </div><!-- row end  -->
</main>
 <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    
      <script src="assets/dist/js/dashboard.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="assets/dist/js/owl.carousel.min.js"></script>

  

  </body>
</html>

<script>
    $(document).ready(function(){

        $("#ylhbtn").click(function(){
            $("#ylh").toggle(300);
        });

        $(".readbtn").click(function(){
            $(".read").toggle(200);
        });

    });
</script>
