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
 


<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
 	<div class="row mx-0 p-0 m-0 d-flex justify-content-center" style="background:<?=sub_menu('background_color')?>">
 		<div class="col-md-9 mt-3">
           
        <div class="row">
            <div class="col-md-4 bg-warning">
                <h1 class="pt-5 mt-5 text-center">What is Lorem Ipsum?</h1>
            </div>

            <div class="col-md-8 bg-light p-0 m-0"> 
                <div class="notice"> <p class="bg-success p-2 float-end">There are many variations of passages</p> </div>               
                <p class="p-3 mt-5"> <strong>"</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <strong>"</strong></p>
            </div>


        </div>
        

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


