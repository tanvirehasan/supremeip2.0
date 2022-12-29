<?php 

include "inc/header.php";
include_once 'controller/settings/settings_sql.php';

$data = SelectData('settings','');
$row = $data->fetch_object();

?> 

<div class="container-fluid flex-grow-1 container-p-y"> 
<!-- URL link -->
<div class="card p-5">                             
        <h3 for="categoryname" class=" form-label" style="font-weight:700;">Custom Url + </h3>
        <table style="width:100%">
            <tr>
                <th>Request Url</th>
                <th>Forward Url</th>
            </tr>
    <?php 
        $data = SelectData('custom_url','');
        if ($data->num_rows>0) {
        while ($urlrow = $data->fetch_object()) {?>
        <form method="POST" action="" enctype="multipart/form-data">
            <tr>
                <td><input type="text" class="form-control" value="<?=$urlrow->Request_Url?>"  name="Request_Url"> </td>
                <td><input type="text" class="form-control" value="<?=$urlrow->Forward_Url?>"   name="Forward_Url"> </td>
                <input type="hidden" name="urlid" value="<?=$urlrow->urlid?>">
                <td class="ml-5"><button type="submit" class="btn" name="urlupdate"><i class="fas fa-check"></i> </button> </td>
                <td class="m-0"><a href="general.php?url_delete=<?=$urlrow->urlid?>" class="btn"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        </form>                        
    <?php } } ?>
        </table> 

    <form method="POST" action="" enctype="multipart/form-data">                
        <div id="add_slink" class="mt-3">
            <input type="text" class="form-control"  name="Request_Url" placeholder="Request Url">
            <input type="text" class="form-control"  name="Forward_Url" placeholder="Forward Url"> 
            <button type="submit" class="btn btn-primary mt-3" name="customurl">Submit </button>
        </div>   
    </form>             
</div>
</div>

<?php include 'inc/footer.php';?>