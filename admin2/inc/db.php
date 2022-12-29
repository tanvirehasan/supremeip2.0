<?php
    // $servername = "localhost";
    // $username = "suprenc4_website";
    // $password = "TaNVIR@@114";
    // $db = "suprenc4_supreme_ip";
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "supreme_ip";




    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  
?>