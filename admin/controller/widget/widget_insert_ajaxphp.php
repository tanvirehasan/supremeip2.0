<?php 

    include "../../inc/db.php";
    include "../../inc/function.php";

    if (isset($_POST['price_title'])) {

        $price_title=$_POST['price_title'];
        $Priceamount=$_POST['Priceamount'];    
        $price_page_id=$_POST['price_page_id'];
        $description=htmlspecialchars($_POST['description']);

        $insert="INSERT INTO `prices`( `price_title`, `Priceamount`, `price_page_id`, `Price_Description`, `datetimet` ) VALUES( '$price_title', '$Priceamount', '$price_page_id', '$description', NOW() )";

        if ($conn->query($insert)) {
            echo "success";
            }else{echo "sorry";}
    }


    //Flowchart
    if (isset($_POST['Flowchart_Titel'])) {

        $Flowchart_Titel=$_POST['Flowchart_Titel'];
        $Process_Title=$_POST['Process_Title'];
        $page_id=$_POST['page_id'];    
        $Flowchart_descripstion=htmlspecialchars($_POST['Flowchart_descripstion']);

        $insert="INSERT INTO `flowchart`( `Flowchart_Titel`, `page_id`, `Flowchart_descripstion`,`Process_Title` ) VALUES( '$Flowchart_Titel', '$page_id', '$Flowchart_descripstion','$Process_Title' )";

        if ($conn->query($insert)==TRUE) {
            echo $Flowchart_Titel ."<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }





    //FAQ 
    if (isset($_POST['faq_title'])) {

        $faq_title=$_POST['faq_title'];
        $page_id=$_POST['page_id'];    
        $bgcolor=$_POST['bgcolor'];    
        $faq_descrippstion=htmlspecialchars($_POST['faq_descrippstion']);

        $insert="INSERT INTO `faq`( `faq_title`, `page_id`, `faq_descrippstion`,`bgcolor` ) VALUES( '$faq_title', '$page_id', '$faq_descrippstion','$bgcolor' )";

        if ($conn->query($insert)==TRUE) {
            echo $faq_title ."<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }


    //File 
    if (isset($_FILES["file_name"]["name"])) {

        $file_title=$_POST['file_title'];    
        $page_id=$_POST['page_id'];  
        $target_dir = "../../../assets/mediacenter/files/";
        $file_name=$_FILES["file_name"]["name"];            
        $target_file = $target_dir . basename($_FILES["file_name"]["name"]);
        
        if (move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_file)==TRUE) {

        $insert="INSERT INTO `page_file`( `file_title`, `page_id`, `file_name` ) VALUES( '$file_title', '$page_id', '$file_name')";
        if ($conn->query($insert)==TRUE) {
            echo"<p class='text-success'>Success</p>";
            }else{echo "sorry";}
           
        }

    }


    //Read More
    if (isset($_POST['readmore'])) {

        $ditails=htmlspecialchars($_POST['readmore']);
        $page_id=$_POST['page_id'];    

        $insert="INSERT INTO `read_more`( `ditails`, `page_id` ) VALUES( '$ditails', '$page_id')";

        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }



    //client 
    if (isset($_POST['client_countri'])) {

        $client_countri=$_POST['client_countri'];
        $page_id=$_POST['page_id'];    
        $bgcolor=$_POST['bgcolor'];    
        $client_ditils=htmlspecialchars($_POST['client_ditils']);

        $insert="INSERT INTO `our_clients`( `client_countri`, `page_id`, `client_ditils`,`bgcolor` ) VALUES( '$client_countri', '$page_id', '$client_ditils','$bgcolor' )";
        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }


    //team 
    if (isset($_POST['team_member_id'])) {

        $page_id=$_POST['page_id'];  
        $team_member_id=$_POST['team_member_id'];
        $bgcolor=$_POST['bgcolor'];    

        $insert="INSERT INTO `page_team` ( `page_id`, `team_member_id`,`bgcolor` ) VALUES( '$page_id', '$team_member_id','$bgcolor' )";
        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }



    //images More
    if (isset($_FILES["images"]["name"])) {

        $images=implode(",",$_FILES["images"]["name"]);
        $page_id=$_POST['page_id'];  

        $imagedata = SelectData('image_gallay',"WHERE page_id='$page_id'");
        if ($imagedata->num_rows==0) {
            foreach ($_FILES["images"]["tmp_name"] as $key => $value) {          
                //Product image
                $target_dir            = "../../../assets/mediacenter/image_gallay/";
                $target_file           = $target_dir . basename($_FILES["images"]["name"][$key]);
                move_uploaded_file($_FILES["images"]["tmp_name"][$key], $target_file);
            }

            $insert="INSERT INTO `image_gallay`( `images`, `page_id` ) VALUES( '$images', '$page_id')";
            if ($conn->query($insert)==TRUE) {
                echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}

        }else{echo "Sorry! Have a image gallery";}
    }







// --------------- Edit/Update -----------------

    if (isset($_POST['price_id'])) {

        $price_title=$_POST['price_title_edit'];
        $Priceamount=$_POST['Priceamount'];    
        $price_id=$_POST['price_id'];
        $description=htmlspecialchars($_POST['description']);

        $update="UPDATE `prices` SET `price_title`='$price_title', `Priceamount`='$Priceamount', `Price_Description`='$description' WHERE `priceid`='$price_id'" ;
        if ($conn->query($update)) {
            echo "success";
            }else{echo "sorry";}
    }


   //Flowchart Update
    if (isset($_POST['Flowchart_Titel_edit'])) {

        $Flowchart_Titel=$_POST['Flowchart_Titel_edit'];
        $Process_Title=$_POST['Process_Title'];
        $Flowchartid=$_POST['Flowchartid'];    
        $Flowchart_descripstion=htmlspecialchars($_POST['Flowchart_descripstion']);

        $insert="UPDATE `flowchart` SET  `Flowchart_Titel`='$Flowchart_Titel', `Flowchart_descripstion`='$Flowchart_descripstion',`Process_Title`=' $Process_Title' WHERE Flowchartid=' $Flowchartid'";

        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }


    //FAQ Update----------------
    if (isset($_POST['faq_title_update'])) {

        $faq_title=$_POST['faq_title_update'];
        $faq_id=$_POST['faq_id'];    
        $bgcolor=$_POST['bgcolor'];    
        $faq_descrippstion=htmlspecialchars($_POST['faq_descrippstion']);
        $insert="UPDATE `faq` SET  `faq_title`='$faq_title', `faq_descrippstion`='$faq_descrippstion', `bgcolor`='$bgcolor' WHERE FAQid=' $faq_id' ";
        if ($conn->query($insert)==TRUE) {
            echo $faq_title ."<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }



       //File 
    if (isset($_POST['file_title_update'])) {

        $file_title=$_POST['file_title_update'];    
        $file_id=$_POST['file_id'];  
        $target_dir = "../../../assets/mediacenter/files/";                   
        $target_file = $target_dir . basename($_FILES["file_name_update"]["name"]);
        
        if ($_FILES["file_name_update"]["name"]!='') {
            $file_name=$_FILES["file_name_update"]["name"]; 
            move_uploaded_file($_FILES["file_name_update"]["tmp_name"], $target_file);           
        }else{
            $file_name=$_POST['file_name2']; 
        }

            $update="UPDATE `page_file` SET `file_title`='$file_title', `file_name`='$file_name' WHERE fileid='$file_id'";
            if ($conn->query($update)==TRUE) {
                echo"<p class='text-success'>Success</p>";
                }else{echo "sorry";}

    }



   //Read More Edit/Update
    if (isset($_POST['readmorupdate'])) {

        $ditails=htmlspecialchars($_POST['readmorupdate']);
        $r_id=$_POST['r_id'];    

        $insert="UPDATE `read_more` SET ditails='$ditails' WHERE rid='$r_id' ";

        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }



    //client 
    if (isset($_POST['client_countriy'])) {

        $client_countri=$_POST['client_countriy'];
        $cid=$_POST['cid'];    
        $bgcolor=$_POST['bgcolor'];    
        $client_ditils=htmlspecialchars($_POST['client_ditils']);

        $insert="UPDATE our_clients SET `client_countri`='$client_countri', `client_ditils`='$client_ditils',`bgcolor`='$bgcolor' WHERE cid='$cid' ";
        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }



    //team 
    if (isset($_POST['team_member_update'])) {

        $tid=$_POST['tid'];  
        $team_member_id=$_POST['team_member_update'];
        $bgcolor=$_POST['bgcolor'];    

        $insert="UPDATE `page_team` SET  `team_member_id`='$team_member_id',`bgcolor`='$bgcolor' WHERE tid='$tid' ";
        if ($conn->query($insert)==TRUE) {
            echo "<p class='text-success'>Success</p>";
            }else{echo "sorry";}
    }