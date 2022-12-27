<?php 
    include "inc/header.php";
    include 'controller/blog/blognews_category.inc.php';
?>

<!-- add category modal -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
  <div class="container my-3">
       <form method="POST" action="" enctype="multipart/form-data">
           <div class="row">
             <div class="col-12">
                 <div class="">
                     <div class="modal-header" style="border-bottom:1px solid red; padding-bottom: 20px;">
                         <h5 class="modal-title">New Category</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
             
                        <div class="container my-5">
                            <label for="categoryname" class=" form-label" style="font-weight:700;">Category Name</label>
                            <input type="text" class="form-control mb-4 " id="" name="category_name">
        
                            <label for="icon" class=" form-label" style="font-weight:700;">Category Icon</label>
                            <input type="text" class="form-control  mb-4 " id="icon" name="cat_icon">             

                            <div class="float-right m-0 py-5">
                                <button type="submit" name="add_blog" class="btn btn-primary"> Submit</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
         </form>
    </div>

   </div>
  </div>
</div>

<div class="layout-content" id="catalist" >
    <?php include "controller/blog/blog_cat_view.php"; ?>
</div>

<?php include 'inc/footer.php';?>