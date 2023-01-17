<?php 

    include "../../inc/db.php";
    include "../../inc/function.php";
    $pageid = $_GET['pageid'];

?>



<!-- price -->

<?php 
    $pricedata = SelectData('prices',"WHERE price_page_id='$pageid' ORDER BY serial_list ASC");
        if ($pricedata->num_rows>0) { ?>
    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Price List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" target="NULL" href="widget_crud.php?priceadd=<?=$pageid?>"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?price_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table class="table">
                    <tbody class="sortprice">
                        <?php
                        $i=1;
                        while($pricerow = $pricedata->fetch_object()){ ?>
                        <tr id="arrayorder_<?php echo $pricerow->priceid?>">
                            <td><?=$i++?>. </td>
                            <td><?=$pricerow->price_title?></td>
                            <td><div class="ml-5"><?=$pricerow->Priceamount?></div></td>                                     
                            <td><a class="btn ml-5 m-0 p-0 text-success" href="widget_crud.php?priceid=<?=$pricerow->priceid?>" target="NULL" ><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?pricedelete=<?=$pricerow->priceid?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortprice").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=sortprice';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script>


<?php } ?>




<!-- Flowchart -->
<?php 
    $pricedata = SelectData('flowchart',"WHERE page_id='$pageid' ORDER BY serial_list ASC");
        if ($pricedata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Flowchart List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?flowchartadd=<?=$pageid?>&title=Flowchart')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?flow_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table >
                    <tbody class="sortFlowchart">
                        <?php
                        $i=1;
                         while($flowrow = $pricedata->fetch_object()){ ?>
                        <tr id="arrayorder_<?php echo $flowrow->Flowchartid?>">
                            <td><?=$i++?>. </td>
                            <td><?=$flowrow->Flowchart_Titel?></td>                                
                            <td><a class="btn ml-5 m-0 p-0 text-success" onclick="widget('views/widget/widget_insert.php?flowchertedit=<?=$flowrow->Flowchartid?>&title=Flowchert Edit')"><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?flow_delete=<?=$flowrow->Flowchartid?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortFlowchart").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=flowchart';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script>

<?php } ?>



<!-- faq -->
<?php 
    $faqdata = SelectData('faq',"WHERE page_id='$pageid' ORDER BY serial_list ASC");
        if ($faqdata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> FAQ List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?faqadd=<?=$pageid?>&title=FAQ')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?faq_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table class="table">
                    <tbody class="sortfaq">
                        <?php
                        $i=1;
                         while($faqrow = $faqdata->fetch_object()){ ?>
                        <tr  id="arrayorder_<?php echo $faqrow->FAQid?>">
                            <td><?=$i++?>. </td>
                            <td><?=substr($faqrow->faq_title, 0, 50)?></td>                                
                            <td><a class="btn ml-5 m-0 p-0 text-success" onclick="widget('views/widget/widget_insert.php?faqupdate=<?=$faqrow->FAQid?>&title=FAQ Edit')"><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?faq_delete=<?=$faqrow->FAQid?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortfaq").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=sortfaq';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script>

<?php } ?>


<!-- FILES -->
<?php 
    $filedata = SelectData('page_file',"WHERE page_id='$pageid' ORDER BY serial_list ASC");
        if ($filedata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> File List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?fileadd=<?=$pageid?>&title=File')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a class="btn text-white" onclick="widget('controller/widget/delete_widget.php?file_all_delete=<?=$pageid?>')"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table class="">
                    <tbody class="sortfile">

                        <?php
                        $i=1;
                         while($filerow = $filedata->fetch_object()){ ?>
                        <tr id="arrayorder_<?php echo $filerow->fileid?>">
                            <td><?=$i++?>. </td>
                            <td><?=substr($filerow->file_title, 0, 50)?></td>                                
                            <td><a class="btn ml-5 m-0 p-0 text-success" onclick="widget('views/widget/widget_insert.php?fileupdate=<?=$filerow->fileid ?>&title=File Edit')"><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?file_delete=<?=$filerow->fileid ?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortfile").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=page_file';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script>   



<?php } ?>



<!-- Read More -->
<?php 
    $readdata = SelectData('read_more',"WHERE page_id='$pageid'");
        if ($readdata->num_rows>0) {
        $redrow = $readdata->fetch_object(); ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-danger p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Read More</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>                        
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?readmoreedit=<?=$redrow->rid?>&title=Read More')"><i class="fas fa-edit"></i></a>
                        <a onclick="urlpass('controller/widget/widget_view.php?red_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>
            <div class="card-body">               
                <?=html_entity_decode($redrow->ditails)?>                          
            </div>
        </div>
    </div>

<?php } ?>




<!-- Clients -->
<?php 
    $ocdata = SelectData('our_clients',"WHERE page_id='$pageid' ORDER BY serial_list ASC");
        if ($ocdata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Clients -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Our Clients List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?clientsadd=<?=$pageid?>&title=Client')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?clients_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table class="">
                    <tbody class="sortClients">

                        <?php
                        $i=1;
                         while($ocrow = $ocdata->fetch_object()){ ?>
                        <tr id="arrayorder_<?php echo $ocrow->cid?>">
                            <td><?=$i++?>. </td>
                            <td><?=substr($ocrow->client_countri, 0, 50)?></td>                                
                            <td><a class="btn ml-5 m-0 p-0 text-success" onclick="widget('views/widget/widget_insert.php?clientupdate=<?=$ocrow->cid?>&title=FAQ Edit')"><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?client_delete=<?=$ocrow->cid?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortClients").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=our_clients';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script> 

<?php } ?>


<!-- Team -->
<?php 
    $ocdata = SelectData('page_team',"INNER JOIN our_team ON page_team.team_member_id=our_team.team_id WHERE page_id='$pageid'  ORDER BY serial_list_pt ASC ");
        if ($ocdata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-danger p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Our Team List</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?teamadd=<?=$pageid?>&title=Team')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?team_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <table class="">
                    <tbody class="sortpgteam">
                        <?php
                        $i=1;
                         while($ocrow = $ocdata->fetch_object()){ ?>
                        <tr  id="arrayorder_<?php echo $ocrow->tid?>">
                            <td><?=$i++?>. </td>
                            <td><?=substr($ocrow->Name, 0, 50)?></td>                                
                            <td><a class="btn ml-5 m-0 p-0 text-success" onclick="widget('views/widget/widget_insert.php?team_update=<?=$ocrow->tid?>&title=Team Edit')"><i class="fas fa-edit"></i></a>
                                <a onclick="urlpass('controller/widget/widget_view.php?team_delete=<?=$ocrow->tid?>')" class="btn m-0  text-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortpgteam").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=page_team';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script> 

<?php } ?>


<!-- Team -->
<?php 
    $imagedata = SelectData('image_gallay',"WHERE page_id='$pageid'");
        if ($imagedata->num_rows>0) { ?>

    <div class="col-12">
    <!-- Price -->
        <div class="card">
            <div class="card-header bg-dark p-0 px-2">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-2 text-white"><i class="fas fa-list"></i>Image Gallary</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn text-white mr-1" onclick="widget('views/widget/widget_insert.php?teamadd=<?=$pageid?>&title=Team')"><i class="fas fa-plus"></i></a>
                        <a class="btn text-white mr-1"><i class="fas fa-eye"></i></a>
                        <a onclick="widget('controller/widget/delete_widget.php?image_all_delete=<?=$pageid?>')" class="btn text-white"><i class="fas fa-times"></i></a>
                    </div>
                </div>                  
            </div>

            <div class="card-body">
                <?php
                    $imgrow = $imagedata->fetch_object();
                    foreach (explode(",",$imgrow->images) as $value) {?>
                    <img src="../assets/mediacenter/image_gallay/<?=$value?>" style="150px; height:60px; border:1px solid #979797;" >                                                                                               
                <?php } ?>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){  
        $(function() {
                $(".sortpgteam").sortable({ opacity: 0.8, cursor: 'move', axis: 'y', update: function() {
                    var order = $(this).sortable("serialize") + '&update=page_team';
                    $.post("controller/menu/menu_postion_update.php", order);           
                } 
            });
        }); 
    }); 
</script> 

<?php } ?>





















<!----------------- scrpet ------------------->
<script> function urlpass(url) {$.ajax({url: url});} </script>

<!-- ------------------------DB SQL------------------------------>
<?php
    (isset($_GET['pricedelete'])) ? DeleteData('prices', "priceid='{$_GET['pricedelete']}'") : 'sorry';
    (isset($_GET['flow_delete'])) ? DeleteData('flowchart', "Flowchartid='{$_GET['flow_delete']}'") : 'sorry';
    (isset($_GET['faq_delete'])) ? DeleteData('faq', "FAQid='{$_GET['faq_delete']}'") : 'sorry';
    (isset($_GET['red_all_delete'])) ? DeleteData('read_more', "page_id='{$_GET['red_all_delete']}'") : 'sorry';
    (isset($_GET['file_delete'])) ? DeleteData('page_file', "fileid='{$_GET['file_delete']}'") : 'sorry';
    (isset($_GET['team_delete'])) ? DeleteData('page_team', "tid='{$_GET['team_delete']}'") : 'sorry';
    (isset($_GET['client_delete'])) ? DeleteData('our_clients', "cid='{$_GET['client_delete']}'") : 'sorry';


?>