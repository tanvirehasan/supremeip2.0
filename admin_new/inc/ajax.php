<?php include "db.php";

//Select Hall
if (isset($_REQUEST["get_option"])) {

	$q = $_REQUEST["get_option"];
	$dataselect = $conn->query("SELECT * FROM sub_category WHERE category='$q' ");

	if ($dataselect->num_rows>0) {
		echo "<option>Sub Category</option>";
		while ($data = $dataselect->fetch_assoc()) {
			$sub_name=$data['sub_name'];
			$id=$data['sub_id'];			
				echo "<option value=".$id.">".$sub_name."</option>";
			 } }else{
			echo "<option value='0' >None</option>";
		}
}

?>