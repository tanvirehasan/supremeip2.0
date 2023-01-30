<?php

	if (isset($_POST['team_add'])) {
		$Name 		 = $_POST['Name'];
		$Designation = $_POST['Designation'];
		$About 		 = htmlspecialchars($_POST['About']);
		$Phone_No 	 = $_POST['Phone_No'];
		$Email		 = $_POST['Email'];
		$facebook	 = $_POST['facebook'];
		$linkedin	 = $_POST['linkedin'];
		$whatsapp	 = $_POST['whatsapp'];

	    $target_dir = "../assets/mediacenter/team/";
	    $Profile_pic    = $_FILES["Profile_pic"]["name"];            
	    $target_file = $target_dir . basename($_FILES["Profile_pic"]["name"]);
	    move_uploaded_file($_FILES["Profile_pic"]["tmp_name"], $target_file);

	    $insert = "INSERT INTO our_team ( Name, Designation, About, Phone_No, Email,facebook,linkedin,whatsapp, Profile_pic ) VALUES ( '$Name', '$Designation', '$About', '$Phone_No', '$Email','$facebook','$linkedin','$whatsapp', '$Profile_pic' )";
        if ($conn->query($insert)) {
			Reconect('team.php');
        }else{$mess="Sorry";}

	}

	

	//edit------------------------------------
	if (isset($_POST['team_edit'])) {
		$team_id 	 = $_POST['team_id'];
		$Name 		 = $_POST['Name'];
		$Designation = $_POST['Designation'];
		$About 		 = htmlspecialchars($_POST['About']);
		$Phone_No 	 = $_POST['Phone_No'];
		$Email		 = $_POST['Email'];
		$facebook	 = $_POST['facebook'];
		$linkedin	 = $_POST['linkedin'];
		$whatsapp	 = $_POST['whatsapp'];

		if ($_FILES["Profile_pic"]["name"]!='') {
			$target_dir = "../assets/mediacenter/team/";
		    $Profile_pic    = $_FILES["Profile_pic"]["name"];            
		    $target_file = $target_dir . basename($_FILES["Profile_pic"]["name"]);
		    move_uploaded_file($_FILES["Profile_pic"]["tmp_name"], $target_file);

		}else{ $Profile_pic = $_POST['Profile_pic2'];}	

	    $update = "UPDATE our_team SET  Name='$Name', Designation='$Designation', About='$About', Phone_No='$Phone_No', Email='$Email',facebook='$facebook',linkedin='$linkedin',whatsapp='$whatsapp', Profile_pic='$Profile_pic' WHERE
	    team_id='$team_id' ";

        if ($conn->query($update)) {
			Reconect('team.php');
        }else{$mess="Sorry";}

	}


    if (isset($_GET['delete_id'])) {
        $delete = "DELETE FROM our_team WHERE team_id={$_GET['delete_id']}";
       if($conn->query($delete)==TRUE){
		Reconect('team.php');
		}

    }	




    if (isset($_GET['steam_id'])) {
        $udate = "UPDATE our_team SET status={$_GET['stutas']}  WHERE team_id={$_GET['steam_id']}";
        $conn->query($udate);
		Reconect('team.php');
    }












?>