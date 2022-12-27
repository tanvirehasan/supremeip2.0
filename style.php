<?php 
    header("Content-type: text/css; charset: UTF-8");
?>



.logoimg img{width:85%;}



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


.header_menu{
  height: 0px;
  margin:0;
}


.header_menu a{
  font-size: 14px !important;
  color:#7a7a7a;
  text-transform:uppercase;
  line-height:1.4; 
  letter-spacing: 10px;
  cursor: pointer;
  margin-bottom:2px;
  border-bottom:1px solid rgba(255, 255, 255, 0.1); 
  font-family:Jost;
}


.mobile_menu a{
  font-size: 14px !important;
  color:#7a7a7a !important;
  text-transform:uppercase;
  line-height:1.4; 
  cursor: pointer;
  margin-bottom:2px;
  border-bottom:1px solid rgba(255, 255, 255, 0.1); 
  font-family:Jost;
}


.header_menu a i{
  transform: rotate(45deg);
  padding: 0 5px;
  display: none;
}

.header_menu a:hover{
  color: #027ab6 !important;
  text-decoration: none;  
  font-weight: bold !important;
  transition: 0.3s;
  font-size: 15px !important;
}

.active{
  color:#222222 !important;
  font-size: 15px !important;
  font-weight: bold !important;
}


.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  overflow: visible;
  z-index: 100; /* Behind the navbar */
  box-shadow: 0px 0px px ;
}





.side-menu a{ 
  font-size: 13px;
  color:#7a7a7a !important;
  text-transform:uppercase;
  line-height:1; 
  cursor: pointer;
  margin-bottom:2px;
  font-family:Poppins;
  border-bottom:1px solid rgba(202, 202, 202, 0.3); 

}

.side-menu li:hover a{  
  color:#027ab6 !important;
  text-decoration: none;
  font-size: 14px !important;
  transition: 0.3s;
  font-weight: bold !important;
}


.side-menu .active_menu{
  color:#222222 !important;
  font-weight: bold !important;
  font-size: 14px !important;
}

.sharebtn a i{
  color:#7a7a7a !important;
}








.header_img{
  box-shadow: 0px 0px  px ;
}


.header_img h1{
  font-size:30px !important;
  color:#222222!important;
  font-family:Lucida Sans Unicode!important;
  text-transform:capitalize!important;  
}

.header_img i{
  color:#222222!important;
}


#ylhbtn{

  font-size:14px !important;
  color:#222222!important;
  background:#ffffff!important;
  font-family:Roboto!important;
  text-transform:capitalize!important; 

}






.team_icon{
  padding: 5px 6px;
  position: absolute;
  z-index: 1;
  width:35px;
  background:#ece7e3;
  overflow: hidden;
  border-bottom-right-radius:10px ;
}

.team_icon i{
  padding: 5px 3px;
  color: #222222!important;
  font-size: 12px;
}

.team_icon i:hover{
  font-size: 14px;
}


.team_info{
  background: #ece7e3;
  padding: 15px;
}

.team_info b{
  color: #222222!important;
  font-family:Lucida Sans Unicode;
  font-size: 16px;
}

.team_info p{
  font-size: 14px;
  color: #7a7a7a !important;
  font-family:Lucida Sans Unicode;
}

.team-card:hover{
  box-shadow:0px 0px 7px #7a7a7a;
  transition: 0.5s;
  cursor: pointer;
}


#ylh:hover{
 cursor: default !important;
}



.section_title_page{
  font-family: Jost!important;
  background:#027ab6!important;
  color:#ffffff!important;
  font-size: 20px;
  padding: 10px 10px;
}
.section_title_page i{color:#ffffff!important;}



.post_card:hover{
  background:#ece7e3!important;
  transition: 5s;
  color:black !important;
  
}





h1, .h1{ color:#222222 !important;  font-family:Yanone Kaffeesatz!important;}
h2, .h2{ color:#027ab6 !important;  font-family:Yanone Kaffeesatz!important;}
h3, .h3{ color:#222222 !important;  font-family:Yanone Kaffeesatz!important;}
h4, .h4{ color:#222222 !important;  font-family:Yanone Kaffeesatz!important;}
h5, .h5{ color:#027ab6 !important;  font-family:Hind Siliguri!important;}
h6, .h6{ color:#222222 !important;  font-family:Ubuntu!important;}

p{ color:#222222 !important;}

blockquote{ color:#222222 !important;}
.Recent_post:hover h5{
  color:#f44336!important;
}

a:hover, i:hover{
  color:#f44336!important;
}


<!--wiget-->

#priceTable {
  border-collapse: collapse !important;
  width: 100% !important;
  border:none !important;
}

#priceTable th, td {
  text-align: left !important;
  padding: 0px !important;
  border:none !important;
}

#priceTable tr:nth-child(even) {background-color: #CBF1F5 !important;}
#priceTable tr:nth-child(odd) {background-color: #E3FDFD !important;}



#btn_style{

    padding: 5px !important;
    font-size:12px !important;
    color: #ffffff !important;
    background-color: #222222 !important;
    text-transform: none !important;
    text-decoration: none;
    font-family:Raleway !important;
    margin:0px;

}



