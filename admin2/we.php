<?php 

include "inc/header.php";
include_once 'controller/settings/settings_sql.php';

$data = SelectData('settings','');
$row = $data->fetch_object();

?> 

<div class="container-fluid flex-grow-1 container-p-y"> 
    <div class="row">
        <div class="col-12"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Settings</h3></div>
        <!-- logo -->
        <div class="col-md-4">
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label " style="font-weight:700;">Logo</label>                
                    <img src="../assets/brand/<?= $row->logo?>" alt=""width="200px;" class="img-thumbnail mb-4">            
                    <input type="file" class="form-control mb-4 " id="" name="logo">  
                    <div class=" m-0 my-3">
                        <button type="submit" name="logoupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div>    
        </div>


        <!-- footer -->
        <div class="col-md-4">
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Footer</label>
                    <textarea id="summernote" name="footer" class="form-control"><?= $row->footer?></textarea> 
                    <div class=" m-0 my-3">
                        <button type="submit" name="footerupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div>    
        </div>


        
        <div class="col-md-4">
            <!-- copyright -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Copyright</label>
                    <input type="text" name="copyright" value="<?= $row->copyrightupdate?>" class="form-control">
                    <div class=" m-0 my-3">
                        <button type="submit" name="copyrightupdate" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div> 

            <!-- color -->
            <div class="card p-3">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="categoryname" class=" form-label" style="font-weight:700;">Side Nav color</label>
                    <input type="color" name="scolor" value="<?= $row->sidebarcolor?>" class="form-control" style='height: 100px;'>
                    <div class=" m-0 my-3">
                        <button type="submit" name="sidebarcolor" class="btn btn-primary"> Update</button>
                    </div> 
                </form> 
            </div>  
        </div>

    
    </div><!-- row -->
</div>
<?php include 'inc/footer.php';?>