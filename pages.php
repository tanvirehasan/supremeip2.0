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

    <link rel="icon" href="assets/brand/icon.png" sizes="32x32" />
    <link rel="icon" href="assets/brand/icon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/brand/icon.png" />    
    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">  
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
  </head>

<body id="supremeip">
  <div class="">
  <div class="row m-0 p-0">


<style type="text/css">    

.slid_rith_mune{
        top: 0;
        bottom: 0;
        width: 200px;
        position: absolute;
        height: 800px;
        margin-left:170px;
        padding:10px 20px;  
        display: none; 
        box-shadow: 2px 0px 2px #fbfbfb;
        }
 .slid_rith_mune li{
    list-style: none;
    border-bottom: 1px solid #fbfbfb;
 }
#sidebarMenu ul li:hover >ul{
    display:block;
}

</style>

    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:#ece7e3">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">        
              <a href="/"><img src="//supremeip.com/assets/brand/SUPREMEiP Law Firm.png" alt="SUPREMEiP"></a>
            </div>      
          </div>

        <ul class="navbar-nav ms-3 header_menu">
          <li class="nav-item m-0 p-0 ">
            <a class="nav-link nav_menus m-0 p-0 " href="/">           
            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg);"></i> Home</a>
          </li>
           
          
            <?php $data = SelectData('menu_new',"WHERE menu_perent='#' AND manu_status!='0' ");
                foreach($data as $row){?>
                    <li class="nav-item m-0 p-0 ">
                        <a class="nav-link nav_menus m-0 p-0 py-1 " href="#">                 
                        <i class="<?=$row['icon']?>" style="display: inline-block!important;transform: rotate(0deg);"></i><?=$row['menu_title']?></a>

                        
                            <ul class="slid_rith_mune bg-white">  

                                <?php 
                                $ci =1;
                                $pageid = $row['menu_title'];
                                $data = SelectData('menu_new',"WHERE menu_perent='$pageid' AND manu_status!='0' ");
                                foreach($data as $crow){?> 

                                <li class="nav-item">                
                                    <a class="nav-link nav_menu active_menu"  href="pages.php?page=<?=$row['manu_url']?>&child=<?=$crow['manu_url']?>"><i class="fas fa-jug" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$crow['menu_title']?></a>
                                </li>
                                <?php } ?>



                            </ul>

                        
                    </li>
            <?php } ?>    
          
      </ul>
      </div>




      <div class="copyright-footer">
         <div class="d-flex flex-column">
            <p style="font-size:12px"><font color="#000000">SUPREPEIP LAW FIRM<br>WhatsApp <a style="color:#000" href="https://wa.me/+8801613336333" target="_blank">+8801613336333</a><br>info@supremeip.com<br>mysipbd@gmail.com</font></p>
          </div>
          <!-- social icon -->         
          <div class="d-flex social">
                          <a class="p-2" style="color:#7a7a7a" href="https://www.facebook.com/SUPREMEiP/"><i class="fab fa-facebook-f"></i></a>
                          <a class="p-2" style="color:#7a7a7a" href="https://www.linkedin.com/company/supremeip/"><i class="fab fa-linkedin-in"></i></a>
                          <a class="p-2" style="color:#7a7a7a" href="https://www.supremeip.com/wp-content/uploads/2020/01/Tr"><i class="fab fa-weixin"></i></a>
                          <a class="p-2" style="color:#7a7a7a" href="https://wa.me/8801613336333"><i class="fab fa-whatsapp"></i></a>
                         
          </div>
          <div class="my-1 px-2" style="color:#7a7a7a;font-size:12px" >Copyright@ supremeip.com 2022</div>        
        </div> 
    </nav>
    
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
 	<div class="row mx-0" style="background:#ffffff;">
 		 <!--short sidebar -->
 		<div class="col-md-2 col-lg-2 pt-4 p-3 m-0 h-100 side-menu">
            <ul class="nav flex-column main_header">

                <?php 
                
                $data = SelectData('menu_new',"WHERE menu_perent='$page->menu_perent' AND manu_status!='0' ");
                foreach($data as $drow){?> 

                <li class="nav-item">                
                    <a class="nav-link nav_menu "  href="pages.php?page=<?=$_GET['page'];?>&child=<?=$drow['manu_url']?>"><i class="fas fa-jug" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$drow['menu_title']?></a>
                </li>
                <?php } ?>
                
            </ul>	

            <!-- Your lowyer -->
            <div class="lawyer pt-4">
                                   
                <div class="for_pc d-none d-sm-none d-md-block">
                    <h6 class="row section_title m-0" id="ylhbtn">
                    <div class="col-11 p-0" style="color:#7a7a7a !important;"><i style="color:#7a7a7a !important;" class="fas fa-user-graduate pe-2"></i>Consultation</div>
                        <div class="col-1 p-0 text-end"><i class="fal fa-angle-down"></i></div> </h6> 
                        <div class="team-card" id="ylh" style="background:#ffffff; display: none;">   
                        <div class="profile_pic"><img src="https://supremeip.com/assets/mediacenter/SUPREME IP WhatsApp New-5.png" alt="" > </a></div>                                            
                        <div class="team_info" style="background:#ffffff;"><p style="font-size:12px"><font color="#000000"><b>J.A. Chaudhury Reagan<br></b>Advocate, Supreme Court of Bangladesh <br>WhatsApp <a style="color:#000" href="https://wa.me/+8801613336333" target="_blank">+8801613336333</a><br>info@supremeip.com<br>WeChat: SUPREMEiP</font></p></div>                                 
                    </div> 
                </div>              
            </div>



 		</div>

        <div class="col-12 col-md-10 col-lg-10 pb-5 pt-4 " style="background:#ffffff; min-height: 900px ">                 
            <nav class="mb-1 d-md-none d-lg-none pt-5 pt-md-0 m-md-0">
                <ol class="nav mt-2" style="cursor: pointer;">
                    <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=http://supremeip.com/trademark"><i class="fab fa-facebook-square fs-5 text-muted"></i></a> </li>
                    <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=http://supremeip.com/trademark"><i class="fab fa-twitter-square fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=http://supremeip.com/trademark"><i class="fab fa-linkedin fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=http://supremeip.com/trademark"><i class="fab fa-whatsapp-square fs-5 text-muted"></i></a></li>
                    <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=http://supremeip.com/trademark"><i class="fas fa-envelope fs-5 text-muted "></i></a></li>
                    <li class="nav-link p-1 "><a href="print.php?id=48" target="null" > <i class="fas fa-print fs-5 text-muted "></i> </a> </li>
                </ol>                     
            </nav>

                            
            <div class="page_content  px-md-3 mb-5 p-0 m-0" >
             
                <div class="row mb-3">
                  <div class="col-md-6">
                    <nav aria-label="" class="sharebtn mb-3 text-end ">
                    <ol class="nav" style="cursor: pointer;">
                        <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=http://supremeip.com/trademark"><i class="fab fa-facebook-square fs-4 "></i></a> </li>
                        <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=http://supremeip.com/trademark"><i class="fab fa-twitter-square fs-4 "></i></a></li>
                        <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=http://supremeip.com/trademark"><i class="fab fa-linkedin fs-4 "></i></a></li>
                        <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=http://supremeip.com/trademark"><i class="fab fa-whatsapp-square fs-4 "></i></a></li>
                        <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=http://supremeip.com/trademark"><i class="fas fa-envelope fs-4 "></i></a></li>
                        <li class="nav-link p-1 "><a href="print.php?id=48" target="null" > <i class="fas fa-print  fs-4"></i> </a> </li>
                    </ol>                     
                </nav> 
                    
                  </div>


                  <div class="col-md-6">
                        
                  </div>

                <div class="page_content p-0 px-3" ><?=html_entity_decode($pageinfo->page_content)?></div>

            </div> 

            

       
 
        <!-- FAQ -->                 
        <?php $faq_data = SelectData('faq', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");

            if ($faq_data->num_rows>0) {?>
            <div class="faq mt-4 p-0 px-md-3 " style="background-color:<?=widget_set('Section_bg',3)?>; padding:<?=widget_set('padding',3)?>px !important; border:<?=widget_set('border',3)?> !important;">  
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
