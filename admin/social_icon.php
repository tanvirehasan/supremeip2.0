<?php 
ob_start();
include  "inc/header.php";?>

<div class="layout-content">
     <div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
          <div class="col-md-12">
             <div class="card mt-5">
                 <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="modal-header">
                                    <h3 class="modal-title">Add Social Icon</h3>
                                    </div>
                        
                                    <div class="container my-5">
                                    <?php
                                            $query = "SELECT * FROM social ORDER BY id ASC";
                                            $result = mysqli_query($conn,$query) or die("Query Faield.");
                                            $count = mysqli_num_rows($result);
                                            if ($count>0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <!-- facebook -->
                                        <label for="helo" class=" form-label" style="font-weight:700;"><?= $row['name']; ?></label>
                                        <input type="hidden" name="id[]" value="<?php echo $row['id']; ?>">
                                        <input type="text" class="form-control mb-4 " value="<?php echo $row['social_url']; ?>" id="helo" name="social_url[]">
                                    
                                        <?php }} ?>                             
                                        <div class="float-right m-0 my-5">
                                            <button type="submit" name="update1" class="btn btn-primary"> Edit</button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                </form>
          </div>
     </div>
  </div>
</div>





<?php
if (isset($_POST['update1'])) {

$deptid = $_POST['id'];
$dname  = $_POST['social_url'];

foreach($_POST['id'] as $count => $id){
    $query2 = "UPDATE social SET social_url = '".$dname[$count]."' WHERE id = '".$deptid[$count]."'";
    $result2 = mysqli_query($conn,$query2);
}
if($result2){
header('location: social_icon.php');

bo_enf_fluch();
}
 }
  
?>




<?php include 'inc/footer.php';?>