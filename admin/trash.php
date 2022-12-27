<?php 
    include "inc/header.php";
    include_once 'controller/pages/pages_sql.php';
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
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>

<div class="layout-content">
     <div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
          <div class="col-md-12">
            <div class="d-flex"><h3 class="text-dark">Pages</h3> 
            <a class="btn btn-info btn-sm mb-3 btn-round ml-2 text-white" href="pages.php" >Pages</a>
        </div> 
             <div class="card mt-2">
               <div class="card-body">
                     <div class="table-responsive ">
                         <table id="report-table2" class="table table-striped table-striped mb-0">
                             <thead>
                                 <tr class="text-info"> 
                                 <th style="width:5px;" ><input type="checkbox" name=""></th>                                  
                                     <th>Title</th>
                                     <th>url</th>
                                     <th>Author</th>
                                     <th>Date</th>
                                 </tr>
                             </thead>
                             <tbody> 
                     
                                                    
                            <?php 
                                $i=1;
                                $data = SelectData('pages',"WHERE page_status='3' ");
                                foreach($data as $row){?>
                                                        
                                <tr>    
                                    <td><?=$i?> <input type="checkbox" name=""></td>                                    
                                    <td id="pages">
                                        <b ><?=$row['manu_title']?>  <i class="fas fa-level-down-alt"></i></b>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="pages.php?deletepage=<?=$row['page_id']?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a> | 
                                            <a href="pages.php?restorepage=<?=$row['page_id']?>" onclick="return confirm('Are you sure?')" style="color:#09970F;">Restore</a>                 
                                        </div>
                                    </td>
                                    <td><?=$row['page_url']?></td>
                                    <td>admin</td>
                                    <td><?=$retVal = ($row['page_status']=='3') ? "<p class='p-0 m-0 text-danger'>Trash</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?>
                                        <small><?=$row['date']?></small></td>                                      
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



