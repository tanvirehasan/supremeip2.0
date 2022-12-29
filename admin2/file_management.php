<?php include "inc/header.php";?> 

<?php 


if (isset($_POST['file_upload'])) {
        $file_name = $_POST['file_name'];
        $file = $_FILES["fileToUpload"]["name"];
        $file_url = uniqid().time();
        $target_dir = "../assets/mediacenter/files/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        $sql = "INSERT INTO `file_management`(`file_name`, `file_url`, `File_uploaded`) VALUES ('$file_name','$file_url','$file ') ";

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            mysqli_query($conn, $sql);
            $mess= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            Reconect('file_management.php');
        } else {
            $mess=  "Sorry, there was an error uploading your file.";
        }            
}


//Update

if (isset($_POST['file_update'])) {

    $file_name = $_POST['file_name'];      
    $id = $_POST['id'];   
    
    if ($_FILES["fileToUpload"]["name"]!='') {
            $file = $_FILES["fileToUpload"]["name"];
            $target_dir = "../assets/mediacenter/files/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    } else{
        $file = $_POST['fileToUpload2'];
    }
    
    $update ="UPDATE  file_management SET `file_name`='$file_name', `File_uploaded`='$file' WHERE fileid='$id' ";
    if (mysqli_query($conn, $update)) {
    echo "New record created successfully";
    Reconect('file_management.php');
    } else {
    echo "Error: " . $update . "<br>" . mysqli_error($conn);
    }  
}


    if (isset($_GET['file_delete_id'])) {

        mysqli_query($conn, "DELETE FROM file_management  WHERE fileid={$_GET['file_delete_id']}");
        Reconect('file_management.php');
    }

?>


<div class="container-fluid flex-grow-1 container-p-y"> 
    <?php if(isset($mess)){echo $mess;} ?>
    <div class="row">
        <div class="col-10"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> File Management</h3></div>
        <div class="col-2"><h3 class="bg-white text-center p-3 text-uppercase text-info"><button class="btn p-0 text-primary new"> New <i class="fas fa-plus"></i></button></h3></div>
    </div>

    <div class="row fileuploadfrom">
        <div class="col-12" >
            <form action="" method="post" class="bg-white" enctype="multipart/form-data">
                <table class='table ' >
                    <tr>
                        <td><input type="text" name="file_name" class="form-control" value="File Name"></td>
                        <td><input type="file" name="fileToUpload" class="form-control"></td>
                        <td><input type="submit" class="form-control btn-success" name="file_upload" value="Upload"></td>
                    </tr>
                </table>
                
            </form>
        </div>
    </div>


<?php 

    if (isset($_GET['file_edit_id'])) {
        $data = SelectData('file_management',"WHERE fileid={$_GET['file_edit_id']}");
        $row = $data->fetch_object();?>      

        <div class="row">
            <div class="col-12" >
                <form action="file_management.php" method="POST" class="bg-white" enctype="multipart/form-data">
                    <table class='table ' >
                        <tr>
                            <td><input type="text" name="file_name" value="<?=$row->file_name?>" class="form-control" value="File Name"></td>
                            <td><input type="file" name="fileToUpload" class="form-control"></td>
                            <input type="hidden" name="fileToUpload2" value="<?=$row->fileToUpload?>">
                            <input type="hidden" name="id" value="<?=$_GET['file_edit_id']?>">
                            <td><input type="submit" class="form-control btn-success" name="file_update" value="Update"></td>
                        </tr>
                    </table>
                    
                </form>
            </div>
        </div>
<?php } ?>




 

    <?php
        if (isset($error)) {?><div class="alert  <?=$bg?>" role="alert"> <?=$error?> </div><?php } ?>
    <div class="row">        
        <div class="col-md-12" id="clients">
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
                                    <th>Link</th>
                                    <th>Actino</th>
                                </tr>
                            </thead>
                            <tbody>

                        <?php 
                            $i=1;
                            $teab_data = SelectData('file_management', "");
                            while ($file = $teab_data->fetch_object()) {?>

                                <tr>
                                    <td><?=$i++?></td>
                                        <td><?=$file->file_name?></td>
                                        <td>
                                            
                                        <input class="border-0" type="text" value="<?='http://54.193.113.137/file.php?file='.$file->file_url?>" id="myInput_<?php echo $file->file_url?>">
                                        <button class="btn" onclick="myFunction<?php echo $file->file_url?>()"><i class="far fa-clipboard"></i></button>

                                    </td>
                                    <td>
                                        <a href="file_management.php?file_edit_id=<?=$file->fileid?>" class="btn btn-warning btn-sm text-white">Edit</a>                     
                                        <a href="file_management.php?file_delete_id=<?=$file->fileid?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>                          
                                    </td>
                                </tr> 


                                <script>
                                    function myFunction<?php echo $file->file_url?>() {
                                        var copyText = document.getElementById("myInput_<?php echo $file->file_url?>");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999); /* For mobile devices */
                                        navigator.clipboard.writeText(copyText.value);
                                        alert("Copied the text: " + copyText.value);
                                    }
                                </script>



                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div><!-- row -->
</div>







<?php include 'inc/footer.php';?>


<style>
    .fileuploadfrom{display: none;}
</style>


<script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Are you sure?');
    }

    $(".new").click(function(){
        $(".fileuploadfrom").toggle();
    });

</script>