<?php

	if (isset($_POST['add_price'])) {
		
		$price_title 		= $_POST['price_title'];
		$Priceamount 		= $_POST['Priceamount'];
		$price_subtile 		= $_POST['price_subtile'];
		$service_id 		= $_POST['service_id'];
		$price_icon 		= $_POST['price_icon'];
		$gmail_link 		= $_POST['gmail_link'];
		$Price_Description 	= $_POST['Price_Description'];

		$insert = "INSERT INTO prices (`price_title`, `price_subtile`, `service_id`, `price_icon`, `gmail_link`, `Price_Description`, `Priceamount`, `datetimet`) VALUES ('$price_title', '$price_subtile', '$service_id', '$price_icon', '$gmail_link', '$Price_Description', '$Priceamount', NOW()) ";
		$sql = mysqli_query($conn, $insert);

	}


?>