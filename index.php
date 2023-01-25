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
    <title><?=settings('site_title')?></title> 
    <!-- <base href="http://localhost/supremeip2.0/"> -->
    <meta name="description" content="<?=settings('site_Description')?>" />
    <meta name="keywords" content="trademark, ipr, patent, design, copyright, registration, renewal, objection, opposition, assignment, remove, journal, search,">
    <meta name="author" content="SUPREMEiP">
    
    <meta property="og:url"                content="http://supremeip.com/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="SUPREMEiP"/>
    <meta property="og:description"        content="SUPREMEiP is top-ranked IP law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation."/>
    <meta property="og:image"              content="assets/mediacenter/<?=settings('site_banner')?>" />
    
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="32x32" />
   
    
    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">  
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  </head>

<?php include "inc/header.php"; ?>



<style type="text/css">
    /*Home Page*/
    .page1{ height:450px;}
    .page2{ height:250px;}
    .page3{ height:269px;}

    .page-content{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        
    }

    .page_titletext{
        color: #fff;
        padding-top: 10%;
        font-family: serif;
    }


    .page1overlay{
        height:450px;
        width: 100%;
        overflow: hidden;
    }


    .page2overlay{
        height:284px;
        width:100%;
        overflow: hidden;
    }


    .home-link{
        text-decoration: none;
        margin: 0;
        padding: 0;
    }










      @media only screen and (max-width: 600px) {
      .mobile-margin{
          margin-top: 60px;
      }
  }


</style>

<!-- main content -->
<main class="col-md-10 ms-md-auto col-lg-10 px-md-0 mx-0 px-0"  style="overflow: hidden;">  
<div class="row m-0">

  <!-- section-1 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-1.1-->      
        
        <div class="col-12 m-0 p-0" >    
        
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '1')==1) ? HomePage('image', '1') : '' ; ?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '1')?>; opacity:<?=HomePage('opasity', '1')?>;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '1')?></div> 
                    </a>
                </div>
            </div>  
            
        </div>
        
       

        <!--section-1.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '2')==1) ? HomePage('image', '2') : '' ; ?>);">   
                <div class="page2overlay " style="background:<?=HomePage('bg_color', '2')?>;opacity: <?=HomePage('opasity', '2')?>;">
                 <a class="home-link" href="<?=HomePage('link', '2')?>">
                    <div class="p-5" ><?=HomePage('content', '2')?></div> 
                 </a>
                </div>      
            </div>
        </div>
    
        <!--section-1.3--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '3')==1) ? HomePage('image', '3') : '' ; ?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '3')?>;opacity: <?=HomePage('opasity', '3')?>;"> 
                 <a class="home-link" href="<?=HomePage('link', '3')?>">
                    <div class="p-5" style="opacity: 1; z-index:999; "><?=HomePage('content', '3')?></div>  
                 </a>                 
                </div>                 
            </div>
        </div>

    </div>   
  </div>


  <!-- section-2 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">       

        <!--section-2.1--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '4')==1) ? HomePage('image', '4') : '' ; ?>);">  
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '4')?>; opacity:<?=HomePage('opasity', '4')?>;">
                    <a class="home-link" href="<?=HomePage('link', '4')?>">
                        <div class="p-5" ><?=HomePage('content', '4')?></div> 
                    </a>
                </div>                             
            </div>
        </div>



        <!--section-2.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '5')==1) ? HomePage('image', '5') : '' ; ?>);">  
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '5')?>;opacity: <?=HomePage('opasity', '5')?>;">
                    <a class="home-link" href="<?=HomePage('link', '5')?>">
                        <div class="p-5" ><?=HomePage('content', '5')?></div> 
                    </a>
                </div>                             
            </div>
        </div>


         <!--section-2.3-->        
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '6')==1) ? HomePage('image', '6') : '' ; ?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '6')?>; opacity: <?=HomePage('opasity', '6')?>;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '6')?></div> 
                    </a>
                </div>    
            </div>            
        </div>

    </div>   
  </div>


  <!-- section-3 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-3.1-->         
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '7')==1) ? HomePage('image', '7') : '' ; ?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '7')?>; opacity: <?=HomePage('opasity', '7')?>;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '7')?></div> 
                    </a>
                </div>    
            </div>            
        </div>
        
        <!--section-3.2--> 
        <a class="home-link" href="<?=HomePage('link', '8')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '8')==1) ? HomePage('image', '8') : '' ; ?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '8')?>;opacity: <?=HomePage('opasity', '8')?>;">                    
                    <a class="home-link" href="<?=HomePage('link', '8')?>">
                      <div class="p-5" > <?=HomePage('content', '8')?></div>
                    </a>                    
                </div>               
            </div>
        </div>
        </a>

        <!--section-3.3--> 

        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=(HomePage('img_yes_no', '9')==1) ? HomePage('image', '9') : '' ; ?>);">  
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '9')?>;opacity: <?=HomePage('opasity', '9')?>;">
                    <div class="home-link" href="<?=HomePage('link', '9')?>">
                        <div class="p-5" ><?=HomePage('content', '9')?></div> 
                    </div>
                </div>                             
            </div>
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
   



    
    
