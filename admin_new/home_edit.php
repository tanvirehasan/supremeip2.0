<?php include "inc/header.php"; 

    //------------ Edit Home -----------------------------------------
    if (isset($_POST['home_update'])) {
        
        $id       = $_GET['home_edit'];        
        $title    = $_POST['title'];
        $content  = $_POST['content'];
        $link     = $_POST['link'];
        $opasity     = $_POST['opasity'];
        $bg_color = $_POST['bg_color'];

        if ($_FILES["image"]["name"]!='') {

            $target_dir = "../assets/mediacenter/";
            $image    = $_FILES["image"]["name"];           

            $fileName = basename($_FILES["image"]["name"]); 
            $imageTemp = $_FILES["image"]["tmp_name"];
            $imageUploadPath = $target_dir . $fileName; 
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 40);

        }else{ $image= $_POST['imagevalue'];}

        $update = "UPDATE home_page  SET 
                    title='$title',
                    content='$content',
                    link='$link',
                    bg_color='$bg_color',
                    opasity='$opasity',

                    image='$image' WHERE id='$id'";

        if ($conn->query($update)) {}else{echo "Sorry";}
    }


    $data = SelectData('home_page',"WHERE id={$_GET['home_edit']}");
    $row = $data->fetch_object(); 





?>



<div class="layout-content">
    <div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
        <div class="col-md-12 bg-white p-4">

        <form method="POST" action="" enctype="multipart/form-data">

        <label for="categoryname"  class=" form-label" style="font-weight:700;">Page Name</label>
        <input type="text" class="form-control mb-4 " value="<?=$row->title?>" name="title">

        <label for="icon" class=" form-label" style="font-weight:700;">Link/url</label>
        <input name="link" class="form-control" value="<?=$row->link?>">

        <label for="icon" class="my-3 form-label" style="font-weight:700;">Text</label>
        <textarea name="content" id="neweditordeflt" class="form-control mb-3"><?=$row->content?></textarea>

        <div class='row my-5'>            
                <div class="col-4">
                    <img src="../assets/mediacenter/<?=$row->image?>" style='width:100%;'>
                    <input type="file" class="form-control" name="image">
                    <input type="hidden" name="imagevalue" value="<?=$row->image?>">
                    <select name="img_offon" class="form-control">
                        <option>Image Yes/No</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    <input type="color" class="form-control m-0 p-0 " value="<?=$row->bg_color?>" name="bg_color" >
                    <input type="text" value="<?=$row->opasity?>" name="opasity"  class="form-control" placeholder="Opasity">
                </div>         
        </div>        

        <button type="submit" name="home_update" class="btn btn-primary"> Update</button>
        
    </div>
     </div>
  </div>
</div>



<?php include "inc/footer.php"; ?>    






