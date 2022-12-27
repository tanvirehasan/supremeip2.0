<?php 
    include 'inc/header.php';
    include_once 'controller/blog/blog.inc.php';
?>


<div class="container-fluid flex-grow-1 container-p-y">
	<div class="row">
	  <div class="col-12 col-md-10 my-5 ">  
        <form action="" method="POST" enctype="multipart/form-data" >
	   <div class="bg-white p-5"> 
		<div class="card"> 
			<div class="card-body">      
		        <input type="text" class="form-control mb-4" value="Post Title"  placeholder="Page Title"  name="post_title" require>
		        <textarea id="summernote" class="form-control mb-5" name="blognews_content" require ></textarea>
	    	</div>
	     </div>

        <div class="row" id="widget_view"></div>
        <!-- Widget row -->

	    </div>
	   </div>

		<div class="col-12 col-md-2 my-5 bg-white">
		  <div class="px-4 py-5">
		  	<h5  class=""><i class="fas fa-image"></i> Featured Image</h5>
			<div class="drop-zone">
                <span class="drop-zone__prompt">Set Featured Image</span>                      
    			<input type="file" name="featured_image" class="drop-zone__input">
			 </div>

			 <div class="perent_select mt-5">
			 	<h5  class=""><i class="fas fa-file-alt"></i> Category</h5>
			 	<select  style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px;" name="parent_cat_id" onchange="Sub_catagory_Select(this.value)">
                    <option value="">select</option>
                    <?php 
                        $parentdata = SelectData('blogs_category'," where perent_id='0' ");
                        while($prow = $parentdata->fetch_object()){?>
                        <option value="<?=$prow->cat_id?>"><?=$prow->category_name?></option> 
                    <?php } ?>
				</select>
			 </div>

            <div class="perent_select mt-5">
			 	<h5  class=""><i class="fas fa-file-alt"></i> Sub-category</h5>
			 	<select id="sub_category"  style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px;" name="cat_title"  >
		        <option>Select</option>
                    
				</select>
			 </div>
           
            <div class="Visibility mt-5">
                <h6 class="m-0 p-0"><i class="fas fa-eye"></i> Visibility</h6>
                <select style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px; margin-top:5px;" name="page_status">
                    <option value="">select</option>                     
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>
             </div>

			<div class="mt-5">
	            <input type="submit" name="post_add" value="UPDATE" class="form-control btn btn-success m-0">                                
	        </div>

		</div>
        </form>
	   </div>
	   <!-- row -->
	</div>
</div>


<script> 
   //Select Hall Name
   function Sub_catagory_Select(val){
        $.ajax({
            type: 'post',
            url: 'controller/blog/blognews_category.inc.php',
            data: {get_option:val},        
            success: function (response) {
                document.getElementById("sub_category").innerHTML=response; 
            }
        });
    }

</script>



<?php include 'inc/footer.php'; ?>




</body>
</html>