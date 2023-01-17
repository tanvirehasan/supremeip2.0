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

<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?=header_menu('background_color');?>;padding:0px; padding-left:25px;">
  <div class="position-sticky">    
    <div class="logo_text ms-3 px-2 mb-4 py-4">
        <div class="logoimg">  
          <a href="/"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>      
        </div>      
      </div>

      <div class="accordion ps-2" id="accordionExample" >
        <div class="accordion-item bg-transparent">
          <div class="accordion-header p-0" id="homebtn">                              
              <a class="nav-link" href=""> <i class="fas fa-home"></i> Home </a>            
          </div>
        </div>
        <?php $data = SelectData('menu_new',"WHERE menu_perent='#' AND manu_status!='0' ");
              foreach($data as $row){?>

              <div class="accordion-item bg-transparent">
                <div class="accordion-header p-0" id="headingTwo">
                  <a class="accordion-button collapsed bg-transparent nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?=$row['menu_id']?>" aria-expanded="false" aria-controls="collapseTwo">     
                      <i class="<?=$row['icon']?> pe-1"></i> <?=$row['menu_title']?></a>
                </div>
                <div id="collapseTwo<?=$row['menu_id']?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body m-0 p-0">                    
                      <?php $pageid = $row['menu_title'];
                      $data = SelectData('menu_new',"WHERE menu_perent='$pageid' AND manu_status!='0' ");
                      foreach($data as $crow){?>                                      
                          <a class="nav-link" id="sub_menu_link"  href="pages.php?page=<?=$row['manu_url']?>&child=<?=$crow['manu_url']?>">
                          <i class="fas fa-jug "></i> <?=$crow['menu_title']?></a>
                      <?php } ?>                      
                  </div>
                </div>
              </div>             

        <?php } ?>  

        <?php $sdata = SelectData('menu_new',"WHERE menu_perent='single' AND manu_status!='0' ");
              foreach($sdata as $srow){?>
                    <div class="accordion-item bg-transparent">
                      <div class="accordion-header p-0" id="homebtn">                              
                          <a class="nav-link" href="pages.php?page=<?=$srow['menu_title']?>&child=<?=$srow['manu_url']?>"> <i class="<?=$srow['icon']?>"  pe-1></i> <?=$srow['menu_title']?> </a>            
                      </div>
                  </div>
              <?php } ?> 





      </div>
    </div>  
</nav>

    <style>
    .accordion-item button:focus {
         text-decoration: none !important;
         outline: 0 !important;
         box-shadow: 0 0 0 0 !important; 
    }
    </style>
