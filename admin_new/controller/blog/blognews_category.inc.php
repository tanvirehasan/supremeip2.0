<?php 

    // blog category insert
   
    if (isset($_POST['category_name_add'])) {        
        $category_name  = $_POST['category_name_add'];
        $perent_id           = $_POST['perent_id'];
        $sql = "INSERT INTO `blogs_category`( `category_name`,  `perent_id`) VALUES( '$category_name',  '$perent_id')";
        if ($conn->query($sql)) {
           $error = "Success";
        }else{
            $error = "Please check and try agine";
        }

    }

    // blog category Update
    if (isset($_POST['category_name_update'])) {        
        $category_name  = $_POST['category_name_update'];
        $perent_id  = $_POST['perent_id'];
        $id         = $_POST['id'];
        $sql = "UPDATE blogs_category SET category_name='$category_name', perent_id='$perent_id' WHERE cat_id='$id'";
        if ($conn->query($sql)) {
           $error = "Success";
        }else{
            $error = "Please check and try agine";
        }
    }

    //blog category delete
    if (isset($_GET['deleteid'])) {        
        $sql = "DELETE FROM blogs_category WHERE cat_id= {$_GET['deleteid']}";
        $conn->query($sql);
    

    }


    //Subcatagory-opstion
    if (isset($_REQUEST["get_option"])) {

        include "../../inc/db.php";
        $sql= "SELECT * FROM  blogs_category WHERE perent_id={$_REQUEST["get_option"]} ";
        $parentdata = $conn->query($sql);
        
        while($prow = $parentdata->fetch_object()){
            echo "<option value=".$prow->cat_id.">".$prow->category_name."</option>";
        }

    }










  
   ?>