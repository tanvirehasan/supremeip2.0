<?php 
  include "inc/db.php";
  include "inc/function.php";
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

<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
 	<!-- detail content --> 
 	<div class="row mx-0 p-0 m-0" style="background:<?=sub_menu('background_color')?>">                            
    <div class="page_content  px-md-3 mb-5 p-0 m-0" >
      <?php 
        if (isset($_GET['team'])) {
          $id=str_replace('-', ' ', $_GET['team']);
          $data = SelectData('our_team', "WHERE Name='$id' ");
          $row = $data->fetch_object();?>

            <div class="row">
              <div class="col-md-3 py-3">
                <img src="assets/mediacenter/team/<?=$row->Profile_pic?>" alt="" style="width:100%; border-radius: 100%;" >
              </div>
              <div class="col-md-9 pt-5">
                <h1><b><?=$row->Name?></b></h1>
                <h3><?=$row->Designation?></h3>
                <h5><?=$row->Email?></h5>
                <h5><?=$row->Phone_No?></h5>
              </div>

            <?=html_entity_decode($row->About)?>

            </div>
 
        <?php }else{?>
            <!-- team -->
            <?php 
                $team_data = SelectData('our_team', "");
                if ($team_data->num_rows>0) {?>
                  <div class="py-5 text-center">
                    <h1 class="">Our Team</h1>
                    <p>Our best Team</p>                     
                  </div>
                    <div class="row p-0 px-md-3 mx-0 gx-3 pb-3">                      
                        <?php while ($teaminfo = $team_data->fetch_object()) {?>                    
                            <div class="col-md-3">                                        
                                <div class="team-card" >    
                                    <div class="team_icon"><i class="fas fa-phone-alt"></i><i class="fas fa-envelope"></i></div>                                      
                                    <div class="profile_pic"><a href="team.php?team=<?=str_replace(' ', '-', $teaminfo->Name)?>"><img src="assets/mediacenter/team/<?=$teaminfo->Profile_pic?>" alt="" > </a> </div>                                            
                                    <div class="team_info">
                                        <b><?=$teaminfo->Name?></b>
                                        <p ><?=$teaminfo->Designation?></p> 
                                    </div>                                 
                                </div>                                                            
                            </div> 
                        <?php }?>
                    </div> 
            <?php } ?>

        <?php } ?>    
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

