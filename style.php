<?php
header("Content-type: text/css; charset: UTF-8");
include "inc/db.php";
include "inc/function.php";
?>

.logoimg img{width:<?= settings('logo_size') ?>%;}

<?php //social Bar menu 
?>



.qr_link{width:<?= settings('socialbar_imagesize'); ?>;}
.icon_box:hover{background-color:<?= settings('socialbar_hoverbgcolor'); ?>;}
.icon_box i{color:<?= settings('socialbar_iconcolor'); ?>;}
.icon_box i:hover{color:<?= settings('socialbar_iconhovercolor'); ?>!important;}


<?php //Main menu 
?>
.header_menu_scroll::-webkit-scrollbar-track{
background-color: #fff;
}

.header_menu_scroll::-webkit-scrollbar{
width: 3px;
background-color: rgb(3, 110, 48);
}

.header_menu_scroll::-webkit-scrollbar-thumb{
background-color: #047742;
border: 2px solid #047742;
border-radius: 10px;
}

.mobile_menu a{
font-size: <?= header_menu('font_size') ?>px !important;
color:<?= header_menu('font_color') ?> !important;
text-transform:<?= header_menu('text_transform') ?>;
line-height:<?= header_menu('line_height') ?>;
cursor: pointer;
border-bottom:1px solid rgba(255, 255, 255, 0.1);
font-family:<?php echo html_entity_decode(header_menu('font_family')); ?>;
}


nav .accordion-header {
background-color:none !important;
}


nav .accordion-header a{
font-size: <?= header_menu('font_size') ?>px !important;
color:<?= header_menu('font_color') ?>;
text-transform:<?= header_menu('text_transform') ?>;
line-height:<?= header_menu('line_height') ?>;
font-family:<?php echo html_entity_decode(header_menu('font_family')); ?>;
letter-spacing: 10px ;
cursor: pointer;
padding-left:20px !important;
}

.page-content a{ text-decoration:none !important }



.page-content a:hover{
color:<?= header_menu('hover_color') ?> !important;
background-color:<?= header_menu('text_bg_hover_color'); ?>!important;
padding:5px;

}

nav .accordion-header a:hover{
color: <?= header_menu('hover_color'); ?> !important;
text-decoration: none;
font-weight: bold !important;
transition: 0.3s;
font-size: <?= 1 + header_menu('font_size'); ?>px !important;
}

nav .accordion-header a:active{
color: <?= header_menu('hover_color'); ?> !important;
}

nav .accordion-button:not(.collapsed) {
color: <?= header_menu('hover_color'); ?> !important;
background-color: <?= header_menu('text_bg_hover_color'); ?> !important;
box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%) !important;
}


#homebtn{
padding:5px 0px !important;
border-bottom:<?= header_menu('divider_size'); ?>px solid <?= header_menu('divider_color'); ?> !important;
}

#homebtn:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;
}

nav .accordion-body{
background:<?= header_menu('downbackground_color'); ?>!important;
}

#sub_menu_link{
font-size: <?= header_menu('downfont_size') ?>px !important;
color:<?= header_menu('downfont_color') ?>!important;
text-transform:<?= header_menu('downtext_transform') ?>!important;
font-family:<?php echo html_entity_decode(header_menu('downfont_family')); ?>!important;
border-bottom:<?= header_menu('downdivider_size'); ?>px solid <?= header_menu('downdivider_color'); ?> !important;
}

#sub_menu_link:hover{
background:<?= header_menu('downtext_bg_hover_color'); ?> !important;
color: <?= header_menu('downhover_color'); ?> !important;
}

nav .accordion-item{
border:none !important;
}

nav .accordion-item:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;
}

nav .accordion-button:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;;
}
nav .accordion-button{
border-bottom:<?= header_menu('divider_size'); ?>px solid <?= header_menu('divider_color'); ?> !important;
padding:12px 20px !important;
}


nav .accordion-button::after {
flex-shrink: 0 !important;
width: 5px !important;
height: 5px !important;
margin-left: auto;
content: "⇣" !important;
background-repeat: no-repeat !important;
background: none !important;
transition: transform .2s ease-in-out;
opacity: 0.3;
}



.active{
color:<?= header_menu('active_color'); ?> !important;
font-size: <?= 1 + header_menu('font_size'); ?>px !important;
font-weight: bold !important;
}


.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
overflow: visible;
z-index: 100; /* Behind the navbar */
box-shadow: 0px 0px <?= settings('shadow_color_number') ?>px <?= settings('shadow_color') ?>;
}



<!-- ================ MOBILE MENU =============================-->


mobile_menu .accordion-header {
background-color:none !important;
}


.mobile_menu .accordion-header a{
font-size: <?= header_menu('font_size') ?>px !important;
color:<?= header_menu('font_color') ?>;
text-transform:<?= header_menu('text_transform') ?>;
line-height:<?= header_menu('line_height') ?>;
font-family:<?php echo html_entity_decode(header_menu('font_family')); ?>;
cursor: pointer;
padding:15px 20px;
}


.mobile_menu .accordion-header a:hover{
color: <?= header_menu('hover_color'); ?> !important;
text-decoration: none;
font-weight: bold !important;
transition: 0.3s;
font-size: <?= 1 + header_menu('font_size'); ?>px !important;
}

.mobile_menu .accordion-header a:active{
color: <?= header_menu('hover_color'); ?> !important;
}

mobile_menu .accordion-button:not(.collapsed) {
color: <?= header_menu('hover_color'); ?> !important;
background-color: <?= header_menu('text_bg_hover_color'); ?> !important;
box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%) !important;
}


mobile_menu #homebtn{
padding:5px 0px !important;
border-bottom:<?= header_menu('divider_size'); ?>px solid <?= header_menu('divider_color'); ?> !important;
}

mobile_menu #homebtn:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;
}

.mobile_menu .accordion-body{
background:<?= header_menu('downbackground_color'); ?>!important;
}

.mobile_menu #sub_menu_link{
font-size: <?= header_menu('downfont_size') ?>px !important;
color:<?= header_menu('downfont_color') ?>!important;
text-transform:<?= header_menu('downtext_transform') ?>!important;
font-family:<?php echo html_entity_decode(header_menu('downfont_family')); ?>!important;
border-bottom:<?= header_menu('downdivider_size'); ?>px solid <?= header_menu('downdivider_color'); ?> !important;
padding:10px 20px !important;
}

.mobile_menu #sub_menu_link:hover{
background:<?= header_menu('downtext_bg_hover_color'); ?> !important;
color: <?= header_menu('downhover_color'); ?> !important;
}

.mobile_menu .accordion-item{
border:none !important;
}

.mobile_menu .accordion-item:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;
}

.mobile_menu .accordion-button:hover{
background:<?= header_menu('text_bg_hover_color'); ?>!important;;
}
.mobile_menu .accordion-button{
border-bottom:<?= header_menu('divider_size'); ?>px solid <?= header_menu('divider_color'); ?> !important;
<!-- padding:12px 0px !important; -->
}


.mobile_menu .accordion-button::after {
flex-shrink: 0 !important;
width: 5px !important;
height: 5px !important;
margin-left: auto;
content: "⇣" !important;
background-repeat: no-repeat !important;
background: none !important;
transition: transform .2s ease-in-out;
opacity: 0.3;
}


.active{
color:<?= header_menu('active_color'); ?> !important;
font-size: <?= 1 + header_menu('font_size'); ?>px !important;
font-weight: bold !important;
}



<!--============ MOBILE MENU END  =======================-->








<?php //Team 
?>

.team_icon{
padding: 5px 6px;
position: absolute;
z-index: 1;
width:35px;
background:<?= Team_Design('icon_bg_color') ?>;
overflow: hidden;
border-bottom-right-radius:10px ;
}

.team_icon i{
padding: 5px 3px;
color: <?= Team_Design('icon_color') ?>!important;
font-size: 12px;
}

.team_icon i:hover{
font-size: 14px;
}


.team_info{
background: <?= Team_Design('background_color') ?>;
padding: 15px;
}

.team_info b{
color: <?= Team_Design('name_font_color') ?>!important;
font-family:<?= html_entity_decode(Team_Design('name_font_family')) ?>;
font-size: <?= Team_Design('name_font_size') ?>px;
}

.team_info p{
font-size: <?= Team_Design('designation_font_size') ?>px;
color: <?= Team_Design('designation_font_color') ?> !important;
font-family:<?= html_entity_decode(Team_Design('designation_font_family')) ?>;
}

.team-card:hover{
box-shadow:0px 0px 7px <?= Team_Design('hover_color') ?>;
transition: 0.5s;
cursor: pointer;
}


#ylh:hover{
cursor: default !important;
}



.section_title_page{
font-family: <?= html_entity_decode(Section_Design('font_family')) ?>!important;
background:<?= Section_Design('text_bg_color') ?>!important;
color:<?= Section_Design('font_color') ?>!important;
font-size: <?= Section_Design('font_size') ?>px;
padding: 10px 10px;
}
.section_title_page i{color:<?= Section_Design('font_color') ?>!important;}



.post_card:hover{
background:<?= settings('default_theam_color') ?>!important;
transition: 5s;
color:black !important;

}





h1, .h1{ color:<?= text_color_settings('color_code', 'h1') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h1')) ?>!important;}
h2, .h2{ color:<?= text_color_settings('color_code', 'h2') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h2')) ?>!important;}
h3, .h3{ color:<?= text_color_settings('color_code', 'h3') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h3')) ?>!important;}
h4, .h4{ color:<?= text_color_settings('color_code', 'h4') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h4')) ?>!important;}
h5, .h5{ color:<?= text_color_settings('color_code', 'h5') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h5')) ?>!important;}
h6, .h6{ color:<?= text_color_settings('color_code', 'h6') ?> !important; font-family:<?= html_entity_decode(text_color_settings('font_fmaily', 'h6')) ?>!important;}

p{ color:<?= text_color_settings('color_code', 'p') ?> !important;}

blockquote{ color:<?= text_color_settings('color_code', 'q') ?> !important;}
.Recent_post:hover h5{
color:<?= text_color_settings('color_code', 'hover') ?>!important;
}


<!--wiget-->

#priceTable {
border-collapse: collapse !important;
width: 100% !important;
border:none !important;
}

#priceTable th, td {
border:<?= widget_set('border', 1) ?> !important;
}

#priceTable tr:nth-child(even) {background-color: <?= widget_set('even', 1) ?> !important;}
#priceTable tr:nth-child(odd) {background-color: <?= widget_set('odd', 1) ?> !important;}



#btn_style{
padding: <?= btn_settings('padding'); ?>px !important;
font-size:<?= btn_settings('font_size') ?>px !important;
color: <?= btn_settings('text_color') ?> !important;
background-color: <?= btn_settings('btn_bg') ?> !important;
text-transform: <?= btn_settings('Letter_case') ?> !important;
text-decoration: none;
font-family:<?= btn_settings('font_fmaily') ?> !important;
margin:0px;
}