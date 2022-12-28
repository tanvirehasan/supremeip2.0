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
    <base href="http://localhost/supremeip2.0/">
    <meta name="description" content="SUPREMEiP is top-ranked IP law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation." />
    <meta name="keywords" content="trademark, ipr, patent, design, copyright, registration, renewal, objection, opposition, assignment, remove, journal, search,">
    <meta name="author" content="SUPREMEiP">
    
    <meta property="og:url"                content="http://supremeip.com/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="SUPREMEiP"/>
    <meta property="og:description"        content="SUPREMEiP is top-ranked IP law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation."/>
    <meta property="og:image"              content="assets/mediacenter/supremeip.png" />
    
    <link rel="icon" href="https://www.supremeip.com/assets/brand/icon.png" sizes="32x32" />
    <link rel="icon" href="https://www.supremeip.com/assets/brand/icon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.supremeip.com/assets/brand/icon.png" />
    
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">  
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  </head>



<body id="supremeip">
  <div class="">

  <div class="row m-0 p-0">

  <div class="socialicon p-0" style="width:40px; height:100%; background:#fff; z-index:999; position:fixed;">
    <div class="sqecode" style="position: absolute; bottom:50px;">

      <div class="icon_box py-2">
        <i class="fab fa-whatsapp p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/frame.png" alt="" width="100%">
        </div> 
      </div> 

      <div class="icon_box py-2">
        <i class="fab fa-linkedin-in p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/frame.png" alt="" width="100%">
        </div> 
      </div>

      <div class="icon_box py-2">
        <i class="fab fa-weixin p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/frame.png" alt="" width="100%">
        </div> 
      </div>

      <div class="icon_box py-2">
        <i class="fab fa-youtube p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/frame.png" alt="" width="100%">
        </div> 
      </div>

      <div class="icon_box py-2">
        <i class="fab fa-facebook-f p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/fb.png" alt="" width="100%">
        </div> 
      </div>

      <div class="icon_box py-2">
        <i class="fas fa-map-marker-alt p-1 ps-3"></i>
        <div class="qr_link">
          <img src="assets/brand/fb.png" alt="" width="100%">
        </div> 
      </div>
      
        
        
    </div>


  </div>

    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse ms-4" style="background:#ece7e3">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">        
              <a href="/"><img src="//supremeip.com/assets/brand/SUPREMEiP Law Firm.png" alt="SUPREMEiP"></a>
            </div>      
          </div>

        <ul class="navbar-nav ms-3 header_menu" >
          <li class="nav-item m-0 p-0 ">
            <a class="nav-link nav_menus m-0 p-0 " href="/">           
            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg);"></i> Home</a>
          </li>
           
          
            <?php $data = SelectData('menu_new',"WHERE menu_perent='#' AND manu_status!='0' ");
                foreach($data as $row){?>
                    <li class="nav-item m-0 p-0 dropdown">
                        <a class="nav-link  py-1 dropdown-toggle" id="navbarkDropdown_<?=$row['menu_id']?>" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">                 
                        <i class="<?=$row['icon']?>" style="display: inline-block!important;transform: rotate(0deg);"></i><?=$row['menu_title']?></a>
                        
                            <ul class="dropdowncard dropdowncard<?=$row['menu_id']?>" > 
                                <?php $pageid = $row['menu_title'];
                                $data = SelectData('menu_new',"WHERE menu_perent='$pageid' AND manu_status!='0' ");
                                foreach($data as $crow){?>
                                <li class="nav-item">                
                                    <a class="nav-link m-0 p-0 "  href="pages.php?page=<?=$row['manu_url']?>&child=<?=$crow['manu_url']?>"><i class="fas fa-jug " style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$crow['menu_title']?></a>
                                </li>
                                <?php } ?>
                            </ul>                       
                    </li>

                    <script>
                    $(document).ready(function(){
                      $("#navbarkDropdown_<?=$row['menu_id']?>").click(function(){
                        $(".dropdowncard<?=$row['menu_id']?>").toggle();
                      });
                    });
                    </script>


            <?php } ?>   

      
      </ul>
      </div>
  </nav>


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


<!-- quick contact -->


 <div class="mobile-margin" ></div>

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



    .page-content a:hover{
        color: #3090C7!important;
    }


    .page-content a{
        color: #fff;
    }

    .readmore{
        font-family:arial;
        font-size: 16px;
        text-decoration: none;
        color: #fff;
        text-align: center;
        text-shadow:none;
        opacity: 1;
        font-weight: bold;
    }

    .readmore:hover{
        color:yellow;
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
        
            <div class="page-content page1" style="background-image:url(//supremeip.com/assets/mediacenter/Trademark_Bangladesh_Cost.jpg);">
                <div class="page1overlay" style="background:#ece7e3; opacity: 0.8;">
                    <a class="home-link" href="/trademark/">
                    <div class="p-5"><p></p><h1>Trademark Registration in Bangladesh</h1>
                      <a id="btn_style" href="/trademark" target="_blank">Read More</a><p></p>
                      </div> 
                    </a>
                </div>
            </div>  
            
        </div>
        
       

        <!--section-1.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/our_client.png);">   
                <div class="page2overlay " style="background:#ece7e3;opacity: 0.8;">
                 <a class="home-link" href="/about/client/">
                    <div class="p-5" ><a id="btn_style" href="/about/client/" target="_blank">Our Clients</a></div> 
                 </a>
                </div>      
            </div>
        </div>
    
        <!--section-1.3--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/About_Us_SUPREMEiP.png);">   
                <div class="page2overlay" style="background:#ece7e3;opacity: 0.8;"> 
                 <a class="home-link" href="/about/">
                    <div class="p-5" style="opacity: 1; z-index:999; "><a id="btn_style" href="/about/" target="_blank">About Us</a></div>  
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
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/incorporate_company_in_Bangladesh.png);">  
                <div class="page2overlay" style="background:#ece7e3;opacity: 0.8;">
                    <a class="home-link" href="/business/company/">
                        <div class="p-5" ><h4>How do I incorporate a company in Bangladesh?</h4>
<a id="btn_style" href="/business/company/" target="_blank">Read More</a></div> 
                    </a>
                </div>                             
            </div>
        </div>



        <!--section-2.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/import_export_license_in_bangladesh.png);">  
                <div class="page2overlay" style="background:#ece7e3;opacity: 0.8;">
                    <a class="home-link" href="/business/import-export">
                        <div class="p-5" ><h4>Export-Import License in Bangladesh</h4>
<a id="btn_style" href="/business/import-export/" target="_blank">Read More</a>
</div> 
                    </a>
                </div>                             
            </div>
        </div>


         <!--section-2.3-->        
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(//supremeip.com/assets/mediacenter/Trademark-Protection_in_Bangladesh.png);">
                <div class="page1overlay" style="background:#ece7e3; opacity: 0.8;">
                    <a class="home-link" href="/trademark/">
                    <div class="p-5"><h1>Brand Protection (IPR) in Bangladesh</h1>
<a id="btn_style" href="/ipr/" target="_blank">Read More</a>
</div> 
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
            <div class="page-content page1" style="background-image:url(//supremeip.com/assets/mediacenter/Patent_in_Bangladesh.png);">
                <div class="page1overlay" style="background:#ece7e3; opacity: 0.8;">
                    <a class="home-link" href="/trademark/">
                    <div class="p-5"><h1>Patent Registration in Bangladesh</h1>
<a id="btn_style" href="/patent/" target="_blank">Read More</a></div> 
                    </a>
                </div>    
            </div>            
        </div>
        
        <!--section-3.2--> 
        <a class="home-link" href="/bdbusiness">
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/Business_Bangladesh.png);">   
                <div class="page2overlay" style="background:#ece7e3;opacity: 0.8;">                    
                    <a class="home-link" href="/bdbusiness">
                      <div class="p-5" > <ul><li><a href="/bdbusiness/bdtrademark" target="_blank"><font color="#424242">ট্রেডমার্ক</font></a></li><li><a href="/bdbusiness/limited" target="_blank"><font color="#424242">কোম্পানী</font></a></li><li><a href="/bdbusiness/IRC" target="_blank"><font color="#424242">IRC-ERC লাইসেন্স</font></a></li></ul>

</div>
                    </a>                    
                </div>               
            </div>
        </div>
        </a>

        <!--section-3.3--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(//supremeip.com/assets/mediacenter/Contact_us_SUPREMEiP.png);">  
                <div class="page2overlay" style="background:#ece7e3;opacity: 0.8;">
                    <div class="home-link" href="">
                        <div class="p-5" ><p>WhatsApp +8801613336333<br>WeChat: SUPREMEiP<br>Email: info@supremeip.com<br></p>
                        <a id="btn_style" href="/contact/" target="_blank">Contact Us</a></div> 
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
   



    
    
