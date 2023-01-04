<?php include "inc/header.php";?>



<?php 

if (isset($_POST['new_menu_create'])) {
    
    $menu_title   = $_POST['menu_title'];
    $manu_url = str_replace(' ', '-', $_POST['menu_title']);
    $icon         = $_POST['icon'];
    $menu_page    = $_POST['menu_page'];
    $menu_perent  = $_POST['menu_perent'];

    $insert = "INSERT INTO menu_new (menu_title,icon,menu_page,menu_perent, manu_url) VALUES ('$menu_title', '$icon', '$menu_page', '$menu_perent','$manu_url')";
   
    if (mysqli_query($conn, $insert)==TRUE) {

        

    }else{
         echo "Error: " . $insert . "<br>" . $conn->error;
    }
}



?>



    <div class="layout-content">
        <div class="container-fluid flex-grow-1 container-p-y"> 
            <div class="row">
                <div class="col-md-4 bg-white">
                    <form method="POST" action="">   
                        <label class="form-label pt-3" >Menu Title</label>                     
                        <input type="text" name="menu_title" class="form-control">

                        <label class="form-label pt-3" >Icon</label>                     
                        <input type="text" name="icon" class="form-control">

                        <label class="form-label pt-3">Select Page</label> 
                        <input type="text" list="pages" name="menu_page" class="form-control">
                            <datalist id="pages">
                              <?php $data = SelectData('pages',"WHERE page_status!='3' ");
                                foreach($data as $row){?>
                                    <option value="<?=$row['manu_title']?>">
                              <?php } ?>
                            </datalist>

                        <label class="form-label pt-3">Select Perent Page</label>
                        <input type="text" list="perent" name="menu_perent" class="form-control">                       
                            <datalist id="perent">
                                <option value="#">
                            <?php $data2 = SelectData('menu_new',"");
                                foreach($data2 as $rowp){?>
                                    <option value="<?=$rowp['menu_title']?>">
                              <?php } ?>

                            </datalist>

                        <input type="submit" name="new_menu_create" class="btn btn-primary my-3">
                    </form>
                </div>  




                <!--========== Out put Table =========== -->
                <div class="col-md-8">
                    <table id="report-table2" class="table table-striped table-striped mb-0">
                             <thead>
                                 <tr class="text-info"> 
                                 <th style="width:5px;" ><input type="checkbox" name=""></th>                                  
                                     <th>Title</th>
                                     <th>url</th>
                                     <th>Author</th>
                                     <th>Date</th>
                                 </tr>
                             </thead>
                             <tbody>                      
                                                    
                            <?php 
                                $i=1;
                                $data = SelectData('menu_new',"WHERE menu_perent='#' AND manu_status!='0' ");
                                foreach($data as $row){?>                                                        
                                <tr>    
                                    <td><?=$i?> <input type="checkbox" name=""></td>                                    
                                    <td id="pages"><b ><?=$row['menu_title']?>  <i class="fas fa-universal-access"></i></b></td>
                                    <td><?=$row['menu_perent']?></td>
                                    <td>admin</td>
                                    <td><?=$retVal = ($row['manu_status']=='0') ? "<p class='p-0 m-0 text-danger'>Private</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?></td>                                      
                                </tr>  


                            <?php 
                                $ci =1;
                                $pageid = $row['menu_title'];
                                $data = SelectData('menu_new',"WHERE menu_perent='$pageid' AND manu_status!='0' ");
                                foreach($data as $crow){?>                            
                                <tr>    
                                    <td></td>                                    
                                    <td id="pages">
                                        <b class="text-muted" ><?=$i.".".$ci?> <i class="fas fa-long-arrow-alt-right"></i> <?=$crow['menu_title']?></b>
                                    </td>
                                    <td><?=$row['menu_title']?>/<?=$crow['menu_title']?></td>
                                    <td>admin</td>
                                    <td><?=$retVal = ($crow['manu_status']=='0') ? "<p class='p-0 m-0 text-danger'>Private</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?></td>                                      
                                </tr> 
                                
                             <?php  $ci++; } $i++; } ?>
                            
                            </tbody>
                         </table>

                </div> 
            </div>                       
        </div>
    </div>

<?php include "inc/footer.php";?>