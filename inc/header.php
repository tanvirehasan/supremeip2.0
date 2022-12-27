<?php 
  include "inc/db.php";
  include "inc/function.php";
  $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $baseurl=basename($_SERVER['REQUEST_URI']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best iP Law firm in Bangladesh - SUPREMEiP</title> 
    <base href="//supremeip.com">
    <meta name="description" content="SUPREMEiP” is top-ranked Corporate &amp; ip law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation." />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="SUPREMEiP">
    <meta property="og:url"                content="<?=$sharelink?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="SUPREMEiP"/>
    <meta property="og:description"        content="SUPREMEiP” is top-ranked Corporate &amp; ip law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation."/>
    <meta property="og:image"              content="assets/brand/<?=settings('logo')?>" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="32x32" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/brand/<?=settings('favicon')?>" />
    
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
    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?=header_menu('background_color');?>">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">        
              <a href="index.php"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>
            </div>      

            <?php $topbardata = SelectData('topbar','');
            $topbarrow = $topbardata->fetch_object() ?>
            <div class="my-2 topbar">
              <a class="text-muted  fw-bold " href="<?=$topbarrow->link1?>"><?=$topbarrow->text1?></a>
              <a class="text-muted  px-3 fw-bold " href="<?=$topbarrow->link2?>"><?=$topbarrow->text2?></a>
              <a class="text-muted  fw-bold " href="<?=$topbarrow->link3?>"><?=$topbarrow->text3?></a>
            </div>
          </div>

        <ul class="navbar-nav ms-3 header_menu">
          <li class="nav-item m-0 p-0 ">
            <a class="nav-link nav_menus m-0 p-0 <?php if (basename($_SERVER['REQUEST_URI'])=='index.php') { echo "active"; } ?>" href="index.php">           
            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg);"></i> Home</a>
          </li>
          <?php 
              $data = SelectData('pages',"WHERE page_parent_id='0' AND page_status='1' ORDER BY main_menu ASC ");
              while($row = $data->fetch_object()){?> 
          <li class="nav-item m-0 p-0 ">
            
              <a class="nav-link nav_menus m-0 p-0 py-1 
              <?php if (basename($_SERVER['REQUEST_URI'])=='page.php?page='.$row->page_url){
                 echo "active"." ";
                }

                 if (isset($_GET['page'])) {
                   if ('page.php?page='.$row->page_url=='page.php?page='.$_GET['page']) {
                      echo "active";
                   }                   
                 }?>" href="/<?=$row->page_url?>">
                 
                 <i class="<?=$row->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg);"></i>
                 <?=$row->manu_title?>


              <i class="fas fa-location-arrow " <?php if (basename($_SERVER['REQUEST_URI'])=='page.php?page='.$row->page_url)
                { echo "style='display: inline-block;'";}
                  if (isset($_GET['page'])) {
                    if ('page.php?page='.$row->page_url=='page.php?page='.$_GET['page']) {
                      echo "style=' display: inline-block;'";
                    }                   
                  }                    
                ?> >
                </i>
              </a>         
            </li>
          <?php } ?>
       
          <li class="nav-item">
              <a class="nav-link nav_menus m-0 p-0 py-1 <?php if (basename($_SERVER['REQUEST_URI'])=='post.php') { echo "active"; } ?> " href="post.php">
               <i class="fas fa-blog" style="display: inline-block!important;transform: rotate(0deg);"></i> blog & news<i class="fas fa-location-arrow"></i></a>
          </li>    

          
      </ul>
      </div>

      <div class="copyright-footer">
         <div class="d-flex flex-column">
            <?=settings('footer')?>

          </div>
          <!-- social icon -->         
          <div class="d-flex social">
            <?php 
              $data = SelectData('social','');
              if ($data->num_rows>0) {
              while ($social = $data->fetch_object()) {?>
              <a class="p-2" style="color:<?=header_menu('font_color')?>" href="<?=$social->social_url?>"><i class="<?=$social->icon?>"></i></a>
            <?php } } ?>
             
          </div>
          <div class="my-1 px-2" style="color:<?=header_menu('font_color')?>;font-size:12px" ><?=settings('copyrightupdate')?></div>        
        </div> 
    </nav>


    <!-- mobile menu -->
        <!-- mobile menu -->
    <div class="d-sm-block d-md-none" >
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background:<?=header_menu('background_color')?> !important">
        <div class="container-fluid  mb-2">
            <div class="d-flex">
              <a class="" href="index.php"><img src="assets/brand/<?=settings('logo')?>" width="60%" alt="SUPREMEiP"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <div class="collapse  navbar-collapse "  id="navbarNav2">
                <ul class="navbar-nav mt-3 mobile_menu">
                  <li class="nav-item">
                    <a class="nav-link nav_menu fw-bold" href="index.php" style="">
                    <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg); "></i>

                    Home</a>
                  </li>
                   <?php 
                      $data = SelectData('pages',"WHERE page_parent_id='0' AND page_status='1'");
                      while($row = $data->fetch_object()){?> 
                    <li class="nav-item">
                      <a class="nav-link nav_menu text-capitalize fw-bold "  href="page.php?page=<?=$row->page_url?>">
                      <i class="<?=$row->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg); "></i> <?=$row->manu_title?></a>
                    </li>
                   <?php }?>
                   <li class="nav-item">

                      <a class="nav-link nav_menus  text-capitalize fw-bold" href="post.php">
                        <i class="fas fa-blog" style="display: inline-block!important;transform: rotate(0deg);" ></i> blog & news</a>
                  </li>                  
                </ul>
            </div>
        </div>
    </nav> 
</div>


 <div class="mobile-margin" ></div>



 