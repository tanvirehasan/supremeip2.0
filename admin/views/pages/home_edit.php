<?php

    include "../../inc/db.php";
    include "../../inc/function.php";

?>


<?php if (isset($_GET['home_edit'])) {?>
<!-- -------------------------Page Edit---------------------- -->

<?php 
    $data = SelectData('home_page',"WHERE id={$_GET['home_edit']} ");
    $row = $data->fetch_object();
?>

  <div class="container my-3">
       <form method="POST" action="" enctype="multipart/form-data">
           <div class="row">
             <div class="col-12">
                 <div class="">
                     <div class="modal-header">
                         <h3 class="modal-title">Home Edit </h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                            <div class="container my-5">
                                <label for="categoryname"  class=" form-label" style="font-weight:700;">Page Name</label>
                                <input type="text" class="form-control mb-4 " value="<?=$row->title?>" name="title">

                                <label for="icon" class=" form-label" style="font-weight:700;">Link/url</label>
                                <input name="link" class="form-control" value="<?=$row->link?>">

                                <label for="icon" class=" form-label" style="font-weight:700;">Text</label>
                                <textarea name="content" id="neweditor" class="form-control mb-3"><?=$row->content?></textarea>
                          
                           
                                <h6 class="h6 mt-3">Image & Overlay Color</h6>

                                <div class="row">
                                    <div class="col-md-4">                                    
                                        <img src="../assets/mediacenter/<?=$row->image?>" style='width:100%; height:50px;'>
                                        <input type="file" class="form-control " value="<?=$row->image?>" name="image">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="color" class="form-control m-0 p-0 " value="<?=$row->bg_color?>" name="bg_color"  style='width:100%; height:50px;'>
                                    </div>
                                    <div class="col-md-4">  
                                        <!--<input type="text" value="0.9" class="text-control" placeholder="Opasity">-->
                                    </div>

                                </div>
                            </div>


                            <div class="float-right my-3">
                                <input type="hidden" name="home_id" value="<?=$_GET['home_edit']?>">
                                <input type="hidden" name="imagevalue" value="<?=$row->image?>">
                                <button type="submit" name="home_update" class="btn btn-primary"> Update</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
         </form>
    </div>

<?php } ?>


  <script>
    tinymce.init({
        selector: 'textarea#neweditor',
        height:400,
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'insertfile blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
