<?php

if (isset($_POST['add_service'])) {

	$service_name = $_POST['service_name'];
    $service_icon = $_POST['service_icon'];
	$service_text_link =htmlspecialchars($_POST['service_text_link']);
	$service_bgcolor = $_POST['service_bgcolor'];

	$c_data = SelectData('our_services', "WHERE service_name='$service_name' ");
	if ($c_data->num_rows==0) {

		if (!empty($service_name) && !empty($service_text_link)) {
		
			$insert="INSERT INTO `our_services`( `service_name`,`service_icon`, `service_text_link`,service_bgcolor) VALUES( '$service_name',  '$service_icon', '$service_text_link','$service_bgcolor')";
			if ($conn->query($insert)==TRUE) {
				$bg="bg-success";
				$error = "Success";
				Reconect('services.php');
			}else{
				$bg="bg-danger";
				$error = "Sorry!";
				}
			}else{
				$bg="bg-warning";
				$error = "Please fill all required fields";
			}

		}else{
				$bg="bg-danger";
				$error = "You have a Data";
			}
}


//Update -------------
if (isset($_POST['update_service'])) {

	$service_id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
	$service_icon = $_POST['service_icon'];
	$service_text_link = htmlspecialchars($_POST['service_text_link']);
	$service_bgcolor = $_POST['service_bgcolor'];
	
		
	
	$insert="UPDATE our_services SET  `service_name`='$service_name', `service_icon`='$service_icon', `service_text_link`='$service_text_link', `service_bgcolor`='$service_bgcolor' WHERE service_id='$service_id' ";
	if ($conn->query($insert)==TRUE) {
		$bg="bg-warning";
		$error = "Update Success";
		Reconect('services.php');
	}else{
		$bg="bg-danger";
		$error = "Sorry!";
		}
	}


//delete_id
if (isset($_GET['delete_id'])) {
	$delete = "DELETE FROM our_services WHERE service_id={$_GET['delete_id']}";
	if ($conn->query($delete)) {
		$bg = "bg-danger";
		$error = "deleted";
		Reconect('services.php');
	}

}	



?>


