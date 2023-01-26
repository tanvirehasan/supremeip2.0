<?php

include "inc/header.php";
include_once 'controller/settings/settings_sql.php';

$data = SelectData('settings', '');
$row = $data->fetch_object();

?>

<div class="container-fluid flex-grow-1 container-p-y">

    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'Menu') { ?>

        <div class="row">
            <div class="col-12 menubtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Menu Setting</h3>
            </div>

            <div class="col-12 ">
                <div class="card bg-white p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <th><b>Logo</< /th>
                                <th><b>Favicon</b></th>
                                <th><b>SEO Banner</b></th>
                                <th><b>Site Title & Description</b></th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/brand/<?= $row->logo ?>" alt="" style="width:200px" class="img-thumbnail mb-4">
                                    <input type="file" class="form-control mb-2" name="logo" style="border:none;">
                                    <input type="hidden" name="logo2" value="<?= $row->logo ?>">
                                    <input type="range" name="logo_size" class="form-range" min="1" max="100" value="<?= $row->logo_size; ?>" id="logosize">
                                </td>

                                <!-- icon -->
                                <td>
                                    <img src="../assets/brand/<?= $row->favicon ?>" alt="" style="width:65px" class="img-thumbnail mb-4">
                                    <input type="file" class="form-control mb-4" name="favicon" style="border:none;">
                                    <input type="hidden" name="favicon2" value="<?= $row->favicon ?>">
                                </td>

                                <!-- SEO Banner -->
                                <td>
                                    <img src="../assets/brand/<?= $row->site_banner ?>" alt="" style="width:150px" class="img-thumbnail mb-4">
                                    <input type="file" class="form-control mb-4 " id="" name="site_banner" style="border:none;">
                                    <input type="hidden" name="site_banner2" value="<?= $row->site_banner ?>">

                                </td>

                                <!-- Site Title & Description -->
                                <td>
                                    <input type="text" class="form-control" name="site_title" value="<?= $row->site_title ?>">
                                    <textarea name="site_Description" class="form-control border" cols="50" rows="5"><?= $row->site_Description ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="text-right">
                                        <button type="submit" name="logoupdate" class="btn btn-primary"> Update</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>







            <!-- Main Side Menu -->
            <div class="col-md-12 menu">
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Main Menu</label>
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <span id="fontsizevalu">font size</span>
                                    <input type="text" name="font_size" class="form-control" min="1" max="100" value="<?= header_menu('font_size'); ?>" id="fontsize">
                                </td>

                                <td>
                                    <span id="">Divider size</span>
                                    <input type="text" name="divider_size" class="form-control" min="1" max="100" value="<?= header_menu('divider_size'); ?>" id="fontsize">
                                </td>
                                <td>
                                    <span style="font-family:<?= header_menu('font_family'); ?>;">Font:</span>
                                    <select name="font_family" class="form-control">
                                        <option value="<?= header_menu('font_family'); ?>"><?= header_menu('font_family'); ?></option>
                                        <?= font_select() ?>
                                    </select>
                                </td>
                                <td>
                                    <span style="text-transform:<?= header_menu('text_transform'); ?>;">Letter case:</span>
                                    <select name="text_transform" class="form-control">
                                        <option value="<?= header_menu('text_transform'); ?>">Select</option>
                                        <option value="uppercase">uppercase</option>
                                        <option value="lowercase">lowercase</option>
                                        <option value="capitalize">capitalize</option>
                                    </select>
                                </td>
                            </tr>


                            <!-- Dropdown design -->
                            <tr>
                                <td>
                                    <span id="">Dropdown Font size</span>
                                    <input type="text" name="downfont_size" class="form-control" min="1" max="100" value="<?= header_menu('downfont_size'); ?>" id="fontsize">
                                </td>

                                <td>
                                    <span id="">Dropdown Divider size</span>
                                    <input type="text" name="downdivider_size" class="form-control" min="1" max="100" value="<?= header_menu('downdivider_size'); ?>" id="fontsize">
                                </td>
                                <td>
                                    <span style="font-family:<?= header_menu('downfont_family'); ?>;">Dropdown Font:</span>
                                    <select name="downfont_family" class="form-control">
                                        <option value="<?= header_menu('downfont_family'); ?>"><?= header_menu('downfont_family'); ?></option>
                                        <?= font_select() ?>
                                    </select>
                                </td>
                                <td>
                                    <span style="text-transform:<?= header_menu('downtext_transform'); ?>;">Dropdown Letter case:</span>
                                    <select name="downtext_transform" class="form-control">
                                        <option value="<?= header_menu('downtext_transform'); ?>">Select</option>
                                        <option value="uppercase">uppercase</option>
                                        <option value="lowercase">lowercase</option>
                                        <option value="capitalize">capitalize</option>
                                    </select>
                                </td>
                            </tr>




                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    Menu BG color
                                    <input type="color" name="background_color" class="form-control" value="<?= header_menu('background_color'); ?>" style="border:none; padding:0">
                                </td>
                                <td>Text Color:
                                    <input type="color" name="font_color" value="<?= header_menu('font_color'); ?>" class="form-control" style='border:none; padding:0'>
                                </td>
                                <td>Text Hover Color:
                                    <input type="color" name="hover_color" value="<?= header_menu('hover_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>

                                <td>Text BG Hover Color:
                                    <input type="color" name="text_bg_hover_color" value="<?= header_menu('text_bg_hover_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                                <td>Divider color:
                                    <input type="color" name="divider_color" value="<?= header_menu('divider_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                                <td>Active Color:
                                    <input type="color" name="active_color" value="<?= header_menu('active_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Dropdown BG color:
                                    <input type="color" name="downbackground_color" class="form-control" value="<?= header_menu('downbackground_color'); ?>" style="border:none; padding:0">
                                </td>
                                <td>Text Color:
                                    <input type="color" name="downfont_color" value="<?= header_menu('downfont_color'); ?>" class="form-control" style='border:none; padding:0'>
                                </td>
                                <td>Text Hover Color:
                                    <input type="color" name="downhover_color" value="<?= header_menu('downhover_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>

                                <td>Text BG Hover Color:
                                    <input type="color" name="downtext_bg_hover_color" value="<?= header_menu('downtext_bg_hover_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                                <td>Divider color:
                                    <input type="color" name="downdivider_color" value="<?= header_menu('downdivider_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                                <td>Active Color:
                                    <input type="color" name="downactive_color" value="<?= header_menu('downactive_color'); ?>" class="form-control" style='border:none;  padding:0'>
                                </td>
                            </tr>

                        </table>
                        <div class=" m-0 my-3"><button type="submit" name="sidebarupdated" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


    <!--Team Setting -->
    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'Team') { ?>
        <div class="row">
            <div class="col-12 teambtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Team Setting</h3>
            </div>
            <!-- Our Team -->
            <div class="col-md-4 team">
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Team Setting</label>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td>name size:</td>
                                <td><input type="text" name="name_font_size" class="form-control" min="1" max="100" value="<?= Team_Design('name_font_size'); ?>" id="fontsize"></td>

                                <td>designation size: </td>
                                <td><input type="text" name="designation_font_size" class="form-control" min="1" max="100" value="<?= Team_Design('designation_font_size'); ?>" id="fontsize"></td>

                            </tr>
                        </table>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td style="font-family:<?= Team_Design('name_font_family'); ?>;">name:</td>
                                <td>
                                    <select name="name_font_family" class="form-control" style="border:none;">
                                        <option value="<?= Team_Design('name_font_family'); ?>"><?= Team_Design('name_font_family'); ?></option>
                                        <?= font_select() ?>
                                    </select>
                                </td>

                                <td style="font-family:<?= Team_Design('designation_font_family'); ?>;">| designation:</td>
                                <td>
                                    <select name="designation_font_family" class="form-control" style="border:none;">
                                        <option value="<?= Team_Design('designation_font_family'); ?>"><?= Team_Design('designation_font_family'); ?></option>
                                        <?= font_select() ?>
                                    </select>
                                </td>


                            </tr>
                        </table>
                        <table style="width: 100%;">
                            <tr>
                                <td>Name Color:
                                    <input type="color" value="<?= Team_Design('name_font_color'); ?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                    <select name="name_font_color" class="form-control">
                                        <option value="<?= Team_Design('name_font_color'); ?>"><?= color_name(Team_Design('name_font_color')) ?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>D-color:
                                    <input type="color" value="<?= Team_Design('designation_font_color'); ?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="designation_font_color" class="form-control">
                                        <option value="<?= Team_Design('designation_font_color'); ?>"><?= color_name(Team_Design('designation_font_color')) ?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Icon:
                                    <input type="color" value="<?= Team_Design('icon_color'); ?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="icon_color" class="form-control">
                                        <option value="<?= Team_Design('icon_color'); ?>"><?= color_name(Team_Design('icon_color')) ?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>
                                <td>Icon BG:
                                    <input type="color" value="<?= Team_Design('icon_bg_color'); ?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="icon_bg_color" class="form-control">
                                        <option value="<?= Team_Design('icon_bg_color'); ?>"><?= color_name(Team_Design('icon_bg_color')) ?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>

                                <td>hover:
                                    <input type="color" value="<?= Team_Design('hover_color'); ?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                    <select name="hover_color" class="form-control">
                                        <option value="<?= Team_Design('hover_color'); ?>"><?= color_name(Team_Design('hover_color')) ?></option>
                                        <?php select_color(); ?>
                                    </select>
                                </td>



                            </tr>
                        </table>
                        <label for="" class="form-label mt-3">background color</label>
                        <div style='height:50px;width:100%; border:none; padding:0; background:<?= Team_Design('background_color'); ?>'></div>
                        <select name="background_color" id="" class="form-control">
                            <option value="<?= Team_Design('background_color'); ?>"><?= color_name(Team_Design('background_color')) ?></option>
                            <?php select_color(); ?>
                        </select>
                        <div class=" m-0 my-3"><button type="submit" name="team_design_update" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>

        </div>

    <?php } ?>


    <!--Page Setting -->
    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'Page') { ?>
        <div class="row">
            <div class="col-12 pagebtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Page Setting</h3>
            </div>

            <div class="col-md-12 page">
                <!-- default_img -->
                <div class="card p-3 bg">
                    <table class="table">
                        <form method="POST" action="" enctype="multipart/form-data">

                            <tr>
                                <th>Page BG</th>
                                <th>Title Box BG</th>
                                <th>Sub-title Box BG</th>
                                <th>Content Box BG</th>
                                <th>Contact Box BG</th>
                                <th>Contact color</th>
                                <th>Sub-menu BG</th>
                                <th>Sub-menu color</th>
                                <th>Contact Text</th>
                            </tr>
                            <tr>
                                <td><input type="color" name="Center_bg" value="<?= $row->Center_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_title_bg" value="<?= $row->page_title_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_sub_title_bg" value="<?= $row->page_sub_title_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_content_bg" value="<?= $row->page_content_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_contact_bg" value="<?= $row->page_contact_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_contact_text_color" value="<?= $row->page_contact_text_color ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_submenu_bg" value="<?= $row->page_submenu_bg ?>" class="form-control border p-0"></td>
                                <td><input type="color" name="page_submenu_textcolor" value="<?= $row->page_submenu_textcolor ?>" class="form-control border p-0"></td>
                                <td><input type="text" name="page_contact_text" value="<?= $row->page_contact_text ?>" class="form-control border p-0"></td>

                            </tr>

                            <tr>
                                <td colspan="9">
                                    <div class="text-right"><button type="submit" name="page_bg_color" class="btn btn-primary"> Update</button></div>
                                </td>
                            </tr>



                        </form>
                </div>
                </table>
            </div>


            <div class="col-md-12 page">
                <div class="card p-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <label for="categoryname" class="h5 w-100" style="font-weight:700;">Section Title Design </label>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td>font size:</td>
                                <td><input type="text" name="font_size" class="form-control" min="1" max="100" value="<?= Section_Design('font_size'); ?>" id="fontsize"></td>
                            </tr>
                        </table>
                        <table class="mb-3" style="width: 100%;">
                            <tr>
                                <td style="font-family:<?= Section_Design('font_family'); ?>;">Font Family <?= Section_Design('font_family'); ?></td>
                                <td>
                                    <select name="font_family" class="form-control" style="border:none;">
                                        <option value="<?= Section_Design('font_family'); ?>"><?= Section_Design('font_family'); ?></option>
                                        <?= font_select() ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <table style="width: 100%;">
                            <tr>
                                <td>Text Color:
                                    <input type="color" name="font_color" value="<?= Section_Design('font_color'); ?>" class="form-control" style='height: 50px; border:none; padding:0'>
                                </td>
                                <td>Text BG Color:
                                    <input type="color" name="text_bg_color" value="<?= Section_Design('text_bg_color'); ?>" class="form-control" style='height: 50px; border:none;  padding:0'>
                                </td>
                            </tr>
                        </table>

                        <div class=" m-0 my-3"><button type="submit" name="section_updated" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>

        </div>
    <?php } ?>


    <!--social Setting -->
    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'General') { ?>

        <div class="row">
            <div class="col-12 settingbtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Home > Social Bar </h3>
            </div>
            <!--------- Section -1 ---------->
            <div class="col-md-12 setting">
                <!-- social link -->
                <div class="card p-3">
                    <label for="categoryname" class="form-label py-3" style="font-weight:700;">
                        <a href="javascript:" class="text-primary" id="show_list">List</a> |
                        <a href="javascript:" class="text-primary" id="show_form">Add New</a> |
                        <a href="javascript:" class="text-primary" id="show_Bar_Settings">Bar Settings</a> |
                        <a href="https://fontawesome.com/v5/search" target="null">Icon code</a>
                    </label>
                    <table style="width:100%" class="table table-bordered" id="list_social">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Class Name</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Image update</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                function slideout() {
                                    setTimeout(function() {
                                        $("#response").slideUp("slow", function() {});
                                    }, 2000);
                                }

                                $("#response").hide();
                                $(function() {
                                    $("#list").sortable({
                                        opacity: 0.8,
                                        cursor: 'move',
                                        axis: 'y',
                                        update: function() {
                                            var order = $(this).sortable("serialize") + '&update=socal';
                                            $.post("controller/menu/menu_postion_update.php", order, function(theResponse) {
                                                $("#response").html(theResponse);
                                                $("#response").slideDown('slow');
                                                slideout();
                                            });
                                        }
                                    });
                                });

                            });
                        </script>




                        <tbody id="list">
                            <?php
                            $data = SelectData('social', 'ORDER BY serial_list ASC');
                            if ($data->num_rows > 0) {
                                while ($social = $data->fetch_object()) { ?>
                                    <form method="POST" action="" enctype="multipart/form-data">

                                        <tr id="arrayorder_<?= $social->id ?>">
                                            <td><i class="<?= $social->icon ?>"></i></td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->icon ?>" name="icon"></td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->name ?>" name="name"> </td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->social_url ?>" name="social_url"> </td>
                                            <td><input type="file" class="form-control border-0" name="qr_image"> </td>
                                            <td><?php if ($social->social_url == '') { ?><img src="../assets/mediacenter/<?= $social->qr_image ?>" alt="" width="40px"><?php } ?></td>
                                            <input type="hidden" name="qr_image2" value="<?= $social->qr_image ?>">
                                            <input type="hidden" name="sid" value="<?= $social->id ?>">
                                            <td class="ml-5"><button type="submit" class="btn" name="supdate"><i class="fas fa-check"></i> </button> </td>
                                            <td class="m-0"><a href="setting.php?setting=General&social_delete=<?= $social->id ?>" class="btn"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>


                                    </form>
                            <?php }
                            } ?>
                        </tbody>
                    </table>

                    <form method="POST" action="" enctype="multipart/form-data">

                    </form>
                </div>

                <!-- Bar Settings -->
                <div class="card p-3" id="add_slink">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <h4>Add New</h4>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="icon" placeholder="Icon">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            <input type="text" class="form-control" name="social_url" placeholder="Url">
                            <input type="file" class="form-control" name="qr_image" placeholder="image">
                            <button type="submit" class="btn btn-primary mt-3" name="socalnewadd">Submit </button>
                        </div>
                    </form>
                </div>
                <!-- Bar Settings end -->



                <!-- Bar Settings -->
                <div class="card p-3" id="Bar_Settings">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <h4>Bar Settings</h4>
                        <div id="" class="mt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <label for="">Bar color</label>
                                        <input type="color" name="socialbar_bgcolor" value="<?= settings('socialbar_bgcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Icon color</label>
                                        <input type="color" name="socialbar_iconcolor" value="<?= settings('socialbar_iconcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Hover icon color</label>
                                        <input type="color" name="socialbar_iconhovercolor" value="<?= settings('socialbar_iconhovercolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Hover bg color</label>
                                        <input type="color" name="socialbar_hoverbgcolor" value="<?= settings('socialbar_hoverbgcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Image Size</label>
                                        <input type="text" name="socialbar_imagesize" value="<?= settings('socialbar_imagesize'); ?>" class="form-control" style="padding:0;">
                                    </td>
                                    <td>
                                        <label for="">save</label>
                                        <input type="submit" class="form-control bg-success" value="submit" name="socalsetingupdate">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <!-- Bar Settings end -->


            </div>
        </div><!-- row -->

        <script>
            $(document).ready(function() {

                $("#show_form").click(function() {
                    $("#add_slink").show();
                    $("#Bar_Settings, #list_social").hide();
                });

                $("#show_Bar_Settings").click(function() {
                    $("#Bar_Settings").show();
                    $("#add_slink, #list_social").hide();
                });

                $("#show_list").click(function() {
                    $("#list_social").show();
                    $("#add_slink,#Bar_Settings").hide();
                });

            });
        </script>
    <?php } ?>



    <!--=====================    
    Mobille social Setting     
    ============================-->
    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'mobilesocil') { ?>
        <div class="row">
            <div class="col-12 settingbtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Home >Mobile Social Bar </h3>
            </div>
            <!--------- Section -1 ---------->
            <div class="col-md-12 setting">
                <!-- social link -->
                <div class="card p-3">
                    <label for="categoryname" class="form-label py-3" style="font-weight:700;">
                        <a href="javascript:" class="text-primary" id="show_list">List</a> |
                        <a href="javascript:" class="text-primary" id="show_form">Add New</a> |
                        <a href="javascript:" class="text-primary" id="show_Bar_Settings">Bar Settings</a> |
                        <a href="https://fontawesome.com/v5/search" target="null">Icon code</a>
                    </label>
                    <table style="width:100%" class="table table-bordered" id="list_social">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Class Name</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Image update</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead>


                        <tbody id="list">
                            <?php
                            $data = SelectData('mobile_social', 'ORDER BY serial_list ASC');
                            if ($data->num_rows > 0) {
                                while ($social = $data->fetch_object()) { ?>
                                    <form method="POST" action="" enctype="multipart/form-data">

                                        <tr id="arrayorder_<?= $social->id ?>">
                                            <td><i class="<?= $social->icon ?>"></i></td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->icon ?>" name="icon"></td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->name ?>" name="name"> </td>
                                            <td><input type="text" class="form-control border-0" value="<?= $social->social_url ?>" name="social_url"> </td>
                                            <td><input type="file" class="form-control border-0" name="qr_image"> </td>
                                            <td><?php if ($social->social_url == '') { ?><img src="../assets/mediacenter/<?= $social->qr_image ?>" alt="" width="40px"><?php } ?></td>
                                            <input type="hidden" name="qr_image2" value="<?= $social->qr_image ?>">
                                            <input type="hidden" name="sid" value="<?= $social->id ?>">
                                            <td class="ml-5"><button type="submit" class="btn" name="mobilesocalupdate"><i class="fas fa-check"></i> </button> </td>
                                            <td class="m-0"><a href="setting.php?setting=mobilesocil&mobilesocial_delete=<?= $social->id ?>" class="btn"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>


                                    </form>
                            <?php }
                            } ?>
                        </tbody>
                    </table>

                    <form method="POST" action="" enctype="multipart/form-data">

                    </form>
                </div>

                <!-- Bar Settings -->
                <div class="card p-3" id="add_slink">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <h4>Add New</h4>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="icon" placeholder="Icon">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            <input type="text" class="form-control" name="social_url" placeholder="Url">
                            <input type="file" class="form-control" name="qr_image" placeholder="image">
                            <button type="submit" class="btn btn-primary mt-3" name="mobilesocalnewadd">Submit </button>
                        </div>
                    </form>
                </div>
                <!-- Bar Settings end -->



                <!-- Bar Settings -->
                <div class="card p-3" id="Bar_Settings">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <h4>Bar Settings</h4>
                        <div id="" class="mt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <label for="">Bar color</label>
                                        <input type="color" name="mobilesocialbar_bgcolor" value="<?= settings('mobilesocialbar_bgcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Icon color</label>
                                        <input type="color" name="mobilesocialbar_iconcolor" value="<?= settings('mobilesocialbar_iconcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Hover icon color</label>
                                        <input type="color" name="mobilesocialbar_iconhovercolor" value="<?= settings('mobilesocialbar_iconhovercolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Hover bg color</label>
                                        <input type="color" name="mobilesocialbar_hoverbgcolor" value="<?= settings('mobilesocialbar_hoverbgcolor'); ?>" class="form-control" style="border:none; padding:0;">
                                    </td>
                                    <td>
                                        <label for="">Image Size</label>
                                        <input type="text" name="mobilesocialbar_imagesize" value="<?= settings('mobilesocialbar_imagesize'); ?>" class="form-control" style="padding:0;">
                                    </td>
                                    <td>
                                        <label for="">save</label>
                                        <input type="submit" class="form-control bg-success" value="submit" name="mobilesocalsetingupdate">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <!-- Bar Settings end -->


            </div>
        </div><!-- row -->

        <script>
            $(document).ready(function() {

                $("#show_form").click(function() {
                    $("#add_slink").show();
                    $("#Bar_Settings, #list_social").hide();
                });

                $("#show_Bar_Settings").click(function() {
                    $("#Bar_Settings").show();
                    $("#add_slink, #list_social").hide();
                });

                $("#show_list").click(function() {
                    $("#list_social").show();
                    $("#add_slink,#Bar_Settings").hide();
                });

            });
        </script>

    <?php } ?>


























    <!--color Setting -->
    <?php if (isset($_GET['setting']) && $_GET['setting'] == 'Color') { ?>

        <div class="row">
            <div class="col-12 globalbtn">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Global Color Setting</h3>
            </div>

            <div class="col-md-12 global">
                <!-- Font Color Settings -->
                <div class="card p-3">
                    <label for="categoryname" class="h4 pt-2" style="font-weight:700;">Font Color Settings </label>
                    <table class="table  table-bordered text-center">
                        <?php
                        $data3 = SelectData('text_color_settings', '');
                        if ($data3->num_rows > 0) {
                            while ($social = $data3->fetch_object()) { ?>
                                <form method="POST" action="" id="fontcolorsettings" enctype="multipart/form-data">
                                    <tr>
                                        <td class="h5"><?= $social->text_name ?></td>

                                        <td>
                                            <select name="font_fmaily" class="form-control" style="border:0px">
                                                <option style="font-family:<?= $social->font_fmaily ?>;" value="<?= $social->font_fmaily ?>"><?= $social->font_fmaily ?></option>
                                                <?php font_select(); ?>
                                            </select>
                                        </td>

                                        <td><input type="color" name="color_code" class="form-control p-0 m-0" value="<?= $social->color_code ?>" style="border:0"> </td>
                                        <input type="hidden" name="tcid" value="<?= $social->tcid ?>">
                                        <td class=""><button type="submit" class="btn" name="textcolorupdate"><i class="fas fa-check"></i> </button> </td>
                                    </tr>
                                </form>
                        <?php }
                        } ?>
                    </table>
                </div>
            </div>





        </div>

    <?php } ?>


</div>




<?php include 'inc/footer.php'; ?>