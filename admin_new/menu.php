<?php include "inc/header.php";?>


<style>
ul {
 padding:0px;
 margin: 0px;
}
#response {
 padding:10px;
 background-color:#9F9;
 border:2px solid #396;
 margin-bottom:20px;
}
#list li {
 margin: 0 0 3px;
 padding:8px;
 background-color:#0E254B;
 color:#fff;
 list-style: none;
 border: #CCCCCC solid 1px;
}
</style>


<script type="text/javascript">

$(document).ready(function(){  
   function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
 });
 }, 2000);
 }
  
   $("#response").hide();
   $(function() {
        $("#list ul").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
            var order = $(this).sortable("serialize") + '&update=update';
            $.post("controller/menu/menu_postion_update.php", order, function(theResponse){
            $("#response").html(theResponse);
            $("#response").slideDown('slow');
            slideout();
        });                
   }         
    });
   });
 
}); 
</script>



    <div class="layout-content">
        <div class="container-fluid flex-grow-1 container-p-y"> 
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-5">
                        <div id="list">
                            <!-- <div id="response"> </div> -->
                            <ul>
                                <?php
                                    $results = $conn->query("SELECT page_id, manu_title FROM pages WHERE page_parent_id='0' ORDER BY main_menu ASC");
                                    foreach ($results as $row){$pageid=$row['page_id']; $manu_title=$row['manu_title'];?>
                                    <li id="arrayorder_<?php echo $pageid ?>"><?php echo $manu_title; ?></li> 

                                        <?php $results2 = $conn->query("SELECT page_id, manu_title FROM pages WHERE page_parent_id='$pageid' ORDER BY main_menu ASC");
                                        foreach ($results2 as $row2){$id=$row2['page_id']; $manu_title=$row2['manu_title'];?>
                                        <li class="ml-4" id="arrayorder_<?php echo $id ?>"><?php echo $manu_title; ?></li>                       
                                    
                                                           
                                <?php } }?>
                                <div class="clear"></div> 
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>                       
        </div>
    </div>


<?php include "inc/footer.php";?>