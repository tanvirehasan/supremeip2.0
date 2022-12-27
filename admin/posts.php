<?php 
    include "inc/header.php";
    include_once 'controller/blog/blog.inc.php';
?>

<style type="text/css">
    #pages{

      color: #575757;
      width: 50%;
    }

    #pages:hover .action_button{
         display: block;
         cursor: pointer;    
    }

    .action_button{
        display: none;
    }

    .action_button a{
        padding: 0px 3px !important;
    }

    .action_button a:hover{
        color: red !important ;
    }

</style>


<div class="layout-content">
     <div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
          <div class="col-md-12">
            <div class="d-flex"><h3 class="text-dark">Posts</h3> <a href="post_new.php" class="btn btn-info btn-sm mb-5 btn-round ml-2"><i class="feather icon-plus"></i>Add New</a></div> 
             <div class="card mt-2">
               <div class="card-body">
                     <div class="table-responsive ">
                         <table id="report-table2" class="table table-striped table-striped mb-0">
                             <thead>
                                 <tr class="text-info"> 
                                 <th style="width:5px;" ><input type="checkbox" name=""></th>                                  
                                     <th>Title</th>
                                     <th>Category</th>
                                     <th>Author</th>
                                     <th>Date</th>
                                 </tr>
                             </thead>
                             <tbody> 

                      
                                                    
                            <?php 
                                $i=1;
                                $data = SelectData('blog_news',"INNER JOIN blogs_category ON blog_news.cat_title=blogs_category.cat_id");
                                foreach($data as $row){?>
                                                        
                                <tr>    
                                    <td><?=$i?> <input type="checkbox" name=""></td>                                    
                                    <td id="pages">
                                        <b ><?=$row['post_title']?>  </b>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="post_edit.php?postid=<?=$row['id']?>" style="color:#979797;">Edit</a> |                                             
                                            <a href="posts.php?deletepost=<?=$row['id']?>" style="color:#979797;">Trash</a> | 
                                            <a target="null" href="../post_full.php?detail=<?=$row['page_url']?>" style="color:#979797;">View</a> 
                                        </div>
                                    </td>
                                    <td><?=$row['category_name']?></td>
                                    <td>admin</td>
                                    <td><?=$retVal = ($row['page_status']=='0') ? "<p class='p-0 m-0 text-danger'>Private</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?>
                                        <small><?=date('M d, Y | h:i A',strtotime($row['datetime'])); ?></small></td>                                      
                                </tr>  


                                    <?php $i++; } ?>
                            
                            </tbody>
                         </table>
                     </div>
                 </div>
             </div>
          </div>
     </div>
  </div>
</div>

<script>
    $(document).ready( function () {
        $('#report-table').DataTable();
    } );
</script>


<!-- popup -->
<script> 

    function queck_add_page(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#category").html(data);
                $("#dataModal").modal("show");
            },
        });
    }

    function queck_edit(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#category").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
</script>



<!-- Modal for category -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="category">

    </div>
  </div>
</div>


<?php include 'inc/footer.php';?>



