<?php include "inc/header.php";?>
<?php 

    //Insert 
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

    //Updat
    if (isset($_POST['menu_update'])) {    
        $menu_title   = $_POST['menu_title'];
        $manu_url = str_replace(' ', '-', $_POST['menu_title']);
        $icon         = $_POST['icon'];
        $menu_page    = $_POST['menu_page'];
        $menu_perent  = $_POST['menu_perent'];

        $update = "UPDATE menu_new SET menu_title='$menu_title', manu_url='$manu_url', icon='$icon',
         menu_page='$menu_page',menu_perent='$menu_perent' WHERE menu_id={$_GET['id']}";       
        if (mysqli_query($conn, $update)==TRUE) {      
        }else{
            echo "Error: " . $insert . "<br>" . $conn->error;
        }
    }

    //delete
    if (isset($_GET['delete'])) { 
           $delete = "DELETE FROM menu_new WHERE menu_id = {$_GET['delete']}";
           if (mysqli_query($conn, $delete)==TRUE) {      
        }else{
            echo "Error: " . $insert . "<br>" . $conn->error;
        }
    }
    




?>



    <div class="layout-content">
        <div class="container-fluid flex-grow-1 container-p-y"> 
            <div class="row">
                <div class="col-md-4 bg-white">

                <?php if (!isset($_GET['id'])) {?>

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

                    <?php }else{                        
                        $menudata = SelectData('menu_new', "where menu_id={$_GET['id']}");
                        $sigel_data = $menudata->fetch_object();                    
                        ?>



                        <form method="POST" action="">   
                        <label class="form-label pt-3" >Menu Title</label>                     
                        <input type="text" name="menu_title" value="<?=$sigel_data->menu_title?>" class="form-control">

                        <label class="form-label pt-3" >Icon</label>                     
                        <input type="text" name="icon" value="<?=$sigel_data->icon?>" class="form-control">

                        <label class="form-label pt-3">Select Page</label> 
                        <input type="text" list="pages" name="menu_page" value="<?=$sigel_data->menu_page?>" class="form-control">
                            <datalist id="pages">
                              <?php $data = SelectData('pages',"WHERE page_status!='3' ");
                                foreach($data as $row){?>
                                    <option value="<?=$row['manu_title']?>">
                              <?php } ?>
                            </datalist>

                        <label class="form-label pt-3">Select Perent Page</label>
                        <input type="text" list="perent" name="menu_perent" value="<?=$sigel_data->menu_perent?>" class="form-control">                       
                            <datalist id="perent">
                                <option value="#">
                            <?php $data2 = SelectData('menu_new',"");
                                foreach($data2 as $rowp){?>
                                    <option value="<?=$rowp['menu_title']?>">
                              <?php } ?>

                            </datalist>

                        <input type="submit" name="menu_update" value="Update" class="btn btn-success my-3">
                    </form>

                <?php } ?>



                </div>  




                <!--========== Out put Table =========== -->
                <div class="col-md-8">
                    <table id="report-table2" class="table table-striped table-striped mb-0">
                             <thead>
                                 <tr class="text-info"> 
                                 <th style="width:5px;" ><input type="checkbox" name=""></th>                                  
                                     <th>Title</th>
                                     <th>url</th>
                                     <th>Action</th>
                                     
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
                                    <td>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="menu2.php?id=<?=$row['menu_id']?>" style="color:#979797;">Edit</a> |
                                            <a href="menu2.php?delete=<?=$row['menu_id']?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a> 
                                        </div>
                                    </td>                              
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
                                    <td>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="menu2.php?id=<?=$crow['menu_id']?>" style="color:#979797;">Edit</a> |
                                            <a href="menu2.php?delete=<?=$crow['menu_id']?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a> 
                                        </div>
                                    </td>                               
                                </tr> 
                                
                             <?php  $ci++; } $i++; } ?>
                            
                            </tbody>
                         </table>

                </div> 
            </div>                       
        </div>
    </div>

<?php include "inc/footer.php";?>