
<?php 
    include "../../inc/db.php";
    include "../../inc/function.php";
?>


  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <div class="container my-3">
       <div class="row">
         <div class="col-12">
             <div class="modal-header">
                 <h3 class="modal-title">New <?=$_GET['title']?></h3>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
            </div>



<?php if (isset($_GET['priceadd'])) {?>

    <script>
        $(document).ready(function(){
            $("#price_save").click(function(){

            var price_title   = $("#price_title").val();
            var price_page_id = $("#price_page_id").val();
            var Priceamount   = $("#Priceamount").val();        
            var description   = $(".editors").val();

                $.ajax({
                    type: 'POST',
                    url: 'controller/widget/widget_insert_ajaxphp.php',
                    data: {                    
                        price_title: price_title,
                        price_page_id:price_page_id,
                        Priceamount:Priceamount,
                        description:description
                    },
                    success: function(data) {
                        $("#divd").html(data);
                        $("#dataModal").modal("hide");
                    }
                });
            });
        });
    </script>


    <form method="POST" action="" enctype="multipart/form-data">           
    <div class="container-fluid my-5">
        <!-- price title -->
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Price Title</label>
               <input type="text" class="form-control mb-4 "  id="price_title" require>
            </div>
        </div>
        
           <!-- price icon -->
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="icom" class=" form-label" style="font-weight:700;">Price</label>
                <input type="text" class="form-control mb-4 "  id="Priceamount" require>
            </div>
        </div>
    
        <input type="hidden" id="price_page_id" value="<?=$_GET['priceadd']?>">
          
         <!--  post description -->
        <label for="ckdeditorpopup" class=" form-label mb-2" style="font-weight:700;">Price Description</label>
        <textarea id="ckdeditorpopup" type="text" class="form-control mb-5 editors" require></textarea>
        <div id="divd"></div>
       
    </div> 
    </form>
    <div class="float-right m-0 my-5"><button  id="price_save" class="btn btn-primary"> Submit</button></div>
    
<?php } ?>



<!-- flowchartadd -->
<?php if (isset($_GET['flowchartadd'])) {?>
    <script>
    $(document).ready(function(){
        $("#flowchart_save").click(function(){

        var Flowchart_Titel   = $("#Flowchart_Titel").val();
        var page_id = $("#page_id").val();
        var Flowchart_descripstion   = $(".editors").val();
        var Process_Title   = $("#Process_Title").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    Flowchart_Titel: Flowchart_Titel,
                    Process_Title:Process_Title,
                    page_id:page_id,
                    Flowchart_descripstion:Flowchart_descripstion
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">

        <!-- Flowchart title -->  
        <label for="categoryname" class=" form-label" style="font-weight:700;">Process Title</label>
        <input type="text" class="form-control mb-4 "  id="Process_Title" require> 

        <!-- Flowchart title -->  
        <label for="categoryname" class=" form-label" style="font-weight:700;">Flowchart Title</label>
        <input type="text" class="form-control mb-4 "  id="Flowchart_Titel" require> 

        
         <!--  post description -->
        <label for="Description" class=" form-label mb-2" style="font-weight:700;">Description</label>
        <textarea type="text" class="form-control  mb-5 editors " id="faq_descrippstion" require></textarea>
        <input type="hidden" id="page_id" value="<?=$_GET['flowchartadd']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="flowchart_save" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>

<?php } ?>


<!-- FAQ Insert -->
<?php if (isset($_GET['faqadd'])) {?>

    <script>
    $(document).ready(function(){
        $("#faq_save").click(function(){

        var faq_title   = $("#faq_title").val();
        var faq_descrippstion   = $(".editors").val();        
        var page_id = $("#page_id").val();
        var bgcolor = $("#bgcolor").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    faq_title: faq_title,
                    faq_descrippstion:faq_descrippstion,                    
                    page_id:page_id,
                    bgcolor:bgcolor

                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">FAQ Title</label>
        <input type="text" class="form-control mb-4 "  id="faq_title" require>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Answer</label>
        <textarea id="faq_descrippstion" type="text" class="form-control  mb-5 editors " require></textarea>

        <label for="bgcolor" class="form-label mb-2" style="font-weight:700;"> Background Color</label>
        <input type="color" value="#FFFFFF" class="form-control" id="bgcolor">

        <input type="hidden" id="page_id" value="<?=$_GET['faqadd']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="faq_save" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>
<?php } ?>



<!--File add -->
<?php if (isset($_GET['fileadd'])) {?>

<script>
    $(document).ready(function(){
        $("#files").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        }));
    });
</script>

<form method="POST" id="files" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">

        <label for="categoryname" class=" form-label" style="font-weight:700;">File Title</label>
        <input type="text" class="form-control mb-4 " name="file_title" require>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Upload Your File</label>
        <input type="file" name="file_name" class="form-control">

        <input type="hidden" name="page_id" value="<?=$_GET['fileadd']?>">
        <div class="float-right m-0 my-5"><input type="submit" name="file_save" class="btn btn-primary"></input></div>
    </div>
</form>            
<div id="divd"></div>

<?php } ?>





<!-- Read More -->
<?php if (isset($_GET['readmore'])) {?>

<script>
    $(document).ready(function(){
        $("#readmore").click(function(){

        var page_id = $("#page_id").val();
        var ditails   = $(".editors").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    readmore: ditails,
                    page_id:page_id
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>
<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="Description" class=" form-label mb-2" style="font-weight:700;">Description</label>
        <textarea type="text" class="form-control  mb-5 editors"  require></textarea>
        <input type="hidden" id="page_id" value="<?=$_GET['readmore']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="readmore" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>

<?php } ?>



<!-- clients -->
<?php if (isset($_GET['clientsadd'])) {?>

    <script>
    $(document).ready(function(){
        $("#client_save").click(function(){

        var client_countri   = $("#client_countri").val();
        var client_ditils   = $(".editors").val();        
        var page_id = $("#page_id").val();
        var bgcolor = $("#bgcolor").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    client_countri: client_countri,
                    client_ditils:client_ditils,                    
                    page_id:page_id,
                    bgcolor:bgcolor
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">Select Country</label>
        <input list='countrylist' type="text" class="form-control mb-4 " id="client_countri" require>
        <datalist id="countrylist">
    <?php 
        $coun_data = SelectData('countries',"");
        foreach ($coun_data as $datalist) {?>
            <option value="<?=$datalist['name']?>"><?=$datalist['name']?></option>
        <?php } ?>

        </datalist>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Answer</label>
        <textarea id="faq_descrippstion" type="text" class="form-control  mb-5 editors " require></textarea>

        <label for="bgcolor" class="form-label mb-1 mt-3" style="font-weight:700;"> Background Color</label>
        <input type="color" value="#FFFFFF" class="form-control" id="bgcolor" style="height:60px;">

        <input type="hidden" id="page_id" value="<?=$_GET['clientsadd']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="client_save" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>
<?php } ?>




<!-- team -->
<?php if (isset($_GET['teamadd'])) {?>

<script>
    $(document).ready(function(){
        $("#pageteam").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        }));
    });
</script>

<form method="POST" id="pageteam" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">Select Team Member</label>
        <input list='countrylist' type="text" class="form-control mb-4 " name="team_member_id" require>
        <datalist id="countrylist">
    <?php 
        $team_data = SelectData('our_team',"");
        foreach ($team_data as $teamlist) {?>
            <option value="<?=$teamlist['team_id']?>"><?=$teamlist['Name']?></option>
        <?php } ?>
        </datalist>

        <label for="bgcolor" class="form-label mb-1 mt-3" style="font-weight:700;"> Background Color</label>
        <input type="color" value="#FFFFFF" class="form-control" name="bgcolor" style="height:60px;">

        <input type="hidden" name="page_id" value="<?=$_GET['teamadd']?>">
        <div class="float-right m-0 my-5"><input type="submit" name="team_save" class="btn btn-primary"></input></div>
    </div>
</form>            

<div id="divd"></div>
<?php } ?>


<!-- team -->
<?php if (isset($_GET['images'])) {?>

<script>
    $(document).ready(function(){
        $("#images").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        }));
    });
</script>

<form method="POST" id="images" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;"></label>
        <input  type="file" class="form-control mb-4 " name="images[]"  multiple="multiple" require>
 
        <input type="hidden" name="page_id" value="<?=$_GET['images']?>">
        <div class="float-right m-0 my-5"><input type="submit" class="btn btn-primary"></input></div>
    </div>
</form>            

<div id="divd"></div>
<?php } ?>









<!--==================== Editing Section ======================-->

<?php if (isset($_GET['priceedit'])) {?>
    <script>
        $(document).ready(function(){
            $("#price_update").click(function(){
            var price_title   = $("#price_title").val();
            var priceid       = $("#priceid").val();
            var Priceamount   = $("#Priceamount").val();        
            var description   = $(".editors").val();

                $.ajax({
                    type: 'POST',
                    url: 'controller/widget/widget_insert_ajaxphp.php',
                    data: {                    
                        price_title_edit: price_title,
                        price_id:priceid,
                        Priceamount:Priceamount,
                        description:description
                    },
                    success: function(data) {
                        $("#divd").html(data);
                        $("#dataModal").modal("hide");
                    }
                });
            });
        });
    </script>
<?php 
    $pricedata = SelectData('prices',"WHERE priceid ={$_GET['priceedit']}");
    $pricerow = $pricedata->fetch_object()?>

    <form method="POST" action="" enctype="multipart/form-data">           
    <div class="container-fluid my-5">
        <!-- price title -->
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Price Title</label>
               <input type="text" class="form-control mb-4" value="<?=$pricerow->price_title?>"  id="price_title" require>
            </div>

        </div>
           <!-- price icon -->
        <div class="row">
             <div class="col-12 col-md-6">
                <label for="icom" class=" form-label" style="font-weight:700;">Price</label>
                <input type="text" class="form-control mb-4 "  id="Priceamount" value="<?=$pricerow->Priceamount?>"  require>
            </div>
        </div>
             
        <input type="hidden" id="priceid" value="<?=$_GET['priceedit']?>">
          
         <!--  post description -->
        <label for="ckdeditorpopup" class=" form-label mb-2" style="font-weight:700;">Price Description</label>
        <textarea id="ckdeditorpopup" type="text" class="form-control mb-5 editors" require><?=html_entity_decode($pricerow->Price_Description)?></textarea>
        <div id="divd"></div>
       
    </div> 
    </form>
    <div class="float-right m-0 my-5"><button  id="price_update" class="btn btn-primary"> Submit</button></div>
    
<?php } ?>



<!-- flowchart Edit -->
<?php if (isset($_GET['flowchertedit'])) {?>
    <script>
    $(document).ready(function(){
        $("#flowchart_update").click(function(){

        var Flowchart_Titel = $("#Flowchart_Titel").val();
        var Flowchartid = $("#Flowchartid").val();
        var Flowchart_descripstion   = $(".editors").val();
        var Process_Title   = $("#Process_Title").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    Flowchart_Titel_edit: Flowchart_Titel,
                    Process_Title:Process_Title,
                    Flowchartid:Flowchartid,
                    Flowchart_descripstion:Flowchart_descripstion
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>

<?php 
    $flowdata = SelectData('flowchart',"WHERE Flowchartid={$_GET['flowchertedit']}");
    $flowrow = $flowdata->fetch_object();
?>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <!-- Flowchart title -->  
        <label for="categoryname" class=" form-label" style="font-weight:700;">Flowchart Title</label>
        <input type="text" class="form-control mb-4" value="<?=$flowrow->Flowchart_Titel?>"  id="Flowchart_Titel" require> 

        <!-- Flowchart title -->  
        <label for="categoryname" class=" form-label" style="font-weight:700;">Process Title</label>
        <input type="text" class="form-control mb-4" value="<?=$flowrow->Process_Title?>" id="Process_Title" require> 


         <!--  post description -->
        <label for="Description" class=" form-label mb-2" style="font-weight:700;">Description</label>
        <textarea type="text" class="form-control  mb-5 editors " id="Flowchart_descripstion" require><?=html_entity_decode($flowrow->Flowchart_descripstion)?></textarea>
        <input type="hidden" id="Flowchartid" value="<?=$_GET['flowchertedit']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="flowchart_update" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>

<?php } ?>




<!--========== FAQ Update======== -->
<?php if (isset($_GET['faqupdate'])) {?>

    <script>
    $(document).ready(function(){
        $("#faq_update").click(function(){

        var faq_title= $("#faq_title").val();
        var faq_descrippstion= $(".editors").val();        
        var faq_id = $("#faq_id").val();
        var bgcolor = $("#bgcolor").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    faq_title_update: faq_title,
                    faq_descrippstion:faq_descrippstion,                    
                    faq_id:faq_id,
                    bgcolor:bgcolor

                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>


<?php 
    $data = SelectData('faq',"WHERE FAQid={$_GET['faqupdate']}");
    $row = $data->fetch_object();
?>
<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">FAQ Title</label>
        <input type="text" class="form-control mb-4" value="<?=$row->faq_title?>"  id="faq_title" require>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Answer</label>
        <textarea id="faq_descrippstion" type="text" class="form-control  mb-5 editors " require><?=html_entity_decode($row->faq_descrippstion)?></textarea>

        <label for="bgcolor" class="form-label mb-2 mt-3" style="font-weight:700;"> Background Color</label>
        <input type="color" class="form-control" style="height:80px;" id="bgcolor" value="<?=$row->bgcolor?>">

        <input type="hidden" id="faq_id" value="<?=$_GET['faqupdate']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="faq_update" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>
<?php } ?>


<!--File add -->
<?php if (isset($_GET['fileupdate'])) {?>

<script>
    $(document).ready(function(){
        $("#files_update").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        }));
    });
</script>


<?php 
    $data = SelectData('page_file',"WHERE fileid ={$_GET['fileupdate']}");
    $row = $data->fetch_object();
?>

<form method="POST" id="files_update" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">File Title</label>
        <input type="text" class="form-control mb-4" value="<?=$row->file_title?>" name="file_title_update" require>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Upload Your File</label>
        <input type="file" name="file_name_update" class="form-control">

        <input type="hidden" name="file_id" value="<?=$_GET['fileupdate']?>">
        <input type="hidden" name="file_name2" value="<?=$row->file_name?>">
        <div class="float-right m-0 my-5"><input type="submit" name="file_update" class="btn btn-primary"></input></div>
    </div>
</form>            
<div id="divd"></div>

<?php } ?>







<!------------------------- Read More Edit ----------------------->
<?php if (isset($_GET['readmoreedit'])) {?>

<script>
    $(document).ready(function(){
        $("#redmoreupdate").click(function(){

        var r_id = $("#r_id").val();
        var ditails   = $(".editors").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    readmorupdate: ditails,
                    r_id:r_id
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>


<?php 
$readdata = SelectData('read_more',"WHERE rid ={$_GET['readmoreedit']}");
$redrow = $readdata->fetch_object();?>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="Description" class=" form-label mb-2" style="font-weight:700;">Description</label>
        <textarea type="text" class="form-control  mb-5 editors"  require><?=html_entity_decode($redrow->ditails)?></textarea>
        <input type="hidden" id="r_id" value="<?=$_GET['readmoreedit']?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="redmoreupdate" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>

<?php } ?>


<!-- clients -->
<?php if (isset($_GET['clientupdate'])) {?>

    <script>
    $(document).ready(function(){
        $("#client_update").click(function(){

        var client_countri   = $("#client_countri").val();
        var client_ditils   = $(".editors").val();        
        var cid = $("#cid").val();
        var bgcolor = $("#bgcolor").val();

            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: {                    
                    client_countriy: client_countri,
                    client_ditils:client_ditils,                    
                    cid:cid,
                    bgcolor:bgcolor
                },
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        });
    });
</script>


<?php 
    $clientsdata = SelectData('our_clients',"WHERE cid ={$_GET['clientupdate']}");
    $clientrow = $clientsdata->fetch_object();?>

<form method="POST" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">Select Country</label>
        <input list='countrylist' type="text" value="<?=$clientrow->client_countri?>" class="form-control mb-4 " id="client_countri" require>
        <datalist id="countrylist">
    <?php 
        $coun_data = SelectData('countries',"");
        foreach ($coun_data as $datalist) {?>
            <option value="<?=$datalist['name']?>"><?=$datalist['name']?></option>
        <?php } ?>

        </datalist>

        <label for="Description" class=" form-label mb-2" style="font-weight:700;"> Answer</label>
        <textarea id="faq_descrippstion" type="text" class="form-control  mb-5 editors " require><?=html_entity_decode($clientrow->client_ditils)?></textarea>

        <label for="bgcolor" class="form-label mb-1 mt-3" style="font-weight:700;"> Background Color</label>
        <input type="color" value="<?=$clientrow->bgcolor?>" class="form-control" id="bgcolor" style="height:60px;">

        <input type="hidden" id="cid" value="<?=$clientrow->cid?>">
    </div>
</form>            
<div class="float-right m-0 my-5"><button  id="client_update" class="btn btn-primary"> Submit</button></div>
<div id="divd"></div>
<?php } ?>




<!-- team -->
<?php if (isset($_GET['team_update'])) {?>

<script>
    $(document).ready(function(){
        $("#teamupdate").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controller/widget/widget_insert_ajaxphp.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#divd").html(data);
                    $("#dataModal").modal("hide");
                }
            });
        }));
    });
</script>

<?php 
    $teamdata = SelectData('page_team',"INNER JOIN our_team ON page_team.team_member_id=our_team.team_id WHERE tid={$_GET['team_update']}");
    $teamtrow = $teamdata->fetch_object();?>
<form method="POST" id="teamupdate" action="" enctype="multipart/form-data">          
    <div class="container-fluid my-5">
        <label for="categoryname" class=" form-label" style="font-weight:700;">Team Member: <?=$teamtrow->Name?></label>
        <input list='countrylist' value="<?=$teamtrow->team_member_id?>"  type="text" class="form-control mb-4 " name="team_member_update" require>
        <datalist id="countrylist">
    <?php 
        $team_data = SelectData('our_team',"");
        foreach ($team_data as $teamlist) {?>
            <option value="<?=$teamlist['team_id']?>"><?=$teamlist['Name']?></option>
        <?php } ?>
        </datalist>

        <label for="bgcolor" class="form-label mb-1 mt-3" style="font-weight:700;"> Background Color</label>
        <input type="color" value="<?=$teamtrow->bgcolor?>" class="form-control" name="bgcolor" style="height:60px;">

        <input type="hidden" name="tid" value="<?=$teamtrow->tid?>">
        <div class="float-right m-0 my-5"><input type="submit" name="team_updated" class="btn btn-primary"></input></div>
    </div>
</form>            

<div id="divd"></div>
<?php } ?>


    </div>
   </div>
</div>


<script>
    $(document).ready(function() {
        $('.editors').summernote();
    });
</script>


