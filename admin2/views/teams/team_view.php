<?php 
    include "../../inc/db.php";
    include "../../inc/function.php";
?>


<script>
    $(document).ready(function(){  
        $(function() {
                $(".sort").sortable({ opacity: 0.8, cursor: 'move', update: function() {
                    var order = $(this).sortable("serialize") + '&update=team';
                    $.post("controller/menu/menu_postion_update.php", order);           
                }         
            });
        }); 
    }); 
</script>


<div class="card">
    <div class="card-body">
        <div class="row align-items-center m-l-0">
            <div class="col-sm-6">
            </div>
        </div>

        <div class="">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="sort">                          

                <?php 
                    $i=1;
                    $teab_data = SelectData('our_team', "ORDER BY serial_list ASC");
                    while ($team = $teab_data->fetch_object()) {?>
                    
                        <tr id="arrayorder_<?php echo $team->team_id?>" >
                            <td><?=$i++?></td>
                            <td><?=$team->Name?></td>
                            <td><?=$team->Designation?></td>
                            <td><?=$team->Phone_No?></td>
                            <td><?=$team->Email?></td>
                            <td><img src="../assets/mediacenter/team/<?=$team->Profile_pic?>" style=" width: 50px; height:50px;" ></td>
                            <td>
                                <a onclick="team_edit('views/teams/edit.php?team_id=<?=$team->team_id?>')"  class="btn btn-danger btn-sm text-white">Edit</a> 
                                <?php 
                                    if ($team->status==1) {
                                        echo "<a href='team.php?steam_id=".$team->team_id."&stutas=0' class='btn btn-success btn-sm' >Enable </a>";
                                    }else{
                                        echo "<a href='team.php?steam_id=".$team->team_id."&stutas=1' class='btn btn-danger btn-sm' >Disable </a>";
                                    }                       
                                ?>
                                <a onclick="team_delete('team.php?delete_id=<?=$team->team_id?>')"  class="btn btn-danger btn-sm text-white">Delete</a>                          
                            </td>
                        </tr> 
                    <?php } ?>
                
                </tbody>
            </table>
        </div>
    </div>
</div>