<?php
  
     include "../../inc/function.php";

        $editdata = SelectData(' blogs_category',"where cat_id={$_GET['id']}");
        $cata =  $editdata->fetch_object();
    ?>

  <div class="container my-3">
       <form method="POST" action="" enctype="multipart/form-data">
           <div class="row">
             <div class="col-12">
                 <div class="">
                     <div class="modal-header">
                         <h3 class="modal-title">Add Category</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
             
                        <div class="container my-5">
                            <label for="categoryname" class=" form-label" style="font-weight:700;">Category Name</label>
                            <input type="text" class="form-control mb-4 " id="" value="<?=$cata->category_name;?>" name="category_name">

                           
                            <label for="icon" class=" form-label" style="font-weight:700;">Category Icon</label>
                            <input type="text" class="form-control  mb-4" value="<?=$cata->cat_icon;?>" id="icon" name="cat_icon">             
                            <input type="hidden" class="form-control  mb-4" value="<?=$cata->cat_id;?>" name="cat_id">             

                            <div class="float-right m-0">
                                <button type="submit" name="update_cate" class="btn btn-primary"> Submit</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
         </form>
    </div>