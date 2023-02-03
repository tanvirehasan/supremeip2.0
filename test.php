<?php 

include "inc/db.php";

$a=1;
while ($a <= 100) {
  mysqli_query($conn, "INSERT INTO `client_logos`(`client_logo`) VALUES ('USAID-Identity.svg.png')");
  echo "Done </br>";
  $a++;
}



?>

