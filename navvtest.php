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













            <div class="col-md-4 menu">                
                <!-- logo -->
            <table>
                <tr>
                    <td>
                        <div class="card p-3" >
                            <form method="POST" action="" enctype="multipart/form-data">
                                <label for="categoryname" class=" form-label " style="font-weight:700;">Logo</label>                
                                <img src="../assets/brand/<?= $row->logo?>" alt="" style="width:200px" class="img-thumbnail mb-4">            
                                <input type="file" class="form-control mb-4" name="logo">  
                                <input type="hidden" name="logo2" value="<?=$row->logo?>">  
                                <input type="range" name="logo_size" class="form-range" min="1" max="100" value="<?=$row->logo_size;?>" id="logosize"> <span id="logosize_val"></span>%

                                <div class=" m-0 my-3">
                                    <button type="submit" name="logoupdate" class="btn btn-primary"> Update</button>
                                </div> 
                            </form> 
                        </div> 
                    </td>

                    <td><!-- icon -->
                        <div class="card p-3 " >
                            <form method="POST" action="" enctype="multipart/form-data">
                                <label for="categoryname" class=" form-label " style="font-weight:700;">Favicon</label>                
                                <img src="../assets/brand/<?= $row->favicon?>" alt="" style="width:65px" class="img-thumbnail mb-4">            
                                <input type="file" class="form-control mb-4 " id="" name="favicon">  
                                <div class=" m-0 my-3">
                                    <button type="submit" name="faviconupdate" class="btn btn-primary"> Update</button>
                                </div> 
                            </form> 
                        </div> 
                    </td>
                </tr>
            </table>         
        </div>
        <!-- Logo End  -->



            <!-------Sub-Menu------>
            <div class="col-md-4 menu">

            <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Sub-menu</label>
                            <table class="mb-3" style="width: 100%;">
                                <tr>
                                    <td>font size:</td>
                                    <td><input type="text" name="font_size" class="form-control" min="1" max="100" value="<?=sub_menu('font_size');?>" id="font_size_submenu"></td>
                                </tr>
                                <tr>
                                    <td>Line height:</td>
                                    <td><input type="text" name="line_height" class="form-control" step="0.1" min="0.1" max="10" value="<?=sub_menu('line_height');?>" id="line-height"></td>
                                </tr>
                            </table>
                            <table class="mb-3" style="width: 100%;">
                                <tr>
                                    <td  style="font-family:<?=sub_menu('font_family');?>;">Font:</td>
                                    <td>
                                        <select name="font_family" class="form-control" >
                                            <option value="<?=sub_menu('font_family');?>"><?=sub_menu('font_family');?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                    <td> | </td>
                                    <td  style="text-transform:<?=sub_menu('text_transform');?>;">Letter case:</td>
                                    <td>
                                        <select name="text_transform" class="form-control" >
                                            <option value="<?=sub_menu('text_transform');?>">Select</option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            
                                        </select>
                                    </td>
                                </tr>
                            </table>                   
                            <table style="width: 100%;">
                                <tr>
                                    <td>Text Color:
                                        <input name="font_color" type="color" value="<?=sub_menu('font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                    </td>
                                    <td>Hover Color:
                                        <input type="color" name="hover_color" value="<?=sub_menu('hover_color');?>" class="form-control" style='height: 50px; border:none;  padding:0' >
                                    </td>
                                    <td>Active Color:
                                        <input type="color" name="active_color" value="<?=sub_menu('active_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    </td>
                                </tr>                             
                            </table>
                            <label for="" class="form-label mt-3">background color</label>
                            <input type="color" name="background_color" id="" class="form-control" value="<?=sub_menu('background_color');?>" style="height:45px;"> 
                            <div class=" m-0 my-3"><button type="submit" name="sub_menu_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 

            <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Your Lawyer is here</label>
                             <input type="text" class="form-control mb-3" value="<?=settings('Your_Lawyer_text');?>" name="Your_Lawyer_text" placeholder="Your_Lawyer_text">
                            <table class="mb-3" style="width: 100%;">
                            
                                <tr>
                                    <td>font size:</td>
                                    <td><input type="text" name="Your_Lawyer_font_size" class="form-control" min="1" max="100" value="<?=settings('Your_Lawyer_font_size');?>" id="font_size_submenu"></td>

                                    <td  style="font-family:<?=settings('Your_Lawyer_font_famaily');?>;">Font:</td>
                                    <td>
                                        <select name="Your_Lawyer_font_famaily" class="form-control">
                                            <option value="<?=settings('Your_Lawyer_font_famaily');?>"><?=settings('Your_Lawyer_font_famaily');?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                    <td> | </td>
                                    <td  style="text-transform:<?=settings('Your_Lawyer_font_lettercash');?>;">Letter case:</td>
                                    <td>
                                        <select name="Your_Lawyer_font_lettercash" class="form-control" >
                                            <option value="<?=settings('Your_Lawyer_font_lettercash');?>">Select</option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            
                                        </select>
                                    </td>
                                </tr>
                            </table>                   
                            <table style="width: 100%;">
                                <tr>
                                    <td>Text Color:
                                        <input type="color" value="<?=settings('Your_Lawyer_font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                        <select name="Your_Lawyer_font_color" class="form-control">
                                            <option value="<?=settings('Your_Lawyer_font_color');?>" ><?=color_name(settings('Your_Lawyer_font_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>
                                    </td>

                                    <td>BG Color:
                                        <input type="color"  value="<?=settings('Your_Lawyer_bg_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>

                                        <select name="Your_Lawyer_bg_color" class="form-control">
                                            <option value="<?=settings('Your_Lawyer_bg_color');?>" ><?=color_name(settings('Your_Lawyer_bg_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="Your_Lawyer_mobile" class="form-control">
                                            <option value="<?=settings('Your_Lawyer_mobile');?>" >Mobile <?php if(settings('Your_Lawyer_mobile')==1){echo 'On';}else{echo 'off';} ?></option>
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="Your_Lawyer_pc" class="form-control">
                                            <option value="<?=settings('Your_Lawyer_pc');?>" >PC <?php if(settings('Your_Lawyer_pc')==1){echo 'On';}else{echo 'off';} ?></option>
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class=" m-0 my-3"><button type="submit" name="Your_Lawyer_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div>
                
                <!-- Contact us  -->

            <?php 
                $cdata = SelectData('contactlawer','');
                $crow = $cdata->fetch_object();              
            ?>

            <div class="card p-3" style="background:<?= $crow->bg_color?>;">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Contact Us</label>
                    <input type="text" name="heading" class="form-control my-3" value="<?=$crow->heading?>">
                    <textarea id="contactus"  name="text" class="form-control editor"><?= $crow->text?></textarea>
                    <input type="hidden" name="imge_up2" value="<?=$crow->imge?>" >
                    <div class="imagecolor">
                        <div class="img">
                            <img src="../assets/mediacenter/<?=$crow->imge?>" class="my-3" alt="" width="100px">
                             <input type="file" name="imge_up" class="form-control my-3" >
                        </div>
                    </div>
                    <select name="bg_color" class="form-control ">
                        <option value="<?= $crow->bg_color?>" ><?= color_name($crow->bg_color)?></option>
                        <?php select_color();?>
                    </select>
                    <div class=" m-0 my-3">
                        <button type="submit" name="countactupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div>           
            </div>
</div>
<!-- menu setting end  -->