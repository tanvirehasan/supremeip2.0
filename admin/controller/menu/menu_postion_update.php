<?php

include "../../inc/db.php";

$array = $_POST['arrayorder']; 
if ($_POST['update'] == "update"){
  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE pages SET main_menu = " . $count . " WHERE page_id = " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}


//our Team
if ($_POST['update'] == "team"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE our_team SET serial_list = " . $count . " WHERE team_id= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}




//Widget

//Price
if ($_POST['update'] == "sortprice"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE prices SET serial_list = " . $count . " WHERE priceid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}


//FAQ
if ($_POST['update'] == "sortfaq"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE faq SET serial_list = " . $count . " WHERE FAQid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}




//flowchart
if ($_POST['update'] == "flowchart"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE flowchart SET serial_list = " . $count . " WHERE Flowchartid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}


//page_file
if ($_POST['update'] == "page_file"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE page_file SET serial_list = " . $count . " WHERE fileid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}


//our_clients
if ($_POST['update'] == "our_clients"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE our_clients SET serial_list = " . $count . " WHERE cid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}

//page_team
if ($_POST['update'] == "page_team"){  
    $count = 1;
    foreach ($array as $idval) {
        $sql = "UPDATE page_team SET serial_list_pt = " . $count . " WHERE tid= " . $idval;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
}

?>