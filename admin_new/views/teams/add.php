
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container my-3">
   <form method="POST" action="" enctype="multipart/form-data">
       <div class="row">
         <div class="col-12">
             <div class="">
                 <div class="modal-header">
                     <h3 class="modal-title">New Member</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>

                    <div class="container my-5">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Name*</label>
                        <input type="text" class="form-control mb-4 "  name="Name" required>

                        <label for="categoryname" class=" form-label" style="font-weight:700;">Designation*</label>
                        <input type="text" class="form-control mb-4 "  name="Designation" required>

                        <label for="categoryname" class="form-label pb-2" style="font-weight:700;">About*</label>
                        <textarea class="editors" name="About" required></textarea>

                        <label for="categoryname" class=" form-label mt-4" style="font-weight:700;">Phone No.*</label>
                        <input type="text" class="form-control mb-4 "  name="Phone_No" required>

                        <label for="categoryname" class=" form-label" style="font-weight:700;">Email*</label>
                        <input type="email" class="form-control mb-4 "  name="Email" required>

                        <label for="categoryname" class="form-label pt-5" style="font-weight:700;">Profile Photo*</label>
                        <input type="file" class="form-control mb-4 "  name="Profile_pic" required>

                        <div class="float-right my-3">
                            <button type="submit" name="team_add" class="btn btn-primary"> Submit</button>
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

