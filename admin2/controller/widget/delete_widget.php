<?php 
    include "../../inc/db.php";
    include "../../inc/function.php";
?>  
  
  
<div class="container my-3">
    <div class="row">
        <div class="col-12">
        <div class="yesno text-center p-5">
            <div class="h3">Are You Sure Delete Data</div>
                <?php
                    if (isset($_GET['price_all_delete'])) {?><button     data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?price_all_deletesql=<?=$_GET['price_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }
                    if (isset($_GET['flow_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?flow_all_deletesql=<?=$_GET['flow_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }
                    if (isset($_GET['faq_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?faq_all_deletesql=<?=$_GET['faq_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }
                    if (isset($_GET['file_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?file_delete_Àllsql=<?=$_GET['file_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }  
                    if (isset($_GET['team_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?team_all_deletesql=<?=$_GET['team_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }  
                    if (isset($_GET['clients_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?clients_all_deletesql=<?=$_GET['clients_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }  
                    if (isset($_GET['image_all_delete'])) {?><button    data-dismiss="modal" aria-label="Close" onclick="urlpass('controller/widget/delete_widget.php?image_all_deleteql=<?=$_GET['image_all_delete']?>')" class="btn btn-success px-4 mr-3" ><i class="fas fa-trash-alt"></i> Yes</button><?php }  
                ?>
                <button type="button" class="btn btn-danger  px-4"  data-dismiss="modal" aria-label="Close" ><i class="fas fa-times"></i> No</button>
        </div>
        </div>
    </div>
</div>
    

<?php 
    (isset($_GET['price_all_deletesql'])) ? DeleteData('prices', "price_page_id='{$_GET['price_all_deletesql']}'") : 'sorry';
    (isset($_GET['flow_all_deletesql'])) ? DeleteData('flowchart', "page_id='{$_GET['flow_all_deletesql']}'") : 'sorry';
    (isset($_GET['faq_all_deletesql'])) ? DeleteData('faq', "page_id='{$_GET['faq_all_deletesql']}'") : 'sorry';
    (isset($_GET['file_delete_Àllsql'])) ? DeleteData('page_file', "page_id='{$_GET['file_delete_Àllsql']}'") : 'sorry';
    (isset($_GET['team_all_deletesql'])) ? DeleteData('page_team', "page_id='{$_GET['team_all_deletesql']}'") : 'sorry';
    (isset($_GET['clients_all_deletesql'])) ? DeleteData('our_clients', "page_id='{$_GET['clients_all_deletesql']}'") : 'sorry';
    (isset($_GET['image_all_deleteql'])) ? DeleteData('image_gallay', "page_id='{$_GET['image_all_deleteql']}'") : 'sorry';
?>


<script> function urlpass(url) {$.ajax({url: url});} </script>
