<?php
    include "db.php";

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


//Delete Data
function DeleteData($table_name, $more){
	global $conn;
    $sql = "DELETE FROM {$table_name} WHERE {$more} ";
	$delete = mysqli_query($conn,$sql);
	return $delete;
}



function rowcount($TableName,$moresql){        
    global $conn;
	$sql = "SELECT * FROM $TableName $moresql";
	$select = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($select);
	return $row_count;
}




//Home Page
function postcate($col_name, $id){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE cat_id='$id'"));
    return $row[$col_name];
}


//page name
function pagename($cat_col, $id){

    $sql = SelectData('pages',"WHERE page_id='$id'");
    $row = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql)>0) {
    	return $row[$cat_col];
    }else{
    	
    	$none = "None";
    	return $none;
    }



}



//UserData
function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('admin',"WHERE email='{$_SESSION['user']}'"));
    echo $row[$U_data];
}

//UserData
function footerdata($U_data){
    $row = mysqli_fetch_array(SelectData('genar_setting',"WHERE id='1'"));
    echo $row[$U_data];
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




//catagory
function catagory($cat_col, $id){
    $row = mysqli_fetch_array(SelectData('category',"WHERE cat_id='$id'"));
    return $row[$cat_col];
}


//child catagory
function sub_catagory($subcat_col, $pid){

	$sql = SelectData('sub_category',"WHERE sub_id='$pid'");
    $row = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql)>0) {
    	return $row[$subcat_col];
    }else{
    	
    	$none = "None";
    	return $none;
    }
     
}


//settings
function settings($U_data){
    $row = mysqli_fetch_array(SelectData('settings',""));
    return $row[$U_data];
}


//settings
function btn_settings($U_data){
    $row = mysqli_fetch_array(SelectData('button_setting',""));
    return $row[$U_data];
}


//widget_set
function widget_set($U_data,$wsid){
    $row = mysqli_fetch_array(SelectData('widget_setting',"WHERE wsid='$wsid' "));
    return $row[$U_data];
}


//header_menu
function header_menu($U_data){
    $row = mysqli_fetch_array(SelectData('header_menu',""));
    return $row[$U_data];
}

//Sub_menu
function sub_menu($data){
    $row = mysqli_fetch_array(SelectData('sub_menu',""));
    return $row[$data];
}

//color code to color name
function color_code_to_name($color_id, $color_name){
    $row = mysqli_fetch_array(SelectData('color_settings',"WHERE color_code='$color_id' "));
    return $row[$color_name];
}


function select_color(){                                   
    $data = SelectData('color_settings','');
    while ($textcolor = $data->fetch_object()) {
    echo "<option value='$textcolor->color_code'>$textcolor->color_name</option>";                                 
    }
}


function color_name($code){                                   
    $data = SelectData('color_settings',"where color_code='$code' ");
    $colorname = $data->fetch_object();
    return $colorname->color_name;
}


include "fontselect.php";

//Team_Design
function Team_Design($data){
    $row = mysqli_fetch_array(SelectData('our_team_design',""));
    return $row[$data];
}

//Section_Design
function Section_Design($data){
    $row = mysqli_fetch_array(SelectData('section_design',""));
    return $row[$data];
}

function file_management($data){
    $row = mysqli_fetch_array(SelectData('file_management',"where file_url='$data'"));
     echo Reconect($row['file_name']);   
}




function compressImage($source, $destination, $quality) { 

    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    imagejpeg($image, $destination, $quality);    
    return $destination; 
} 














?>