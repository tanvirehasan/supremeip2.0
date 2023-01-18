 <?php
 //Page add----------------------------------------
    if (isset($_POST['page_add'])) {
        
        $manu_title     = $_POST['manu_title'];

        $insert = "INSERT INTO pages ( manu_title, date, page_status ) VALUES ( '$manu_title', now(), '1' )";
        if ($conn->query($insert)) {
            echo "<script>window.location.href='".$_SERVER['PHP_SELF']."';</script>";
        }

    }


    //Edit page-----------------------------------------
    if (isset($_POST['page_edit'])) {
        
        $page_id        = $_POST['page_id'];        
        $manu_title     = $_POST['manu_title'];
        $update = "UPDATE pages  SET manu_title='$manu_title' WHERE page_id='$page_id'";

        if ($conn->query($update)) {
            echo "<script>window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
        }

    }



    //Page Delete-------------------------------------------------------------
    if (isset($_GET['deletepage'])) {
        $delete = "DELETE FROM pages WHERE page_id={$_GET['deletepage']}";
        if ($conn->query($delete)) {
            Reconect('pages.php');
        }else{
            echo "<script>alert('Sorry Please try agine')</script>";
        }

    }


    //Page Trash-------------------------------------------------------------
    if (isset($_GET['trashpage'])) {
        $delete = "UPDATE pages  SET page_status='3' WHERE page_id={$_GET['trashpage']}";
        if ($conn->query($delete)) {
            Reconect('trash.php');
        }else{
            echo "<script>alert('Sorry Please try agine')</script>";
        }

    }

       //Page Restor-------------------------------------------------------------
    if (isset($_GET['restorepage'])) {
        $delete = "UPDATE pages  SET page_status='1' WHERE page_id={$_GET['restorepage']}";
        if ($conn->query($delete)) {
            Reconect('pages.php');
        }else{
            echo "<script>alert('Sorry Please try agine')</script>";
        }

    }