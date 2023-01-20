<?php
   session_start();
//SELECT
function SelectData($TableName, $moresql){
	global $conn;
	$sql = "SELECT * FROM $TableName $moresql";
	$select = mysqli_query($conn, $sql);
	return $select;
}
//update data
function UpdateData($table_name, $more){
	global $conn;
	$sql = "UPDATE {$table_name} SET {$more} ";
	$update = mysqli_query($conn,$sql);
	return $update;
}



//Home Page
function HomePage($col_name, $id){
    $row = mysqli_fetch_array(SelectData('home_page',"WHERE id='$id'"));
    return $row[$col_name];
}

//Home Page
function AboutPage($col_name, $id)
{
    $row = mysqli_fetch_array(SelectData('about_page', "WHERE id='$id'"));
    return $row[$col_name];
}





//catagory
function postcate($col_name, $id){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE cat_id='$id'"));
    return $row[$col_name];
}

//category ID
function cateid($cat_name){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE category_name='$cat_name'"));
    return $row['cat_id'];
}

//category perent ID
function perent_id($cat_name){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE category_name='$cat_name'"));
    return $row['perent_id'];
}



//UserData
function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('admin',"WHERE email='{$_SESSION['user']}'"));
    echo $row[$U_data];
}

//settings
function settings($U_data){
    $row = mysqli_fetch_array(SelectData('settings',""));
    return html_entity_decode($row[$U_data]);
}

//header_menu
function header_menu($data){
    $row = mysqli_fetch_array(SelectData('header_menu',""));
    return $row[$data];
}

//Sub_menu
function sub_menu($data){
    $row = mysqli_fetch_array(SelectData('sub_menu',""));
    return $row[$data];
}

//text_color_settings
function text_color_settings($U_data, $h_name){
    $row = mysqli_fetch_array(SelectData('text_color_settings',"WHERE text_name='$h_name' "));
    return $row[$U_data];
}

//color code to color name
function color_code_to_name($color_id, $color_name){
    $row = mysqli_fetch_array(SelectData('color_settings',"WHERE color_id='$color_id' "));
    return $row[$color_name];
}





//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


//Login Required
function If_Not_Login($url){
	if (!isset($_SESSION['user'])) {
		Reconect($url);
	}
}



//If_Login
function If_Login($url){
	if (isset($_SESSION['user'])) {
		Reconect($url);
	}
} 




//pagination
function pagelimit($getpagenumber, $limit){                
    global $get_page;
    if (isset($getpagenumber)) { $get_page = $getpagenumber; }
    if ($get_page=="" || $get_page=="1" ) { $traget_page = "0";
    }else{ $traget_page = ($get_page*$limit)-$limit;}
    return($traget_page);
}

function pagnation($tablename, $perpage){

    global $conn;
    $sql1="SELECT * FROM {$tablename}";
    $query2 = mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($query2);
    $pageNumber=ceil($count/$perpage);
    return($pageNumber);
}


//Sub_menu
function Team_Design($data){
    $row = mysqli_fetch_array(SelectData('our_team_design',""));
    return $row[$data];
}

//Section_Design
function Section_Design($data){
    $row = mysqli_fetch_array(SelectData('section_design',""));
    return $row[$data];
}


//widget_set
function widget_set($U_data,$wsid){
    $row = mysqli_fetch_array(SelectData('widget_setting',"WHERE wsid='$wsid' "));
    return $row[$U_data];
}










?>