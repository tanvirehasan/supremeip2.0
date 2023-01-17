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
<script>
    function checkDelete(){
        return confirm('Are you sure?');
    }
</script>

<div class="layout-content">
     <div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
          <div class="col-md-12">
            <div class="d-flex"><h3 class="text-dark">Pages</h3> 
            <button class="btn btn-info btn-sm mb-3 btn-round ml-2 " onclick="queck_add_page('views/pages/add_page_queck.php')"><i class="feather icon-plus"></i>Add New</button>
            <a class="btn btn-info btn-sm mb-3 btn-round ml-2 text-white" href="trash.php" > <i class="fas fa-trash"></i> Trash</a>
        </div> 
             <div class="card mt-2">
               <div class="card-body">
                     <div class="table-responsive ">

                         <table id="data_table" class="table table-striped table-striped mb-0">
                             <thead>
                                 <tr class="text-info"> 
                                 <th style="width:5px;" ></th>                                  
                                     <th>Short Name</th>
                                     <th>Page Title</th>
                                     <th>Url</th>
                                     <th>Author</th>
                                     <th>Date</th>
                                 </tr>
                             </thead>
                             <tbody> 
                     
                                                    
                            <?php 
                                $i=1;
                                $data = SelectData('pages',"WHERE page_status!='3' ORDER BY page_id DESC ");
                                foreach($data as $row){?>
                                                        
                                <tr>    
                                    <td><?=$i?></td>                                    
                                    <td id="pages">
                                        <b ><?=$row['manu_title']?></b>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="page_edit.php?pageid=<?=$row['page_id']?>" style="color:#979797;">Edit</a> |
                                            <a onclick="queck_edit('views/pages/add_page_queck.php?queckedit=<?=$row['page_id']?>')" style="color:#979797;">Quick Edit</a> | 
                                            <a href="pages.php?trashpage=<?=$row['page_id']?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Trash</a> | 
                                            <a target="null" href="../preview.php?page=<?=$row['page_url']?>" style="color:#979797;">View</a> 
                                            
                                        </div>
                                    </td>
                                    <td><?php $titlei=strip_tags(html_entity_decode($row['page_title'])); echo substr_replace($titlei, "...",70);   ?></td>

                                                            <td><?=$row['page_url']?></td>
                                    <td>admin</td>
                                    <td><?=$retVal = ($row['page_status']=='0') ? "<p class='p-0 m-0 text-danger'>Private</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?>
                                        <small><?=$row['date']?></small></td>                                      
                                </tr>  

                             <?php   $i++; } ?>
                            
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



