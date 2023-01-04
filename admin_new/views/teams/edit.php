<?php 

    include "../../inc/db.php";
    include "../../inc/function.php";

    $teamid = $_GET['team_id'];
    $team_data = SelectData('our_team', "WHERE team_id='$teamid'");
    $team = $team_data->fetch_object();

?>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container my-3">
   <form method="POST" action="" enctype="multipart/form-data">
       <div class="row">
         <div class="col-12">
             <div class="">
                 <div class="modal-header">
                     <h3 class="modal-title">Edit Member</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>

                    <div class="container my-5">
                        <label for="categoryname" class=" form-label"  style="font-weight:700;">Name*</label>
                        <input type="text" class="form-control mb-4" value="<?=$team->Name?>"  name="Name" >

                        <label for="categoryname" class=" form-label" style="font-weight:700;">Designation*</label>
                        <input type="text" class="form-control mb-4 " value="<?=$team->Designation?>"  name="Designation" >

                        <label for="categoryname" class="form-label pb-2" style="font-weight:700;">About*</label>
                        <textarea class="editors" name="About" > <?=$team->About?></textarea>

                        <label for="categoryname" class=" form-label mt-4" style="font-weight:700;">Phone No.*</label>
                        <input type="text" class="form-control mb-4 "  name="Phone_No" value="<?=$team->Phone_No?>" >

                        <label for="categoryname" class=" form-label" style="font-weight:700;">Email*</label>
                        <input type="email" class="form-control mb-4 "  name="Email" value="<?=$team->Email?>" >

                        <label for="categoryname" class="form-label pt-5" style="font-weight:700;">Profile Photo*</label></br>
                        <img src="../assets/mediacenter/team/<?=$team->Profile_pic?>" width='150'>
                        <input type="file" class="form-control mb-4 "  name="Profile_pic" >
                        <input type="hidden" name="Profile_pic2" value="<?=$team->Profile_pic?>">
                        <input type="hidden" name="team_id" value="<?=$teamid?>">


                        <div class="float-right my-3">
                            <button type="submit" name="team_edit" class="btn btn-primary"> Submit</button>
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

