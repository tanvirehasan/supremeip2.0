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
				Reconect('ourclients.php?clients');
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
		Reconect('ourclients.php?clients');
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
		Reconect('ourclients.php?clients');
	}

}






//Logo Uplaod

if (isset($_POST['clogoadd'])) {

	$client_name = $_POST['client_name'];
	$file  = $_FILES['client_logo'];

	// File properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	// Work out the file extension
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));

	// Specify allowed file extensions
	$allowed = array('txt', 'jpg', 'jpeg', 'png');

	// Check if the uploaded file's extension is allowed
	if (in_array($file_ext, $allowed)) {
		// Check if there are no errors
		if ($file_error === 0) {
			// Check if the file size is below the maximum allowed
			if ($file_size <= 1000000) {
				// Create a new file name to avoid overwriting existing files
				$file_name_new = uniqid('', true) . '.' . $file_ext;

				// Set the destination for the uploaded file
				$file_destination = '../assets/mediacenter/client/' . $file_name_new;

				// Move the uploaded file to its final destination
				if (move_uploaded_file($file_tmp, $file_destination)) {
					echo "File uploaded successfully";

					$insert = "INSERT INTO client_logos (`client_name`,`client_logo`) VALUES('$client_name','$file_name_new')";
					if (mysqli_query($conn, $insert)==TRUE) {
						Reconect('ourclients.php?logo');
					}

				} else {
					echo "File could not be uploaded";
				}
			} else {
				echo "File size is too large";
			}
		} else {
			echo "There was an error uploading your file";
		}
	} else {
		echo "File type not allowed";
	}
}


// Update 
if (isset($_POST['clogoaddupdate'])) {
	
	if ($_FILES["file"]["name"] != '') {
		$target_dir = "../assets/mediacenter/client/";
		$file= $_FILES["file"]["name"];
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
	} else {
		$file    = $_POST['file2'];
			
	}

	$insert = "UPDATE client_logos SET `client_logo`='$file' WHERE id={$_POST['id']} ";
	if ($conn->query($insert) == TRUE) {
		Reconect('ourclients.php?logo');
	} else {

	}



}


//Delete 
if (isset($_GET['ldid'])) {
	$delete = "DELETE FROM client_logos WHERE id={$_GET['ldid']}";
	if ($conn->query($delete)) {
		Reconect('ourclients.php?logo');
	}
}



if (isset($_POST['clientcolor_Update'])) {

	$client_bg = $_POST["client_bg"];
	$client_logo_bg = $_POST["client_logo_bg"];
	$client_border_color = $_POST["client_border_color"];
	$client_border_size = $_POST["client_border_size"];
	$client_logo_limit = $_POST["client_logo_limit"];

	$sql = " UPDATE settings SET 
    
    client_bg='$client_bg',
    client_logo_bg='$client_logo_bg',
    client_border_color='$client_border_color',
    client_border_size='$client_border_size',
    client_logo_limit='$client_logo_limit'
    ";

	if ($conn->query($sql)) {
		Reconect('ourclients.php?logo');
	}
}















?>


