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
                     <h3 class="modal-title">Queck Add Post </h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>
            <div class="container my-5">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Post Title</label>
                        <input type="text" class="form-control mb-4 " id="" name="manu_title">
                    </div>                                      
                    <div class="col-12 col-md-6">
                        <label for="icon" class=" form-label" style="font-weight:700;">Category</label>
                        <input type="text" class="form-control  mb-4 " id="icon" name="page_url"> 
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="icon" class=" form-label" style="font-weight:700;">Date</label>
                        <input type="date" class="form-control  mb-4 " id="icon" name="date">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="icon" class=" form-label" style="font-weight:700;">Time</label>
                        <input type="time" class="form-control  mb-4 " id="icon" name="time">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="icon" class=" form-label" style="font-weight:700;">Patent</label>
                        <select class="form-control" name="page_parent_id" >
                            <option value="0">None</option>
                            <?php 
                                $data = SelectData('pages',"WHERE page_parent_id='0'");
                                while($row = $data->fetch_object()){?>
                                <option value="<?=$row->page_id?>"><?=$row->manu_title?></option> 
                            <?php } ?>
                        </select> 
                    </div> 

                    <div class="col-12 col-md-6">
                        <label for="icon" class="form-label" style="font-weight:700;">Status</label>
                        <select class="form-control" name="page_status">
                            <option value="0">Private</option>                              
                            <option value="1">Published</option>
                        </select> 
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
                            <label for="categoryname"  class=" form-label" style="font-weight:700;">Manu Title</label>
                            <input type="text" class="form-control mb-4 " value="<?=$row->manu_title?>" name="manu_title">
                        </div>                                      
                        <div class="col-12 col-md-6">
                            <label for="icon" class=" form-label" style="font-weight:700;">Slug/url</label>
                            <input type="text" class="form-control  mb-4" value="<?=$row->page_url?>" name="page_url"> 
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="icon" class=" form-label" style="font-weight:700;">Date</label>
                            <input type="date" class="form-control  mb-4" value="<?=$row->date?>"  name="date">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="icon" class=" form-label" style="font-weight:700;">Time</label>
                            <input type="time" class="form-control  mb-4" value="<?=$row->time?>" name="time">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="icon" class=" form-label" style="font-weight:700;">Patent</label>
                            <select class="form-control" name="page_parent_id" >
                                <option value="<?=$row->page_parent_id?>">Select</option>
                                <option value="0">None</option>
                                <?php 
                                    $pdata = SelectData('pages',"WHERE page_parent_id='0'");
                                    while($prow = $pdata->fetch_object()){?>
                                    <option value="<?=$prow->page_id?>"><?=$prow->manu_title?></option> 
                                <?php } ?>
                            </select> 
                        </div> 

                        <div class="col-12 col-md-6">
                            <label for="icon" class="form-label" style="font-weight:700;">Status</label>
                            <select class="form-control" name="page_status">
                                <option value="<?=$row->page_status?>">Select</option>
                                <option value="0">Private</option>                              
                                <option value="1">Published</option>
                            </select> 
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