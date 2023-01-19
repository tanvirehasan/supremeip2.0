<?php include "inc/header.php"; ?>
<?php

//Insert 
if (isset($_POST['new_menu_create'])) {
    $menu_title   = $_POST['menu_title'];
    $manu_url = str_replace(' ', '-', $_POST['manu_url']);
    $icon         = $_POST['icon'];
    $page_id    = $_POST['page_id'];
    $menu_perent  = $_POST['menu_perent'];
    $insert = "INSERT INTO menu_new (menu_title,icon,page_id,menu_perent, manu_url) VALUES ('$menu_title', '$icon', '$page_id', '$menu_perent','$manu_url')";
    if (mysqli_query($conn, $insert) == TRUE) {
        echo "<script>window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}

//Updat
if (isset($_POST['menu_update'])) {
    $menu_title   = $_POST['menu_title'];
    $manu_url = str_replace(' ', '-', $_POST['manu_url']);
    $icon         = $_POST['icon'];
    $page_id    = $_POST['page_id'];
    $menu_perent  = $_POST['menu_perent'];

    $update = "UPDATE menu_new SET menu_title='$menu_title', manu_url='$manu_url', icon='$icon',
         page_id='$page_id',menu_perent='$menu_perent' WHERE menu_id={$_GET['id']}";
    if (mysqli_query($conn, $update) == TRUE) {
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}

//delete
if (isset($_GET['delete'])) {
    $delete = "DELETE FROM menu_new WHERE menu_id = {$_GET['delete']}";
    if (mysqli_query($conn, $delete) == TRUE) {
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}





?>



<div class="layout-content">
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-4 bg-white">

                <?php if (!isset($_GET['id'])) { ?>

                    <div class="buttt">
                        <button class="bg-success" id="Parent">Parent</button>
                        <button class="" id="Sub-menu">Sub-menu</button>
                        <button class="" id="singel">Single page</button>
                        <button class="" id="cusurl">Custom URL</button>
                    </div>

                    <form method="POST" action="">
                        <label class="form-label pt-3">Menu Title</label>
                        <input type="text" name="menu_title" class="form-control">

                        <label class="form-label pt-3">Icon <a target="NULL" href="https://fontawesome.com/v5/search">List</a> </label>
                        <input type="text" name="icon" class="form-control">

                        <div class="url" style="display: none;">
                            <label class="form-label pt-3">Url </label>
                            <input type="text" name="manu_url" value="" class="form-control">
                        </div>

                        <div class="selectpage" style="display: none;">
                            <label class="form-label pt-3">Select Page</label>
                            <input type="text" list="pages" name="page_id" class="form-control">
                            <datalist id="pages">
                                <option value="0">None</option>
                                <?php $data = SelectData('pages', "WHERE page_status!='3' ");
                                foreach ($data as $row) { ?>
                                    <option value="<?= $row['page_id'] ?>"><?= $row['manu_title'] ?></option>
                                <?php } ?>
                            </datalist>
                        </div>
                        <div class="selectparent" style="display: none;">
                            <label class=" form-label pt-3">Select Parent Page</label>
                            <input type="text" list="perent" id="sprent" value="#" name="menu_perent" class="form-control">
                            <datalist id="perent">
                                <?php $data2 = SelectData('menu_new', "WHERE menu_perent='#'");
                                foreach ($data2 as $rowp) { ?>
                                    <option value="<?= $rowp['menu_id'] ?>"><?= $rowp['menu_title'] ?></option>
                                <?php } ?>

                            </datalist>
                        </div>

                        <input type="submit" name="new_menu_create" class="btn btn-primary my-3">
                    </form>

                <?php } else {
                    $menudata = SelectData('menu_new', "where menu_id={$_GET['id']}");
                    $sigel_data = $menudata->fetch_object();
                ?>

                    <form method="POST" action="">

                        <label class="form-label pt-3">Menu Title</label>
                        <input type="text" name="menu_title" value="<?= $sigel_data->menu_title ?>" class="form-control">

                        <label class="form-label pt-3">Icon <a target="NULL" href="https://fontawesome.com/v5/search">List</a> </label>
                        <input type="text" name="icon" value="<?= $sigel_data->icon ?>" class="form-control">

                        <div class="urlll">
                            <label class="form-label pt-3">Url </label>
                            <input type="text" name="manu_url" value="<?= $sigel_data->manu_url ?>" class="form-control">
                        </div>

                        <div class="submanurr">
                            <label class="form-label pt-3">Select Page</label>
                            <input type="text" list="pages" name="page_id" value="<?= $sigel_data->page_id ?>" class="form-control">
                            <datalist id="pages">
                                <option value="0">None</option>
                                <?php $data = SelectData('pages', "WHERE page_status!='3' ");
                                foreach ($data as $row) { ?>
                                    <option value="<?= $row['page_id'] ?>"><?= $row['manu_title'] ?></option>
                                <?php } ?>
                            </datalist>
                        </div>

                        <div class="perentss">
                            <label class="form-label pt-3">Select Perent Page</label>
                            <input type="text" list="perent" name="menu_perent" value="<?= $sigel_data->menu_perent ?>" class="form-control">
                            <datalist id="perent">
                                <option value="#">Set as Parent Page</option>
                                <option value="single">Set as Single Page</option>
                                <?php $data2 = SelectData('menu_new', "WHERE menu_perent='#' ");
                                foreach ($data2 as $rowp) { ?>
                                    <option value="<?= $rowp['menu_id'] ?>"><?= $rowp['menu_title'] ?></option>
                                <?php } ?>
                            </datalist>
                        </div>
                        <input type="submit" name="menu_update" value="Update" class="btn btn-success my-3">
                    </form>

                <?php } ?>
            </div>

            <?php if (isset($_GET['p'])) { ?>
                <style>
                    .perentss,
                    .submanurr,
                    .urlll {
                        display: none;
                    }
                </style>
            <?php } ?>

            <!--single-->
            <?php if (isset($_GET['s'])) { ?>
                <style>
                    .perentss {
                        display: none;
                    }
                </style>
            <?php } ?>

            <!--custom url-->
            <?php if (isset($_GET['curl'])) { ?>
                <style>
                    .perentss,
                    .submanurr {
                        display: none;
                    }
                </style>
            <?php } ?>



            <script>
                $(document).ready(function() {
                    $("#Parent").click(function() {
                        $(".url,.selectpage,.selectparent").hide();
                        $('#sprent').val('#');
                        $("#cusurl,#singel,#Sub-menu").removeClass("bg-success");
                        $("#Parent").addClass("bg-success");

                    });

                    $("#Sub-menu").click(function() {
                        $(".url,.selectpage,.selectparent").show();
                        $('#sprent').val('');
                        $("#cusurl,#singel,#Parent").removeClass("bg-success");
                        $("#Sub-menu").addClass("bg-success");

                    });

                    $("#singel").click(function() {
                        $(".url,.selectpage").show();
                        $(".selectparent").hide();
                        $('#sprent').val('single');
                        $("#cusurl,#Sub-menu,#Parent").removeClass("bg-success");
                        $("#singel").addClass("bg-success");
                    });

                    $("#cusurl").click(function() {
                        $(".url").show();
                        $(".selectpage,.selectparent").hide();
                        $('#sprent').val('single');
                        $("#singel,#Sub-menu,#Parent").removeClass("bg-success");
                        $("#cusurl").addClass("bg-success");

                    });




                });
            </script>

            <script>
                $(document).ready(function() {
                    $(function() {
                        $(".manulist").sortable({
                            opacity: 0.8,
                            cursor: 'move',
                            axis: 'y',
                            update: function() {
                                var order = $(this).sortable("serialize") + '&update=newmenu';
                                $.post("controller/menu/menu_postion_update.php", order);
                            }
                        });
                    });
                });
            </script>







            <!--========== Out put Table =========== -->
            <div class="col-md-8">
                <table id="report-table2" class="table table-striped table-striped mb-0">
                    <thead>
                        <tr class="text-info">
                            <th style="width:5px;"><input type="checkbox" name=""></th>
                            <th>Title</th>
                            <th>url</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class="manulist">

                        <?php
                        $i = 1;
                        $data = SelectData('menu_new', "WHERE menu_perent='#' AND manu_status!='0' ORDER BY serial_list ASC");
                        foreach ($data as $row) { ?>
                            <tr id="arrayorder_<?= $row['menu_id'] ?>">
                                <td><?= $i ?> <input type="checkbox" name=""></td>
                                <td id="pages"><b><?= $row['menu_title'] ?> <i class="fas fa-universal-access"></i></b> -- Parent</td>
                                <td><?= $row['manu_url'] ?></td>
                                <td>
                                    <div class="action_button" style="font-size: 12px; color:#979797;">
                                        <a href="menu2.php?id=<?= $row['menu_id'] ?>&p" style="color:#979797;">Edit</a> |
                                        <a href="menu2.php?delete=<?= $row['menu_id'] ?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a>
                                    </div>
                                </td>
                            </tr>


                            <?php
                            $ci = 1;
                            $pageid = $row['menu_id'];
                            $data = SelectData('menu_new', "WHERE menu_perent='$pageid' AND manu_status!='0' ORDER BY serial_list ASC");
                            foreach ($data as $crow) { ?>
                                <tr id="arrayorder_<?= $crow['menu_id'] ?>">
                                    <td></td>
                                    <td id="pages">
                                        <b class="text-muted"><?= $i . "." . $ci ?> <i class="fas fa-long-arrow-alt-right"></i> <?= $crow['menu_title'] ?></b>
                                    </td>
                                    <td><?= $row['manu_url'] ?>/<?= $crow['manu_url'] ?></td>
                                    <td>
                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                            <a href="menu2.php?id=<?= $crow['menu_id'] ?>" style="color:#979797;">Edit</a> |
                                            <a href="menu2.php?delete=<?= $crow['menu_id'] ?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a>
                                        </div>
                                    </td>
                                </tr>

                        <?php $ci++;
                            }
                            $i++;
                        } ?>

                        <?php $i = 1;
                        $data = SelectData('menu_new', "WHERE menu_perent='single' AND manu_status!='0' ORDER BY serial_list ASC");
                        foreach ($data as $row) { ?>
                            <tr id="arrayorder_<?= $row['menu_id'] ?>">
                                <td><?= $i ?> <input type="checkbox" name=""></td>
                                <td id="pages"><b><?= $row['menu_title'] ?></b></td>
                                <td><?= $row['manu_url'] ?></td>
                                <td>
                                    <div class="action_button" style="font-size: 12px; color:#979797;">
                                        <a href="menu2.php?id=<?= $row['menu_id'] ?>&s" style="color:#979797;">Edit</a> |
                                        <a href="menu2.php?delete=<?= $row['menu_id'] ?>" onclick="return confirm('Are you sure?')" style="color:#979797;">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>






                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>