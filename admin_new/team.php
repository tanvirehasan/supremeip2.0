<?php
include "inc/header.php";
include_once 'controller/teams/teams_sql.php';
$data = SelectData('settings', '');
$row = $data->fetch_object();
?>

<script>
    $(document).ready(function() {
        $(function() {
            $("#sort").sortable({
                opacity: 0.8,
                cursor: 'move',
                update: function() {
                    var order = $(this).sortable("serialize") + '&update=team';
                    $.post("controller/menu/menu_postion_update.php", order);
                }
            });
        });
    });
</script>

<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-10">
            <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Our Team</h3>
        </div>
        <div class="col-2">
            <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="add_team('views/teams/add.php')" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
        </div>
    </div>
    <!-- logo -->
    <div class="row">
        <div class="col-md-12">
            <h5> <a href="team_list.php">Team Page List</a> | <a href="team.php" class="ps-2">Team Members List</a> | <a href="setting.php?setting=Team">Team Settings</a> | <a href="team.php">Serial Update</a> </h5>
        </div>
        <div class="col-md-12" id="team">


            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-sm-6">
                        </div>
                    </div>

                    <div class="">
                        <table class="table table-bordered table-striped mb-0" id="data_table">
                            <thead>
                                <tr>
                                    <th>Move</th>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="sort">
                                <?php
                                $i = 1;
                                $teab_data = SelectData('our_team', "ORDER BY serial_list ASC");
                                while ($team = $teab_data->fetch_object()) { ?>

                                    <tr id="arrayorder_<?php echo $team->team_id ?>">
                                        <td><i class="fas fa-bars"></i></td>
                                        <td><?= $i++ ?></td>
                                        <td><?= $team->Name ?></td>
                                        <td><?php echo substr_replace($team->Designation, "...", 60); ?></td>

                                        <td><?= $team->Phone_No ?></td>
                                        <td><?= $team->Email ?></td>
                                        <td><img src="../assets/mediacenter/team/<?= $team->Profile_pic ?>" style=" width: 50px; height:50px;"></td>
                                        <td>
                                            <a onclick="team_edit('views/teams/edit.php?team_id=<?= $team->team_id ?>')" class="btn btn-danger btn-sm text-white">Edit</a>
                                            <?php
                                            if ($team->status == 1) {
                                                echo "<a href='team.php?steam_id=" . $team->team_id . "&stutas=0' class='btn btn-success btn-sm' >Enable </a>";
                                            } else {
                                                echo "<a href='team.php?steam_id=" . $team->team_id . "&stutas=1' class='btn btn-danger btn-sm' >Disable </a>";
                                            }
                                            ?>
                                            <a onclick="team_delete('team.php?delete_id=<?= $team->team_id ?>')" class="btn btn-danger btn-sm text-white">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>
    </div><!-- row -->
</div>


<!-- popup -->
<script>
    // view
    // setInterval(function() {
    //     $("#team").load("views/teams/team_view.php");
    // }, 1000);


    //add
    function add_team(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }

    //edit
    function team_edit(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }


    //delete
    function team_delete(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {},
        });
    }
</script>



<!-- Modal for client -->
<div class="modal fade" id="dataModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" id="client">

        </div>
    </div>
</div>


<?php include 'inc/footer.php'; ?>