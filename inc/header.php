<body id="supremeip">
  <div class="">

  <div class="row m-0 p-0">

  <div class="socialicon p-0 d-none d-lg-block d-md-block" style="width:40px; height:100%; background:<?=settings('socialbar_bgcolor');?>; z-index:999; position:fixed;">
    <div class="sqecode" style="position: absolute; bottom:50px;">

      <?php $sdata = SelectData('social',"");
      foreach($sdata as $srow){?>

      <div class="icon_box py-2" id="icon_<?=$srow['id']?>">
        <?php
            if ($srow['social_url']=='') {?>
              <i class="<?=$srow['icon']?> p-1 ps-3"></i>
              <div class="qr_link" id="qr_link_<?=$srow['id']?>">
              <a href="<?=$srow['social_url']?>" target="NULL" ><img src="assets/mediacenter/<?=$srow['qr_image']?>" alt="" width="100%"></a>
              </div>
            <?php }else{?>
              <a href="<?=$srow['social_url']?>" target="NULL" ><i class="<?=$srow['icon']?> p-1 ps-3"></i></a>
            <?php } ?> 
      </div> 
    <?php } ?>
  
    </div>
  </div>

    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse ps-5" style="background:<?=header_menu('background_color');?>">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">  
              <a href="/"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>      
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



  <script>
        $(document).ready(function(){
          $("nav").click(function(){
            $(".qr_link").hide();
          });
        });
      </script>