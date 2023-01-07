<?php


//new color add

if (isset($_POST['new_color_add'])) {
 
  $colorname = $_POST['color_name'];
  $color_code = $_POST['color_code'];
  $insert = "INSERT INTO color_settings (color_name,color_code) VALUES ('$colorname','$color_code')";
  if (mysqli_query($conn, $insert)==TRUE) {   
  }
}


//color Update
if (isset($_POST['colorupdate'])) {
 
  $colorname = $_POST['color_name'];
  $color_code = $_POST['color_code'];
  $colorid = $_POST['colorid'];

  $update = "UPDATE `color_settings` SET `color_name`='$colorname',`color_code`='$color_code' WHERE color_id ='$colorid'  ";
  if (mysqli_query($conn, $update)==TRUE) {
         
  }
}


//btn style Update
if (isset($_POST['btnstyle_update'])) {
 
  $padding = $_POST['padding'];
  $font_size = $_POST['font_size'];
  $font_fmaily = $_POST['font_fmaily'];
  $Letter_case = $_POST['Letter_case'];
  $text_color = $_POST['text_color'];
  $btn_bg = $_POST['btn_bg'];


  $update = "UPDATE `button_setting` SET `padding`='$padding',`font_size`='$font_size',`font_fmaily`='$font_fmaily', `Letter_case`='$Letter_case', `text_color`='$text_color', `btn_bg`='$btn_bg' ";
  if (mysqli_query($conn, $update)==TRUE) {
         
  }
}






//color Update
if (isset($_POST['textcolorupdate'])) {
 
  $font_fmaily = htmlspecialchars($_POST["font_fmaily"]);
  $color_code = $_POST['color_code'];
  $tcid  = $_POST['tcid'];

  $update = "UPDATE `text_color_settings` SET `font_fmaily`='$font_fmaily', `color_code`='$color_code' WHERE tcid='$tcid'  ";
  $query = mysqli_query($conn, $update);
  if ($query==TRUE AND $update == TRUE) {
  }else{
    echo "Sorry";
  }
}




if (isset($_POST['logoupdate'])) {

  $logo_size=$_POST["logo_size"];
 
  //image
  if ($_FILES["logo"]["name"]!='') {
    $logo=$_FILES["logo"]["name"];
    $target_dir  = "../assets/brand/";
    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
  }else{
    $logo=$_POST["logo2"];
  }


// Update query
     $sql=" UPDATE settings SET logo='$logo', logo_size='$logo_size' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}

if (isset($_POST['faviconupdate'])) {

  $favicon=$_FILES["favicon"]["name"];

  //image
  $target_dir  = "../assets/brand/";
  $target_file = $target_dir . basename($_FILES["favicon"]["name"]);
  move_uploaded_file($_FILES["favicon"]["tmp_name"], $target_file);
// Update query
     $sql=" UPDATE settings SET favicon='$favicon' ";
     if(mysqli_query($conn, $sql)){
       $msg = "favicon Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}



// Main Side Menu
if (isset($_POST['sidebarupdated'])) {

  $font_size        =$_POST["font_size"];
  $line_height      =$_POST["line_height"];
  $font_color       =$_POST["font_color"];
  $font_family      = htmlspecialchars($_POST["font_family"]);
  $background_color =$_POST["background_color"];
  $hover_color      =$_POST["hover_color"];
  $active_color     =$_POST["active_color"];
  $text_transform   =$_POST["text_transform"];


     $sql=" UPDATE header_menu SET     
      font_size='$font_size',
      line_height='$line_height',
      font_color='$font_color',
      font_family='$font_family',
      background_color='$background_color',
      hover_color='$hover_color',
      active_color='$active_color',    
      text_transform='$text_transform'    
      
      
       ";
     if(mysqli_query($conn, $sql)){
       $msg = "favicon Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
}


// Sub-Menu
if (isset($_POST['sub_menu_update'])) {

  $font_size        =$_POST["font_size"];
  $line_height       =$_POST["line_height"];
  $font_color       =$_POST["font_color"];
  $background_color =$_POST["background_color"];
  $font_family      = htmlspecialchars($_POST["font_family"]);
  $hover_color      =$_POST["hover_color"];
  $active_color     =$_POST["active_color"];
  $text_transform     =$_POST["text_transform"];


     $sql=" UPDATE sub_menu SET     
      font_size='$font_size',
      line_height='$line_height',
      font_color='$font_color',
      font_family='$font_family',
      hover_color='$hover_color',
      active_color='$active_color',    
      background_color='$background_color',    
      text_transform='$text_transform'";
       
     if(mysqli_query($conn, $sql)){
       $msg = "favicon Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}


if (isset($_POST['page_bg_color'])) {
    
    $Center_bg=$_POST["Center_bg"];
    $sql=" UPDATE settings SET Center_bg='$Center_bg'";        
    mysqli_query($conn, $sql);   
    
}








//Set_Default_img_color
if (isset($_POST['Set_Default_img_color'])) {

  $default_theam_color    =$_POST["default_theam_color"];
  $Overlay_color          =$_POST["Overlay_color"];
  $Overlay_color_opasity  =$_POST["Overlay_color_opasity"];
  $Overlay_color2         = $_POST["Overlay_color2"];
  $Overlay_color2_opasity =$_POST["Overlay_color2_opasity"];
  $shadow_color           =$_POST["shadow_color"];
  $shadow_color_number    =$_POST["shadow_color_number"];

  if ($_FILES["default_img"]["name"]!='') {  

        $default_img=$_FILES["default_img"]["name"];
        $target_dir  = "../assets/mediacenter/";
        $target_file = $target_dir . basename($_FILES["default_img"]["name"]);
        move_uploaded_file($_FILES["default_img"]["tmp_name"], $target_file);

  }else{$default_img=$_POST["default_img2"];}

    if ($_FILES["default_img2"]["name"]!='') {  

        $default_img2=$_FILES["default_img2"]["name"];
        $target_dir  = "../assets/mediacenter/";
        $target_file = $target_dir . basename($_FILES["default_img2"]["name"]);
        move_uploaded_file($_FILES["default_img2"]["tmp_name"], $target_file);

  }else{ $default_img2=$_POST["default_img3"];}

     $sql=" UPDATE settings SET 
     
    default_img='$default_img',
    default_img2='$default_img2',
    Overlay_color='$Overlay_color',
    Overlay_color2='$Overlay_color2',
    default_theam_color='$default_theam_color',
    Overlay_color_opasity='$Overlay_color_opasity', 
    Overlay_color2_opasity='$Overlay_color2_opasity', 
    shadow_color='$shadow_color', 
    shadow_color_number='$shadow_color_number'";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}




//hover Home
if (isset($_POST['hove_homebtn'])) {

  $home_hover=$_POST["home_hover"];
 
    // Update query
     $sql=" UPDATE settings SET home_hover='$home_hover' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}




//contactlawer
if (isset($_POST['countactupdate'])) {

  $heading=$_POST["heading"];
  $text=$_POST["text"];
  $bg_color=$_POST["bg_color"];

  if ($_FILES["imge_up"]["name"]!='') {     
      $target_dir = "../assets/mediacenter/";
      $target_file = $target_dir . basename($_FILES["imge_up"]["name"]);
      $imge =$_FILES["imge_up"]["name"];
      move_uploaded_file($_FILES["imge_up"]["tmp_name"], $target_file);

  }else{
    $imge =$_POST["imge_up2"];
  }
 
    // Update query
     $sql=" UPDATE contactlawer SET heading='$heading', text='$text',  bg_color='$bg_color', imge='$imge'     
      ";


     if(mysqli_query($conn, $sql)){
       
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
}




//client_bg
if (isset($_POST['client_bg'])) {

  $client_bg_defult=$_POST["client_bg_defult"];
 
    // Update query
     $sql=" UPDATE settings SET client_bg_defult='$client_bg_defult' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}




//Team Setting 

if (isset($_POST['team_design_update'])) {

$name_font_size=$_POST['name_font_size'];
$designation_font_size=$_POST['designation_font_size'];

$name_font_color=$_POST['name_font_color'];
$designation_font_color=$_POST['designation_font_color'];

$name_font_family=htmlspecialchars($_POST["name_font_family"]);
$designation_font_family=htmlspecialchars($_POST['designation_font_family']);

$icon_color=$_POST['icon_color'];
$icon_bg_color=$_POST['icon_bg_color'];

$background_color=$_POST['background_color'];
$hover_color=$_POST['hover_color'];


   $sql=" UPDATE our_team_design SET 
   
    `name_font_size` = '$name_font_size',
    `designation_font_size` = '$designation_font_size',
    `name_font_color` = '$name_font_color',
    `designation_font_color` = '$designation_font_color',
    `name_font_family` = '$name_font_family',
    `designation_font_family` = '$designation_font_family',
    `icon_color` = '$icon_color',
    `icon_bg_color` = '$icon_bg_color',
    `background_color` = '$background_color',
    `hover_color` = '$hover_color'
   ";

    if(mysqli_query($conn, $sql)){
       $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}



// Section manu setting
if (isset($_POST['section_updated'])) {

  $font_size        =$_POST["font_size"];
  $font_color       =$_POST["font_color"];
  $font_family      = htmlspecialchars($_POST["font_family"]);
  // $background_color =$_POST["background_color"];
  $text_bg_color      =$_POST["text_bg_color"];
 


     $sql=" UPDATE section_design SET     
      font_size='$font_size',
      font_color='$font_color',
      font_family='$font_family',
      text_bg_color='$text_bg_color'
      
      
       ";
     if(mysqli_query($conn, $sql)){
       $msg = "favicon Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}




//page Header text
if (isset($_POST['pageheader_update'])) {

$page_header_font_size=$_POST["page_header_font_size"];
$page_header_font_color=$_POST["page_header_font_color"];
$page_header_font_famaily=htmlspecialchars($_POST["page_header_font_famaily"]);
$page_header_font_lettercash=$_POST["page_header_font_lettercash"];
$page_header_icon_color=$_POST["page_header_icon_color"];

    // Update query
     $sql=" UPDATE settings SET 
     
      page_header_font_size='$page_header_font_size', 
      page_header_font_color='$page_header_font_color',
      page_header_font_famaily='$page_header_font_famaily', 
      page_header_font_lettercash='$page_header_font_lettercash', 
      page_header_icon_color='$page_header_icon_color' 
       
     ";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }

}



//Your_Lawyer_update
if (isset($_POST['Your_Lawyer_update'])) {

    $Your_Lawyer_mobile=$_POST["Your_Lawyer_mobile"];
    $Your_Lawyer_pc=$_POST["Your_Lawyer_pc"];
    
    
    $Your_Lawyer_text=$_POST["Your_Lawyer_text"];
    $Your_Lawyer_font_size=$_POST["Your_Lawyer_font_size"];
    $Your_Lawyer_font_famaily=htmlspecialchars($_POST["Your_Lawyer_font_famaily"]);
    $Your_Lawyer_font_lettercash=$_POST["Your_Lawyer_font_lettercash"];
    $Your_Lawyer_font_color=$_POST["Your_Lawyer_font_color"];
    $Your_Lawyer_bg_color=$_POST["Your_Lawyer_bg_color"];

    // Update query
     $sql=" UPDATE settings SET 
     
      Your_Lawyer_mobile='$Your_Lawyer_mobile',
      Your_Lawyer_pc='$Your_Lawyer_pc',
     
      Your_Lawyer_text='$Your_Lawyer_text', 
      Your_Lawyer_font_size='$Your_Lawyer_font_size',
      Your_Lawyer_font_famaily='$Your_Lawyer_font_famaily', 
      Your_Lawyer_font_lettercash='$Your_Lawyer_font_lettercash', 
      Your_Lawyer_font_color='$Your_Lawyer_font_color',
      Your_Lawyer_bg_color='$Your_Lawyer_bg_color'
       
     ";
     if(mysqli_query($conn, $sql)){
       $msg = "Logo Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }

}







//topbar
if (isset($_POST['topbar'])) {

  $text1=$_POST['text1'];
  $link1=$_POST['link1'];

  $text2=$_POST['text2'];
  $link2=$_POST['link2'];

  $text3=$_POST['text3'];
  $link3=$_POST['link3'];


   $sql=" UPDATE topbar SET text1='$text1',text2='$text2',text3='$text3', link1='$link1', link2='$link2', link3='$link3'";
     if(mysqli_query($conn, $sql)){
       $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}




//footer
if (isset($_POST['footerupdate'])) {
  $footer=htmlspecialchars($_POST['footer']);
   $sql=" UPDATE settings SET footer='$footer' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}

//print page Header
if (isset($_POST['printheaderupdate'])) {

  $logo=$_FILES["Print_page_header"]["name"];
  //image
  $target_dir  = "../assets/brand/";
  $target_file = $target_dir . basename($_FILES["Print_page_header"]["name"]);
  move_uploaded_file($_FILES["Print_page_header"]["tmp_name"], $target_file);
// Update query
     $sql=" UPDATE settings SET Print_page_header='$logo' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Print_page_header Update Successfully !";
       $bg = "alert alert-success";
     }else{
       echo "error";
     }
}





//copyright
if (isset($_POST['copyrightupdate'])) {
  $copyright=$_POST['copyright'];
   $sql=" UPDATE settings SET copyrightupdate='$copyright' ";
     if(mysqli_query($conn, $sql)){
      $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{echo "error";}
}


//Whatssapp
if (isset($_POST['whatno'])) {
  $whatsapp=$_POST['whatsapp'];
   $sql=" UPDATE settings SET whatsapp='$whatsapp' ";
     if(mysqli_query($conn, $sql)){
      $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{echo "error";}
}




//sidecolor
if (isset($_POST['sidebarcolor'])) {
  $scolor=$_POST['scolor'];
   $sql=" UPDATE settings SET sidebarcolor='$scolor' ";
     if(mysqli_query($conn, $sql)){
       $msg = "Update Successfully !";
       $bg = "alert alert-success";
     }else{echo "error";}
}


//Socal 
if (isset($_POST['socalnewadd'])) {

  $icon=$_POST['icon'];
  $name=$_POST['name']; 
  $social_url=$_POST['social_url'];
  $qr_image=$_FILES["qr_image"]["name"];
      
  //image
  $target_dir  = "../assets/mediacenter/";
  $target_file = $target_dir . basename($_FILES["qr_image"]["name"]);
  move_uploaded_file($_FILES["qr_image"]["tmp_name"], $target_file);

  $insrt = "INSERT INTO `social`(`name`, `social_url`, `icon`, `qr_image`) VALUES ('$name','$social_url','$icon', '$qr_image')";
  $conn->query($insrt);
}

if (isset($_POST['supdate'])) {

    $icon=$_POST['icon'];
    $name=$_POST['name'];
    $social_url=$_POST['social_url'];
    $id=$_POST['sid'];

    if ($_FILES["qr_image"]["name"]!='') {
      $qr_image=$_FILES["qr_image"]["name"];
      $target_dir  = "../assets/mediacenter/";
      $target_file = $target_dir . basename($_FILES["qr_image"]["name"]);
      move_uploaded_file($_FILES["qr_image"]["tmp_name"], $target_file);
    }else{
      $qr_image=$_FILES["qr_image2"]["name"];
    }
    $insrt = "UPDATE `social` SET `name`='$name', `social_url`='$social_url', `icon`='$icon', `qr_image`='$qr_image' WHERE id='$id'";
    $conn->query($insrt);
}

if (isset($_GET['social_delete'])) {
      $delete = "DELETE FROM social WHERE id={$_GET['social_delete']}";
      $conn->query($delete);
}



//customurl 
if (isset($_POST['customurl'])) {

    $Request_Url=$_POST['Request_Url'];
    $Forward_Url=$_POST['Forward_Url'];
    $insrt = "INSERT INTO `custom_url`(`Request_Url`, `Forward_Url`) VALUES ('$Request_Url','$Forward_Url')";
    $conn->query($insrt);
}

if (isset($_POST['urlupdate'])) {

    $Request_Url=$_POST['Request_Url'];
    $Forward_Url=$_POST['Forward_Url'];
    $urlid=$_POST['urlid'];

    $insrt = "UPDATE `custom_url` SET `Request_Url`='$Request_Url', `Forward_Url`='$Forward_Url' WHERE urlid='$urlid'";
    $conn->query($insrt);
}

if (isset($_GET['url_delete'])) {
      $delete = "DELETE FROM custom_url WHERE urlid={$_GET['url_delete']}";
      $conn->query($delete);
      echo "Hellosdklfjaslkd fklasdjfl kjasdlkfj aslkdjf l";
      Reconect('general.php');
}







?>