<?php 
    include "../../inc/db.php";
    include "../../inc/function.php";
?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container my-3">
   <form method="POST" action="" enctype="multipart/form-data">
       <div class="row">
         <div class="col-12">
             <div class="">
                 <div class="modal-header">
                     <h3 class="modal-title">New Clients</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>
            <div class="container my-5">

                    <label for="categoryname" class=" form-label" style="font-weight:700;">Select Country</label>
                    <input list='countrylist' type="text" class="form-control mb-4 " name="client_countri" require>
                    <datalist id="countrylist">
                    <?php 
                        $coun_data = SelectData('countries',"");
                        foreach ($coun_data as $datalist) {?>
                        <option value="<?=$datalist['name']?>"><?=$datalist['name']?></option>
                    <?php } ?>
                    </datalist>

                    <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Client details</label>
                    <textarea class="editors" name="client_ditils" require></textarea>

                    <label for="categoryname" class="form-label pt-5" style="font-weight:700;">color</label>
                    <input type="color" class="form-control mb-4" value="<?=settings('client_bg_defult')?>"  name="bgcolor" require style="height:80px;">

                    <div class="float-right my-3">
                        <button type="submit" name="add_client" class="btn btn-primary"> Submit</button>
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

