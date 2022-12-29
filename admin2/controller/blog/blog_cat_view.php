<?php //include "../../inc/function.php";?>

<div class="container-fluid flex-grow-1 container-p-y"> 
      <div class="row">
          <div class="col-md-12">
             <div class="card mt-5">
                 <div class="card-body">
                     <div class="row align-items-center m-l-0">
                         <div class="col-sm-6">
                            <h5>Categorys</h5>
                         </div>
                         <div class="col-sm-6 text-right">
                             <button class="btn btn-success btn-sm mb-3 btn-round add_cat_button"><i class="feather icon-plus"></i> New</button>
                         </div>
                     </div>
                     <div class="table-responsive">
                         <table id="report-table" class="table table-bordered table-striped mb-0">
                             <thead>
                                 <tr>
                                     <th>SL</th>
                                     <th style="width:85%;">Category Name</th>
                                     <th>Parent</th>
                                     <th>Action</th>
                                 </tr>
                                 <tr id="new_cat_add" style="display:none;" >
                                    <form action="" method="POST" id="cat_add">
                                        <td>+</td>
                                        <td><input type="text" class="form-control border-0 p-0" placeholder="Category Name"  name="category_name_add"></td>
                                        <td style="width:100%;">
                                            <select id="perent_cat" class="form-control" name="perent_id">
                                                <option value="0" >None</option>                                                
                                            <?php $data = SelectData('blogs_category',"WHERE perent_id='0'");
                                             while($row = $data->fetch_object()){?> 
                                                <option value="<?=$row->cat_id?>" ><?=$row->category_name?></option>
                                             <?php } ?>
                                            </select>                                  
                                        </td>
                                        <td><button type="submit" name="add_blog" class="btn btn-sm btn-success m-0"> Submit</button></td>
                                    </form>
                                 </tr>

                             </thead>



                             <tbody>
                                <?php 
                                $i=1;
                                $cdata = SelectData('blogs_category','');
                                while($crow = $cdata->fetch_object()){?>                      
                                                            
                                <tr>
                                    <form action="sdfsad.php" method="POST" id="cat_update_<?=$crow->cat_id?>">
                                        <td><?=$i++?></td>
                                        <td><input type="text" class="form-control border-0 p-0" value="<?=$crow->category_name?>" style="<?=($crow->perent_id==0)? 'color:red': 'color:black' ; ?>"  name="category_name_update"></td>
                                        <td style="width:100%;">
                                            <select id="perent_cat" class="form-control" name="perent_id">
                                                <option value="<?=$crow->perent_id?>">-<?=($crow->perent_id!=0) ? postcate('category_name', "$crow->perent_id") : 'None' ;?>-</option>
                                                <option value="0" >None</option> 
                                            <?php $listdata = SelectData('blogs_category',"WHERE perent_id='0'");
                                             while($listrow = $listdata->fetch_object()){?>                                                                                                
                                                <option value="<?=$listrow->cat_id?>" ><?=$listrow->category_name?></option>
                                             <?php } ?>
                                            </select>   
                                            <input type="hidden" name="id" value="<?=$crow->cat_id?>">                               
                                        </td>
                                        <td>
                                            <button type="submit" name="add_blog" class="btn m-0 text-info"><i class="fas fa-check"></i></button>
                                            <a class="btn  text-danger" onclick="cat_delete('blog_category.php?deleteid=<?=$crow->cat_id?>')" ><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </form>
                                </tr> 

                                    <script>
                                    //cat_update
                                        $(document).ready(function(){
                                            $("#cat_update_<?=$crow->cat_id?>").on('submit',(function(e) {
                                                e.preventDefault();
                                                $.ajax({
                                                    type: 'POST',
                                                    url: '#',
                                                    data: new FormData(this),
                                                    contentType: false,
                                                    cache: false,
                                                    processData:false,
                                                    success: function(data) {
                                                        $("#catalist").load(location.href + " #catalist");
                                                    }
                                                });
                                            }));
                                        });
                                    </script>

                                <?php }?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
          </div>

     </div>
  </div>




  <script> 

    $(".add_cat_button").click(function(){$("#new_cat_add").toggle();});

    //cat_add
    $(document).ready(function(){
        $("#cat_add").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'blog_category.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#catalist").load(location.href + " #catalist");
                }
            });
        }));
    });

    function cat_delete(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#catalist").load(location.href + " #catalist");              
            },
        });
    }

</script>