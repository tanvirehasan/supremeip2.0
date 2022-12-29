<?php include "inc/header.php";
      include 'controller/blog/blognews_category.inc.php';?>

<div class="layout-content" id="catalist">
     
</div>



<!-- add category modal -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
  <div class="container my-3">
       <form method="POST" action="" enctype="multipart/form-data">
           <div class="row">
             <div class="col-12">
                 <div class="">
                     <div class="modal-header">
                         <h3 class="modal-title">Add main Category</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
             
                        <div class="container my-5">
                            <label for="categoryname" class=" form-label" style="font-weight:700;">Category Name</label>
                            <input type="text" class="form-control mb-4 " id="" name="category_name">
                      

                            <label for="icon" class=" form-label" style="font-weight:700;">Category Icon</label>
                            <input type="text" class="form-control  mb-4 " id="icon" name="cat_icon">             

                            <div class="float-right m-0">
                                <button type="submit" name="add_cata" class="btn btn-primary"> Submit</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script> 
    function edit(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#category").html(data);
                $("#dataModal").modal("show");
            },
        });
    }

    function cat_delete(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                            
            },
        });
    }
    setInterval( function(){
		$('#catalist').load("controller/blog/main_cat_viiew.php");
	},1000);

</script>

<!-- Modal for category -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="category">

    </div>
  </div>
</div>




<?php include 'inc/footer.php';?>