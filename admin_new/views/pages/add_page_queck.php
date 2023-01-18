<?php
    include "../../inc/db.php";
    include "../../inc/function.php";
?>


<?php if (!isset($_GET['queckedit'])) {?>

<div class="container my-3">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="modal-header">
                        <h3 class="modal-title">Queck Add Page </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container my-5">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="categoryname" class=" form-label" style="font-weight:700;">Short
                                    Name</label>
                                <input type="text" class="form-control mb-4 " id="" name="manu_title">
                            </div>
                        </div>


                        <div class="float-right my-3">
                            <button type="submit" name="page_add" class="btn btn-primary"> Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php }else{ ?>

<!-- -------------------------Page Edit---------------------- -->

<?php 
    $data = SelectData('pages',"WHERE page_id={$_GET['queckedit']}");
    $row = $data->fetch_object();
?>

<div class="container my-3">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="modal-header">
                        <h3 class="modal-title">Queck Edit </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container my-5">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="categoryname" class=" form-label" style="font-weight:700;">Short
                                    Name</label>
                                <input type="text" class="form-control mb-4 " value="<?=$row->manu_title?>"
                                    name="manu_title">
                            </div>
                        </div>
                    </div>

                    <div class="float-right my-3">
                        <input type="hidden" name="page_id" value="<?=$_GET['queckedit']?>">
                        <button type="submit" name="page_edit" class="btn btn-primary"> Update</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
</div>

<?php } ?>