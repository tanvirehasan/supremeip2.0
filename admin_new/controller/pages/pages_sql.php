 <?php
 //Page add----------------------------------------
    if (isset($_POST['page_add'])) {
        
        $manu_title     = $_POST['manu_title'];
        $page_url       = str_replace(' ', '-', $_POST['page_url']);

        $insert = "INSERT INTO pages ( manu_title, page_url, date, page_status ) VALUES ( '$manu_title', '$page_url', now(), '1' )";
        if ($conn->query($insert)) {
            echo "<script>alert('success')</script>";
        }

    }


    //Edit page-----------------------------------------
    if (isset($_POST['page_edit'])) {
        
        $page_id        = $_POST['page_id'];        
        $manu_title     = $_POST['manu_title'];
        $page_url       = str_replace(' ', '-', $_POST['page_url']);

        $update = "UPDATE pages  SET manu_title='$manu_title', page_url='$page_url' WHERE page_id='$page_id'";

        if ($conn->query($update)) {
            
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