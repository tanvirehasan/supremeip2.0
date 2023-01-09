<?php 
    include 'inc/header.php';
    (isset($_GET['pageid'])) ? $page_id = $_GET['pageid'] : Reconect('pages.php');


    if (isset($_POST['page_update'])) {
        
        $page_title   = htmlspecialchars($_POST['page_title']);  
        $page_sub_title   = htmlspecialchars($_POST['page_sub_title']);
        $page_content   = htmlspecialchars($_POST['page_content']);

        $page_status    = $_POST['page_status'];
        $seo_title      = $_POST['seo_title'];
        $seo_keyword    = $_POST['seo_keyword'];
        
        $Section_Title_Price= $_POST['Section_Title_Price'];
        $Section_Title_Flowchart= $_POST['Section_Title_Flowchart'];
        $Section_Title_Faq= $_POST['Section_Title_Faq'];
        $Section_Title_File= $_POST['Section_Title_File'];

       
        if ($_FILES["page_featured_image"]["name"]!='') {
            $target_dir = "../assets/mediacenter/";
            $page_featured_image    = $_FILES["page_featured_image"]["name"];            
            $target_file = $target_dir . basename($_FILES["page_featured_image"]["name"]);
            move_uploaded_file($_FILES["page_featured_image"]["tmp_name"], $target_file);
        }else{
            $page_featured_image    = $_POST['page_featured_image2'];
        }


        $update = "UPDATE  pages SET

                    page_title='$page_title',
                    page_sub_title='$page_sub_title',
                    page_content='$page_content',

                    page_featured_image='$page_featured_image',
                    page_status='$page_status',
                    
                    seo_title='$seo_title',
                    seo_keyword='$seo_keyword',
                    
                    Section_Title_Price='$Section_Title_Price',
                    Section_Title_Flowchart='$Section_Title_Flowchart',
                    Section_Title_Faq='$Section_Title_Faq',
                    Section_Title_File='$Section_Title_File'                    

                  WHERE page_id='$page_id'";             
        
        if ($conn->query($update)) {
            //  echo "<script>alert('Success')</script>";
        }else{
            // echo "Error: " . $sql . "<br>" . $conn->error;
             echo "<script>alert('Sorry')</script>";

        }
    }

    $data = SelectData('pages',"WHERE page_id='$page_id'");
    $row = $data->fetch_object();
?>




<form action="" method="POST" enctype="multipart/form-data" >
<div class="container-fluid">
	<div class="row">
	  <div class="col-12 col-md-10 my-5 ">  
	   <div class="bg-white p-5">  

       <div class="card p-3">
            <div class="card-header p-0"><h5 class="py-3 text-danger">SEO</h5></div>
            <input type="text" class="form-control" name="seo_title" value="<?=$row->seo_title?>">
            <input type="text" class="form-control" name="seo_keyword" value="<?=$row->seo_keyword?>"> 
        </div>

        <label for="">Title</label>
        <textarea class="form-control mb-5" name="page_title" id="neweditordeflt" cols="30" rows="10">
            <?=$row->page_title?>
        </textarea>
        <div class="divider my-5"></div>
        <label for="">Sub-title</label>
        <textarea class="form-control mb-5" name="page_sub_title" id="neweditordeflt" cols="30" rows="10">
            <?=$row->page_sub_title?>
        </textarea>       
	    </div>
	   </div>

		<div class="col-md-2 my-5 bg-white">
            <div class="mt-3">
                <input type="submit" name="page_update" value="UPDATE" class="form-control btn btn-success m-0">                                
            </div>
		  <div class="px-0 py-3">
		  	<h5  class=""><i class="fas fa-image"></i> Featured Image</h5>
			<div class="drop-zone">
			    <?php 
                    if ($row->page_featured_image==null) {?>
                        <span class="drop-zone__prompt">Set Featured Image</span>                        
                    <?php }else{ ?>
                        <img class="drop-zone__prompt" style="width:100%;" src="../assets/mediacenter/<?=$row->page_featured_image?>" >
                        <input type="hidden" name="page_featured_image2" value="<?=$row->page_featured_image?>">
                <?php } ?>                                              
			     <input type="file" name="page_featured_image" class="drop-zone__input">
			 </div>



            <div class="Visibility mt-5">
                <h6 class="m-0 p-0"><i class="fas fa-eye"></i> Visibility : <?=$retVal = ($row->page_status=='0') ? "<span class='text-danger'>Private</span>" : "<span class='text-success'>Published</span>";?></h6>
                <select style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px; margin-top:5px;" name="page_status">
                    <option value="<?=$row->page_status?>">select</option>                    
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>
             </div>

			 <div class="Widget mt-5">
		 		<h5 class=""><i class="fas fa-clipboard-list"></i> Widget</h5>
			 	<a class="btn btn-dark text-white m-1" onclick="widget('views/widget/widget_insert.php?priceadd=<?=$row->page_id?>&title=Price')" >+ Price</a>
			 	<a class="btn btn-dark text-white m-1" onclick="widget('views/widget/widget_insert.php?flowchartadd=<?=$row->page_id?>&title=Flowchart')" >+ Flowchart</a>	 	
			 	<a class="btn btn-dark text-white m-1" onclick="widget('views/widget/widget_insert.php?faqadd=<?=$row->page_id?>&title=FAQ')">+ FAQ List</a>
                <a class="btn btn-dark text-white m-1" onclick="widget('views/widget/widget_insert.php?fileadd=<?=$row->page_id?>&title=File')">+ File List</a>
			 </div>

		</div>
	   </div>	   

       <div class="col-md-12 mx-0 p-0">

        <textarea class="form-control mb-5" name="page_content" id="neweditor">
            <?=$row->page_content?>
        </textarea>
        <div class="divider my-5"></div>
       <div class="row" id="widget_view"></div>

        <div class="card p-3">
            <div class="card-header p-0"><h5 class="py-3 text-danger">Section Title</h5></div>
            <input type="text" class="form-control" name="Section_Title_Price" value="<?=$row->Section_Title_Price?>">
            <input type="text" class="form-control" name="Section_Title_Flowchart" value="<?=$row->Section_Title_Flowchart?>"> 
            <input type="text" class="form-control" name="Section_Title_Faq" value="<?=$row->Section_Title_Faq?>"> 
            <input type="text" class="form-control" name="Section_Title_File" value="<?=$row->Section_Title_File?>"> 
            <div class="my-5">
                <input type="submit" name="page_update" value="UPDATE" class="form-control btn btn-success m-0 fs-6">                               
            </div>         
        </div>

	</div><!-- row -->
</div>
</form>


<!-- widget load -->
<script>
    setInterval(function(){
        $("#widget_view").load('controller/widget/widget_view.php?pageid=<?php echo $_GET['pageid']?>')
    }, 3000);
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