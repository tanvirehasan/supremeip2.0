<?php 

include "inc/header.php";
include_once 'controller/settings/settings_sql.php';

$data = SelectData('settings','');
$row = $data->fetch_object();

?> 

<div class="container-fluid flex-grow-1 container-p-y"> 
    
    <div class="row">
        <div class="col-12 menubtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Menu Setting</h3></div>
            <!-- Main Side Menu -->
            <div class="col-md-4 menu">
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Main Side Menu</label>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td>font size: <span id="fontsizevalu"></span>px</td>
                                <td><input type="text" name="font_size" class="form-control" min="1" max="100" value="<?=header_menu('font_size');?>" id="fontsize"></td>
                            </tr>
                            <tr>
                                <td>Line height: <span id="line-heightvalu"></span>px</td>
                                <td><input type="text" name="line_height" class="form-control" step="0.1" min="0.1" max="10" value="<?=header_menu('line_height');?>" id="line-height"></td>
                            </tr>
                        </table>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td  style="font-family:<?=header_menu('font_family');?>;">Font:</td>
                                <td>
                                    <select name="font_family" class="form-control" >
                                        <option value="<?=header_menu('font_family');?>"><?=header_menu('font_family');?></option>
                                        <?=font_select()?>
                                    </select>
                                </td>
                                <td> | </td>
                                <td  style="text-transform:<?=header_menu('text_transform');?>;">Letter case:</td>
                                <td>
                                    <select name="text_transform" class="form-control" >
                                        <option value="<?=header_menu('text_transform');?>">Select</option>
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
                                    <input type="color" value="<?=header_menu('font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                    <select name="font_color" class="form-control">
                                        <option value="<?php echo header_menu('font_color');?>" ><?=color_name(header_menu('font_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Hover Color:
                                    <input type="color" value="<?=header_menu('hover_color');?>" class="form-control" style='height: 50px; border:none;  padding:0' >
                                    <select name="hover_color" class="form-control">
                                        <option value="<?=header_menu('hover_color');?>" ><?=color_name(header_menu('hover_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Active Color:
                                    <input type="color" value="<?=header_menu('active_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="active_color" class="form-control">
                                        <option value="<?=header_menu('active_color');?>" ><?=color_name(header_menu('active_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <label for="" class="form-label mt-3">background color</label>
                        <div style='height:50px;width:100%; border:none; padding:0; background:<?=header_menu('background_color');?>'></div>
                        <select name="background_color" id="" class="form-control">
                            <option value="<?=header_menu('background_color');?>" ><?=color_name(header_menu('background_color'))?></option>
                            <?php select_color(); ?>
                        </select>
                        <div class=" m-0 my-3"><button type="submit" name="sidebarupdated" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>

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
                                        <input type="color" value="<?=sub_menu('font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                        <select name="font_color" class="form-control">
                                            <option value="<?=sub_menu('font_color');?>" ><?=color_name(sub_menu('font_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>
                                    </td>
                                    <td>Hover Color:
                                        <input type="color" value="<?=sub_menu('hover_color');?>" class="form-control" style='height: 50px; border:none;  padding:0' >
                                        <select name="hover_color" class="form-control">
                                            <option value="<?=sub_menu('hover_color');?>" ><?=color_name(sub_menu('hover_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>
                                    </td>
                                    <td>Active Color:
                                        <input type="color" value="<?=sub_menu('active_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                        <select name="active_color" class="form-control">
                                            <option value="<?=sub_menu('active_color');?>" ><?=color_name(sub_menu('active_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>
                                    </td>
                                </tr>

                            </table>
                            <div class=" m-0 my-3"><button type="submit" name="sub_menu_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>
</div>
<!-- menu setting end  -->


<div class="row">
        <div class="col-12 teambtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Team Setting</h3></div>
            <!-- Our Team -->
            <div class="col-md-4 team">
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Team Setting</label>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td>name size:</td>
                                <td><input type="text" name="name_font_size" class="form-control" min="1" max="100" value="<?=Team_Design('name_font_size');?>" id="fontsize"></td>
                            
                                <td>designation size: </td>
                                <td><input type="text" name="designation_font_size" class="form-control" min="1" max="100" value="<?=Team_Design('designation_font_size');?>" id="fontsize"></td>
                            
                            </tr>
                        </table>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td  style="font-family:<?=Team_Design('name_font_family');?>;">name:</td>
                                <td>
                                    <select name="name_font_family" class="form-control" style="border:none;">
                                        <option value="<?=Team_Design('name_font_family');?>"><?=Team_Design('name_font_family');?></option>
                                        <?=font_select()?>
                                    </select>
                                </td>

                                <td style="font-family:<?=Team_Design('designation_font_family');?>;">| designation:</td>
                                <td>
                                    <select name="designation_font_family" class="form-control" style="border:none;">
                                        <option value="<?=Team_Design('designation_font_family');?>"><?=Team_Design('designation_font_family');?></option>
                                        <?=font_select()?>
                                    </select>
                                </td>


                            </tr>
                        </table>                   
                        <table style="width: 100%;">
                            <tr>
                                <td>Name Color:
                                    <input type="color" value="<?=Team_Design('name_font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                    <select name="name_font_color" class="form-control">
                                        <option value="<?=Team_Design('name_font_color');?>" ><?=color_name(Team_Design('name_font_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>D-color:
                                    <input type="color" value="<?=Team_Design('designation_font_color');?>" class="form-control" style='height: 50px; border:none;  padding:0' >
                                    <select name="designation_font_color" class="form-control">
                                        <option value="<?=Team_Design('designation_font_color');?>" ><?=color_name(Team_Design('designation_font_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Icon:
                                    <input type="color" value="<?=Team_Design('icon_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="icon_color" class="form-control">
                                        <option value="<?=Team_Design('icon_color');?>" ><?=color_name(Team_Design('icon_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Icon BG:
                                    <input type="color" value="<?=Team_Design('icon_bg_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="icon_bg_color" class="form-control">
                                        <option value="<?=Team_Design('icon_bg_color');?>" ><?=color_name(Team_Design('icon_bg_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>

                                <td>hover:
                                    <input type="color" value="<?=Team_Design('hover_color');?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="hover_color" class="form-control">
                                        <option value="<?=Team_Design('hover_color');?>" ><?=color_name(Team_Design('hover_color'))?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>


                           
                            </tr>
                        </table>
                        <label for="" class="form-label mt-3">background color</label>
                        <div style='height:50px;width:100%; border:none; padding:0; background:<?=Team_Design('background_color');?>'></div>
                        <select name="background_color" id="" class="form-control">
                            <option value="<?=Team_Design('background_color');?>" ><?=color_name(Team_Design('background_color'))?></option>
                            <?php select_color(); ?>
                        </select>
                        <div class=" m-0 my-3"><button type="submit" name="team_design_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>
           
</div>



<div class="row">
    <div class="col-12 pagebtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Page Setting</h3></div>
    
    <div class="col-md-12 page">
        <!-- default_img -->
            <div class="card p-3 bg" >
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            <label class=" form-label " style="font-weight:700;">Set Default Image 1</label> 
                            <div class="drop-zone">                  
                                <?php 
                                    if ($row->default_img==null) {?>
                                        <span class="drop-zone__prompt">Set Default Image</span>                        
                                    <?php }else{ ?>
                                        <img class="drop-zone__prompt" width="100%" src="../assets/mediacenter/<?=$row->default_img?>">
                                        <input type="hidden" name="default_img2" value="<?=$row->default_img?>">
                                <?php } ?>                                              
                                <input type="file" name="default_img" class="drop-zone__input">
                            </div> 
                        </div>

                        <div class="col-md-2"> 
                            
                        <label class=" form-label" style="font-weight:700;">Set Default Image 2</label> 
                            <div class="drop-zone">                  
                                <?php 
                                    if ($row->default_img2==null) {?>
                                        <span class="drop-zone__prompt">Set Default Image</span>                        
                                    <?php }else{ ?>
                                        <img class="drop-zone__prompt" width="100%" src="../assets/mediacenter/<?=$row->default_img2?>">
                                        <input type="hidden" name="default_img3" value="<?=$row->default_img2?>">
                                <?php } ?>                                              
                                <input type="file" name="default_img2" class="drop-zone__input">
                            </div> 
                                                      
                        </div>


                    <div class="col-md-2">  
                        <label class=" form-label" style="font-weight:700;">Overlay color left</label> 
                        <p style='height:100px;width:100%; border:none; background:<?=$row->Overlay_color?>'></p>
                        <select name="Overlay_color" id="" class="form-control">
                            <option value="<?=$row->Overlay_color?>"><?=color_name($row->Overlay_color)?></option>
                        <?php 
                                $data = SelectData('color_settings','');
                                while ($textcolor = $data->fetch_object()) {?>
                                <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                            <?php } ?>
                        </select>
                        <input type="text" value="<?=$row->Overlay_color_opasity?>" name="Overlay_color_opasity" class="form-control" placeholder="10%">
                    </div>

                    <div class="col-md-2">  
                        <label class=" form-label" style="font-weight:700;">Overlay color right</label> 
                        <p style='height:100px;width:100%; border:none; background:<?=$row->Overlay_color2?>'></p>
                        <select name="Overlay_color2" id="" class="form-control">
                            <option value="<?=$row->Overlay_color2?>"><?=color_name($row->Overlay_color2)?></option>
                        <?php 
                                $data = SelectData('color_settings','');
                                while ($textcolor = $data->fetch_object()) {?>
                                <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                            <?php } ?>
                        </select>
                        <input type="text" value="<?=$row->Overlay_color2_opasity?>" name="Overlay_color2_opasity" class="form-control" placeholder="10%">
                    </div>



                    <div class="col-md-2">  
                        <label class=" form-label " style="font-weight:700;">Page Background</label> 
                        <p style='height:100px;width:100%; border:none; background:<?=$row->default_theam_color?>'></p>
                        <select name="default_theam_color" id="" class="form-control">
                            <option value="<?=$row->default_theam_color?>" ><?=color_name($row->default_theam_color)?></option>
                        <?php 
                                $data = SelectData('color_settings','');
                                while ($textcolor = $data->fetch_object()) {?>
                                <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-2">  
                        <label class=" form-label " style="font-weight:700;">Shadow Color</label> 
                        <p style='height:100px;width:100%; border:none; background:<?=$row->shadow_color?>'></p>
                        <select name="shadow_color" id="" class="form-control">
                            <option value="<?=$row->shadow_color?>"><?=color_name($row->shadow_color)?></option>
                        <?php 
                                $data = SelectData('color_settings','');
                                while ($textcolor = $data->fetch_object()) {?>
                                <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                            <?php } ?>
                        </select>
                        <input type="text" value="<?=$row->shadow_color_number?>" name="shadow_color_number" class="form-control" placeholder="10%">
                    </div>
                    

                    </div>
                    <div class=" m-0 my-3">
                        <button type="submit" name="Set_Default_img_color" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 
         </div>


        <div class="col-md-4 page" >
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class="h5 w-100" style="font-weight:700;">Section Title Design </label>
                    <table class="mb-3" style="width: 100%;">
                        <tr>
                            <td>font size:</td>
                            <td><input type="text" name="font_size" class="form-control" min="1" max="100" value="<?=Section_Design('font_size');?>" id="fontsize"></td>
                        </tr>
                    </table>
                    <table class="mb-3" style="width: 100%;">
                        <tr>
                            <td  style="font-family:<?=Section_Design('font_family');?>;">Font Family <?=Section_Design('font_family');?></td>
                            <td>
                                <select name="font_family" class="form-control" style="border:none;">
                                    <option value="<?=Section_Design('font_family');?>"><?=Section_Design('font_family');?></option>
                                    <?=font_select()?>
                                </select>
                            </td>
                        </tr>
                    </table>                   
                    <table style="width: 100%;">
                        <tr>
                            <td>Text Color:
                                <input type="color" value="<?=Section_Design('font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                <select name="font_color" class="form-control">
                                    <option value="<?=Section_Design('font_color');?>" ><?=color_name(Section_Design('font_color'))?></option>
                                    <?php select_color(); ?>
                                </select>
                            </td>
                            <td>Text BG Color:
                                <input type="color" value="<?=Section_Design('text_bg_color');?>" class="form-control" style='height: 50px; border:none;  padding:0' >
                                <select name="text_bg_color" class="form-control">
                                    <option value="<?=Section_Design('text_bg_color');?>" ><?=color_name(Section_Design('text_bg_color'))?></option>
                                    <?php select_color(); ?>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <div class=" m-0 my-3"><button type="submit" name="section_updated" class="btn btn-primary">Update</button></div> 
                </form> 
            </div> 
        </div>

            <div class="col-md-4 page" >
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Heading Text</label>
                            <table class="mb-3" style="width: 100%;">
                            </table>
                            <table class="mb-3" style="width: 100%;">
                                <tr>
                                    <td>font size:</td>
                                    <td><input type="text" name="page_header_font_size" class="form-control" min="1" max="100" value="<?=settings('page_header_font_size');?>" id="font_size_submenu"></td>

                                    <td  style="font-family:<?=settings('page_header_font_famaily');?>;">Font:</td>
                                    <td>
                                        <select name="page_header_font_famaily" class="form-control">
                                            <option value="<?=settings('page_header_font_famaily');?>"><?=settings('page_header_font_famaily');?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                    <td> | </td>
                                    <td  style="text-transform:<?=settings('page_header_font_lettercash');?>;">Letter case:</td>
                                    <td>
                                        <select name="page_header_font_lettercash" class="form-control" >
                                            <option value="<?=settings('page_header_font_lettercash');?>">Select</option>
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
                                        <input type="color" value="<?=settings('page_header_font_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                        <select name="page_header_font_color" class="form-control">
                                            <option value="<?=settings('page_header_font_color');?>" ><?=color_name(settings('page_header_font_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>

                                    </td>

                                    <td>Icon Color:
                                        <input type="color"  value="<?=settings('page_header_icon_color');?>" class="form-control" style='height: 50px; border:none; padding:0'>

                                        <select name="page_header_icon_color" class="form-control">
                                            <option value="<?=settings('page_header_icon_color');?>" ><?=color_name(settings('page_header_icon_color'))?></option>
                                            <?php select_color(); ?>
                                        </select>


                                    </td>
                                </tr>
                            </table>
                            <div class=" m-0 my-3"><button type="submit" name="pageheader_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>

            <div class="col-md-4 page" >
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
                            </table>
                            <div class=" m-0 my-3"><button type="submit" name="Your_Lawyer_update" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>



</div>


    <div class="row">
        <div class="col-12 settingbtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Settings</h3></div>
      
       <!--------- Section -1 ---------->
        <div class="col-md-4 setting">
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





            <!-- color -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Clients Default bg</label>
                    <input type="color" name="client_bg_defult" value="<?= $row->client_bg_defult?>" class="form-control" style='height: 100px;'>
                    <div class=" m-0 my-3">
                        <button type="submit" name="client_bg" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 



            <!-- Top bar -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label " style="font-weight:700;">Top Bar</label>                

                    <table style="width:100%">
                <?php 
                    $topbardata = SelectData('topbar','');
                    while ($topbarrow = $topbardata->fetch_object()) {?>
                        <tr>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->text1?>"  name="text1"></td>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->link1?>"   name="link1"> </td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->text2?>"  name="text2"></td>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->link2?>"   name="link2"> </td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->text3?>"  name="text3"></td>
                            <td><input type="text" class="form-control" value="<?=$topbarrow->link3?>"   name="link3"> </td>
                        </tr>

                        <?php } ?>
                    </table>         
                                           
                    <div class=" m-0 my-3">
                        <button type="submit" name="topbar" class="btn btn-primary"> submit</button>
                    </div> 

                </form>
            </div> 


            <!-- social link -->
            <div class="card p-3">                             
                    <label for="categoryname" class=" form-label" style="font-weight:700;" id="show_form">Social list + </label>
                    <table style="width:100%">
                <?php 
                    $data = SelectData('social','');
                    if ($data->num_rows>0) {
                    while ($social = $data->fetch_object()) {?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <tr>
                            <td><input type="text" class="form-control" value="<?=$social->icon?>"   name="icon"></td>
                            <td><input type="text" class="form-control" value="<?=$social->name?>"  name="name"> </td>
                            <td><input type="text" class="form-control" value="<?=$social->social_url?>"   name="social_url"> </td>
                            <input type="hidden" name="sid" value="<?=$social->id?>">
                            <td class="ml-5"><button type="submit" class="btn" name="supdate"><i class="fas fa-check"></i> </button> </td>
                            <td class="m-0"><a href="general.php?social_delete=<?=$social->id?>" class="btn"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </form>                        
                <?php } } ?>
                    </table> 

                <form method="POST" action="" enctype="multipart/form-data">                
                    <div id="add_slink" class="mt-3">
                        <input type="text" class="form-control"  name="icon" placeholder="Icon">
                        <input type="text" class="form-control"  name="name" placeholder="Name"> 
                        <input type="text" class="form-control"  name="social_url" placeholder="Url"> 
                        <button type="submit" class="btn btn-primary mt-3" name="newadd">Submit </button>
                    </div>   
                </form>             
            </div> 

        </div>



<!--------- Section -2 ---------->    
        <!-- footer -->
        <div class="col-md-4 setting">
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Footer</label>
                    <textarea id="summernote" name="footer" class="form-control"><?= $row->footer?></textarea> 
                    <div class=" m-0 my-3">
                        <button type="submit" name="footerupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 


            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label " style="font-weight:700;">Print Page Header</label>                
                    <img src="../assets/brand/<?= $row->Print_page_header?>" alt="" width="100%;" class="img-thumbnail mb-4">            
                    <input type="file" class="form-control mb-4 " name="Print_page_header">  
                    <div class=" m-0 my-3">
                        <button type="submit" name="printheaderupdate" class="btn btn-primary"> Update</button>
                    </div> 
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
        
<!--------- Section -3 ---------->   
        <div class="col-md-4 setting">
            <!-- copyright -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Copyright</label>
                    <input type="text" name="copyright" value="<?= $row->copyrightupdate?>" class="form-control">
                    <div class=" m-0 my-3">
                        <button type="submit" name="copyrightupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 
            
            <!-- home_hover -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Home Hover</label>
                    <input type="color" style="width: 100%;" height="20px" value="<?=settings('home_hover');?>">
                    <select name="home_hover" class="form-control">
                        <option value="<?=settings('home_hover');?>" ><?=color_name(settings('home_hover'))?></option>
                        <?php select_color(); ?>
                    </select>
                    <div class=" m-0 my-3">
                        <button type="submit" name="hove_homebtn" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 
            
            
           
            <!-- whatsapp -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Whatsapp</label>
                    <input type="text" name="whatsapp" value="<?= $row->whatsapp?>" class="form-control">
                    <div class=" m-0 my-3">
                        <button type="submit" name="whatno" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 



            <!-- URL link -->
            <div class="card p-3">                             
                    <h3 for="categoryname" class=" form-label" style="font-weight:700;">Custom Url + </h3>
                    <table style="width:100%">
                        <tr>
                            <th>Request Url</th>
                            <th>Forward Url</th>
                        </tr>
                <?php 
                    $data = SelectData('custom_url','');
                    if ($data->num_rows>0) {
                    while ($urlrow = $data->fetch_object()) {?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <tr>
                            <td><input type="text" class="form-control" value="<?=$urlrow->Request_Url?>"  name="Request_Url"> </td>
                            <td><input type="text" class="form-control" value="<?=$urlrow->Forward_Url?>"   name="Forward_Url"> </td>
                            <input type="hidden" name="urlid" value="<?=$urlrow->urlid?>">
                            <td class="ml-5"><button type="submit" class="btn" name="urlupdate"><i class="fas fa-check"></i> </button> </td>
                            <td class="m-0"><a href="general.php?url_delete=<?=$urlrow->urlid?>" class="btn"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </form>                        
                <?php } } ?>
                    </table> 

                <form method="POST" action="" enctype="multipart/form-data">                
                    <div id="add_slink" class="mt-3">
                        <input type="text" class="form-control"  name="Request_Url" placeholder="Request Url">
                        <input type="text" class="form-control"  name="Forward_Url" placeholder="Forward Url"> 
                        <button type="submit" class="btn btn-primary mt-3" name="customurl">Submit </button>
                    </div>   
                </form>             
            </div> 


















        </div>

    </div><!-- row -->

<div class="row">
        <div class="col-12 globalbtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Global Color Setting</h3></div>

        <div class="col-md-6 global">
                        <!-- social link -->
            <div class="card p-3">                             
                    <label for="categoryname" class="h4 pt-2" style="font-weight:700;" id="show_form">Theme Color + </label>
                    <table style="width:100%">
                <?php 
                    $data = SelectData('color_settings','');
                    if ($data->num_rows>0) {
                    while ($social = $data->fetch_object()) {?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <tr>
                            <td><input type="text" class="form-control" value="<?=$social->color_name?>" name="color_name"   style="border:0"></td>
                            <td><input type="text" class="form-control" value="<?=$social->color_code?>"  name="color_code" style="border:0"> </td>
                            <td><input type="color" class="form-control" value="<?=$social->color_code?>" style="width: 50px; height:50px; border:0"> </td>
                            <input type="hidden" name="colorid" value="<?=$social->color_id?>">
                            <td class="ml-5"><button type="submit" class="btn" name="colorupdate"><i class="fas fa-check"></i> </button> </td>
                        </tr>
                    </form>                        
                <?php } } ?>
                    </table> 

                <form method="POST" action="" enctype="multipart/form-data">                
                    <div id="add_slink" class="mt-3">
                        <input type="text" class="form-control"  name="color_name" placeholder="Color Name"> 
                        <input type="text" class="form-control"  name="color_code" placeholder="Color Code"> 
                        <button type="submit" class="btn btn-primary mt-3" name="new_color_add">Submit </button>
                    </div>     
                </form>           
            </div> 
        </div>


        <div class="col-md-6 global">
            <!-- Font Color Settings -->
            <div class="card p-3">                             
                    <label for="categoryname" class="h4 pt-2" style="font-weight:700;">Font Color Settings </label>
                    <table style="width:100%">
                <?php 
                    $data3 = SelectData('text_color_settings','');
                    if ($data3->num_rows>0) {
                    while ($social = $data3->fetch_object()) {?>
                    <form method="POST" action="" id="fontcolorsettings" enctype="multipart/form-data">
                        <tr>
                            <td><?=$social->text_name?></td>

                            <td>
                            <select name="color_code" id="" onchange="fontcolorsave(this.value)" >
                                <option value="<?=$social->color_code?>">  <?=color_code_to_name($social->color_code, 'color_name' )?>  </option>

                                <?php 
                                    $data = SelectData('color_settings','');
                                    while ($textcolor = $data->fetch_object()) {?>
                                    <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                                <?php } ?>
                            </select>
                            </td>

                            <td>                                
                                <select name="font_fmaily">  
                                    <option style="font-family:<?=$social->font_fmaily?>;" value="<?=$social->font_fmaily?>"><?=$social->font_fmaily?></option>                                  
                                     <?php font_select(); ?>                                   
                                </select>
                            </td>

                           <td><input type="color" class="form-control" value="<?=$social->color_code?>" style="width: 50px; height:50px; border:0"> </td>
                            <input type="hidden" name="tcid" value="<?=$social->tcid?>">
                            <td class="ml-5"><button type="submit" class="btn" name="textcolorupdate"><i class="fas fa-check"></i> </button> </td>
                        </tr>
                    </form>                        
                <?php } } ?>
                    </table>                   
            </div> 
        </div>



            

</div>



</div>




<script>
    $(document).ready(function(){

        $(".menubtn").click(function(){
            $(".menu").toggle(200);
        });

        $(".teambtn").click(function(){
            $(".team").toggle(200);
        });

        $(".pagebtn").click(function(){
            $(".page").toggle(200);
        });

        $(".settingbtn").click(function(){
            $(".setting").toggle(200);
        });
        
        $(".globalbtn").click(function(){
            $(".global").toggle(200);
        });

    });
</script>

<style>
.menu,.team, .page, .setting, .global{display: none;}

</style>

<?php include 'inc/footer.php';?>