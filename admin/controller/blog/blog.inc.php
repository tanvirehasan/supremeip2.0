
<?php 

if (isset($_POST['post_add'])) { 

    $post_title = $_POST['post_title'];
    $page_url = str_replace(' ', '-', $_POST['post_title']);
    $cat_title  = $_POST['cat_title'];
    $parent_cat_id  = $_POST['parent_cat_id'];
    $page_status= $_POST['page_status'];
    $blognews_content = htmlspecialchars($_POST['blognews_content']);
    $featured_image   = $_FILES["featured_image"]["name"];
    $target_dir  = "../assets/blogs/";
    $target_file = $target_dir . basename($_FILES["featured_image"]["name"]);

    if (move_uploaded_file($_FILES["featured_image"]["tmp_name"], $target_file)) {            
        $sql = "INSERT INTO  blog_news (`post_title`, `cat_title`,`parent_cat_id`, `blognews_content`, `featured_image`, `page_status`,`page_url`, `datetime`) VALUES('$post_title', '$cat_title','$parent_cat_id', '$blognews_content', '$featured_image','$page_status','$page_url',  NOW())";            
        if (mysqli_query($conn,$sql)) {
        echo "<script>alert('Success')</script>";
        }else{echo "<script>alert('Sorry please Try Agine')</script>"; }
    }
}


//post Edit-------------------------------------------------------------
if (isset($_POST['post_update'])) { 

    $post_title = $_POST['post_title'];
    $cat_title  = $_POST['cat_title'];
    $page_status= $_POST['page_status'];
    $blognews_content = htmlspecialchars($_POST['blognews_content']);

    if ($_FILES["featured_image"]["name"]!='') {
        $featured_image   = $_FILES["featured_image"]["name"];
        $target_dir  = "../assets/blogs/";
        $target_file = $target_dir . basename($_FILES["featured_image"]["name"]);
        move_uploaded_file($_FILES["featured_image"]["tmp_name"], $target_file);
    }else{

        $featured_image   = $_POST['featured_image2'];
    }

    $sql = "UPDATE blog_news SET post_title='$post_title',cat_title='$cat_title',page_status='$page_status',blognews_content='$blognews_content',featured_image='$featured_image' WHERE id='$postid' ";

    if (mysqli_query($conn,$sql)) {
        
    }        
    
}




   //post Delete-------------------------------------------------------------
    if (isset($_GET['deletepost'])) {
        $delete = "DELETE FROM blog_news WHERE id={$_GET['deletepost']}";
        if ($conn->query($delete)) {
            Reconect('posts.php');
        }else{
            echo "<script>alert('Sorry Please try agine')</script>";
        }

    }