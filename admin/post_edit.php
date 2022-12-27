<?php 
    include 'inc/header.php';
    (isset($_GET['postid'])) ? $postid = $_GET['postid'] : Reconect('posts.php');
    include_once 'controller/blog/blog.inc.php';    

    $data = SelectData('blog_news',"WHERE id='$postid'");
    $row = $data->fetch_object();
?>

<div class="container-fluid">
	<div class="row">
	  <div class="col-12 col-md-10 my-5" style="min-height:800px;">  
        <form action="" method="POST" enctype="multipart/form-data" >
	   <div class="bg-white p-5" style="min-height:800px;"> 
		<div class="card"> 
			<div class="card-body">      
		        <input type="text" class="form-control mb-4" value="<?=$row->post_title?>"  name="post_title" require>
		        <textarea id="summernote" class="form-control mb-5" name="blognews_content" require ><?=$row->blognews_content?></textarea>
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
                <?php 
                    if ($row->featured_image==null) {?>
                        <span class="drop-zone__prompt">Set Featured Image</span>                        
                    <?php }else{ ?>
                        <img class="drop-zone__prompt" width="200px" src="../assets/blogs/<?=$row->featured_image?>"  alt="<?=$row->page_title?>">
                        <input type="hidden" name="featured_image2" value="<?=$row->featured_image?>">
                <?php } ?>                      
    			<input type="file" name="featured_image" class="drop-zone__input">
			 </div>

			 <div class="perent_select mt-5">
			 	<h5  class=""><i class="fas fa-file-alt"></i> Category</h5>
			 	<select type="text" style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px;" name="cat_title" placeholder="ex. Home">
                    <option value="<?=$row->cat_title?>"><?=postcate('category_name',"$row->cat_title")?></option>
                    <?php 
                        $parentdata = SelectData('blogs_category',"");
                        while($prow = $parentdata->fetch_object()){?>
                        <option value="<?=$prow->cat_id?>"><?=$prow->category_name?></option> 
                    <?php } ?>
				</select>
			 </div>


            <div class="Visibility mt-5">
                <h6 class="m-0 p-0"><i class="fas fa-eye"></i> Visibility</h6>
                <select style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px; margin-top:5px;" name="page_status">
                    <option value="<?=$row->page_status?>"><?=$retVal = ($row->page_status=='0') ? "Private" : "Published";?></option>                     
                    <option value="1">Published</option>
                    <option value="0">Private</option>
                </select>
             </div>

			<div class="mt-5">
	            <input type="submit" name="post_update" value="UPDATE" class="form-control btn btn-success m-0">                                
	        </div>

		</div>
        </form>
	   </div>
	   <!-- row -->
	</div>
</div>



<!-- widget load -->
<script>
    setInterval(function(){
        $("#widget_view").load('controller/widget/widget_view.php?pageid=<?php echo $_GET['pageid']?>')
    }, 2000);
</script>


<!-- popup -->
<script> 
    function widget(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#video").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
</script>

<!-- Modal for Video -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="video">

    </div>
  </div>
</div>


<?php include 'inc/footer.php'; ?>




</body>
</html>