<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?=header_menu('background_color');?>;padding:0px; padding-left:25px;">
      <div class="position-sticky">    
        <div class="logo_text ms-3 px-2 mb-4 py-4">
            <div class="logoimg">  
              <a href="/"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>      
            </div>      
          </div>

        <ul class="navbar-nav ms-3 header_menu" >
          <li class="nav-item m-0 p-0 ">
            <a class="nav-link nav_menus m-0 p-0" href="/">           
            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg);"></i> Home</a>       
          </li>   
            
            <?php $data = SelectData('menu_new',"WHERE menu_perent='#' AND manu_status!='0' ");
                foreach($data as $row){?>
                    <li class="nav-item m-0 p-0 dropdown">
                        <a class="nav-link  py-1" >                 
                        <i class="<?=$row['icon']?>" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$row['menu_title']?></a>
                        
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
              <li class="nav-item m-0 p-0">
                <a class="nav-link nav_menus m-0 p-0" href="team.php">           
                <i class="fas fa-users" style="display: inline-block!important;transform: rotate(0deg);"></i> Our Team</a>       
              </li>             
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