<?php 

    include "../../inc/db.php";
    include "../../inc/function.php";

    $service_id = $_GET['service_id'];
    $service_data = SelectData('our_services', "WHERE service_id='$service_id'");
    $service = $service_data->fetch_object();

?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container my-3">
   <form method="POST" action="" enctype="multipart/form-data">
       <div class="row">
         <div class="col-12">
             <div class="">
                 <div class="modal-header">
                     <h3 class="modal-title">Edit Service</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>
            <div class="container my-5">


                        <label for="categoryname" class=" form-label" style="font-weight:700;">Service Name</label>
                        <input type="text" value="<?=$service->service_name?>" class="form-control mb-4 " name="service_name" require>

                        <label for="categoryname" class=" form-label" style="font-weight:700;">Service Icon</label>
                        <input  type="text" class="form-control mb-4" value="<?=$service->service_icon?>" name="service_icon" require>
                           
                        <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
                        <textarea class="form-control editors" name="service_text_link" require><?=$service->service_text_link?></textarea>


                        <label for="categoryname" class="form-label pt-5" style="font-weight:700;">color</label>
                        <input type="color" class="form-control mb-4" value="<?=$service->service_bgcolor?>"  name="service_bgcolor" require style="height:80px;">


                        <input type="hidden" class="form-control mb-4 "  value="<?=$service->service_id?>" name="service_id" require>

                        <div class="float-right my-3">
                            <button type="submit" name="update_service" class="btn btn-primary"> Submit</button>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
     </form>
</div>


<script>
    $(document).ready(function() {
        $('.editors').summernote();
    });
</script>

