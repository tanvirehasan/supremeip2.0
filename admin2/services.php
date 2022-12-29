<?php 

include "inc/header.php";
include_once 'controller/services/services_sql.php';

$data = SelectData('settings','');
$row = $data->fetch_object();

?> 

<script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Are you sure?');
    }
</script>

<div class="container-fluid flex-grow-1 container-p-y"> 
    <div class="row">
        <div class="col-10"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> OUR SERVICES</h3></div>
        <div class="col-2"><h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup('views/services/add.php')" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3></div>
    </div>
        <!-- logo -->

    <?php
        if (isset($error)) {?><div class="alert  <?=$bg?>" role="alert"> <?=$error?> </div><?php } ?>

    <div class="row">        
        <div class="col-md-6" id="clients">
            <div class="card">
 <div class="card-body">
     <div class="row align-items-center m-l-0">
         <div class="col-sm-6">
         </div>
     </div>
     <div class="table-responsive">
         <table id="data_table" class="table table-bordered table-striped mb-0">
             <thead>
                 <tr>
                     <th>SL</th>
                     <th>Name</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>

        <?php 
            $i=1;
            $teab_data = SelectData('our_services', "ORDER BY service_name ASC");
            while ($service = $teab_data->fetch_object()) {?>

                 <tr>
                    <td><?=$i++?></td>
                        <td><?=$service->service_name?></td>
                    <td>
                        <a onclick="popup('views/services/edit.php?service_id=<?=$service->service_id?>')"  class="btn btn-warning btn-sm text-white">Edit</a>                     
                        <a href="services.php?delete_id=<?=$service->service_id?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>                          
                    </td>
                </tr> 

            <?php } ?>
            
             </tbody>
         </table>
     </div>
 </div>
</div>
        </div>    
    </div><!-- row -->
</div>


<!-- popup -->
<script> 

    // view
    setInterval( function(){
        // $("#clients").load("views/clients/client_view.php");
        $(".alert").hide();
    },1000);


    function popup(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
    function url(url) {$.ajax({url: url});}
</script>


<!-- Modal for client -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="client">

    </div>
  </div>
</div>

<?php include 'inc/footer.php';?>