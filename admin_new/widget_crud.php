<?php   
    include "inc/header.php";
    include "controller/widget/widget_insert_ajaxphp.php";
?>
<div class="container-fluid flex-grow-1 container-p-y">
    <?php if (isset($err_mess)) { ?> 
        <div class="bg-info text-center"><h3 class=""><?=$err_mess;?></h3> </div>
    <?php } ?>
    <div class="card p-5">
        
        <!--from start-->       
            <?php if(isset($_GET['priceadd'])){?>        
                <form method="POST" action="" enctype="multipart/form-data">     
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Price Title</label>
                        <input type="text" class="form-control mb-4 "  name="price_title" require>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="icom" class=" form-label" style="font-weight:700;">Price</label>
                        <input type="text" class="form-control mb-4 "  name="Priceamount" require>
                    </div>
                </div>        
                <!--  post description -->
                <label for="ckdeditorpopup" class=" form-label mb-2" style="font-weight:700;">Price Description</label>
                <textarea id="neweditordeflt" name="description" type="text" class="form-control mb-5" require></textarea>
                <input type="hidden" name="price_page_id" value="<?=$_GET['priceadd']?>">
                <div class="float-right pt-5"><button name="price_add" type="submit" class="btn btn-primary"> Submit</button></div>       
                </form>
                
            <?php }else{

                $pricedata = SelectData('prices',"WHERE priceid={$_GET['priceid']}");
                $pricerow = $pricedata->fetch_object()?>
                <form method="POST" action="" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="categoryname" class=" form-label" style="font-weight:700;">Price Title</label>
                            <input type="text" class="form-control mb-4" value="<?=$pricerow->price_title?>"  name="price_title" require>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="icom" class=" form-label" style="font-weight:700;">Price</label>
                            <input type="text" class="form-control mb-4" value="<?=$pricerow->Priceamount?>"  name="Priceamount" require>
                        </div>
                    </div>        
                    
                    <label for="ckdeditorpopup" class=" form-label mb-2" style="font-weight:700;">Price Description</label>
                    <textarea id="neweditordeflt" name="description"  class="form-control mb-5" require>
                        <?php echo $pricerow->Price_Description;?>
                    </textarea>
                    <input type="hidden" name="price_id" value="<?=$_GET['priceid']?>">
                    <div class="float-right pt-5"><button type="submit" name="price_update" class="btn btn-primary"> Submit</button></div>       
                </form>

            <?php } ?>      
            
           
        <!--from End-->
    </div>
</div>
<?php include "inc/footer.php"; ?>
