<?php

if (isset($_POST['add_client'])) {

	$client_countri = $_POST['client_countri'];
	$client_ditils = htmlspecialchars($_POST['client_ditils']);
	$bgcolor = $_POST['bgcolor'];

	$c_data = SelectData('our_clients', "WHERE client_countri='$client_countri' ");
	if ($c_data->num_rows==0) {

		if (!empty($client_countri) && !empty($client_ditils)) {
		
			$insert="INSERT INTO `our_clients`( `client_countri`, `client_ditils`,bgcolor) VALUES( '$client_countri', '$client_ditils','$bgcolor')";
			if ($conn->query($insert)==TRUE) {
				$bg="bg-success";
				$error = "Success";
				Reconect('ourclients.php');
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
if (isset($_POST['update_client'])) {

	$cid = $_POST['cid'];
	$bgcolor = $_POST['bgcolor'];
	$client_countri = $_POST['client_countri'];
	$client_ditils = htmlspecialchars($_POST['client_ditils']);
		
	
	$insert="UPDATE our_clients SET  `bgcolor`='$bgcolor', `client_countri`='$client_countri', `client_ditils`='$client_ditils' WHERE cid='$cid' ";
	if ($conn->query($insert)==TRUE) {
		$bg="bg-warning";
		$error = "Update Success";
		Reconect('ourclients.php');
	}else{
		$bg="bg-danger";
		$error = "Sorry!";
		}
	}


//delete_id
if (isset($_GET['delete_id'])) {
	$delete = "DELETE FROM our_clients WHERE cid={$_GET['delete_id']}";
	if ($conn->query($delete)) {
		$bg = "bg-danger";
		$error = "deleted";
		Reconect('ourclients.php');
	}

}	



?>


