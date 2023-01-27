<?php include "inc/header.php"; ?>

<div class="layout-content">
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">


            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h5> Team Page List | <a href="team.php" class="ps-2">Team Members List</a> </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Page Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Overlay</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="bg-success">
                                        <td class="h5">Section 1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    $home_data = SelectData('team_page', "LIMIT 0,2");
                                    while ($home = $home_data->fetch_object()) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $home->title ?></td>
                                            <td><?= strip_tags($home->content) ?></td>
                                            <td><img src="../assets/mediacenter/<?= $home->image ?>" style=" width: 50px; height:50px;"></td>
                                            <td>
                                                <div style="background:<?= $home->bg_color ?>; width: 50px; height:50px;"></div>
                                            </td>

                                            <td>
                                                <a target="NULL" href="teampage_edit.php?team_edit=<?= $home->id ?>" class="btn btn-danger btn-sm text-white">Edit</a>
                                            </td>
                                        </tr>

                                    <?php } ?>


                                    <tr class="bg-success">
                                        <td class="h5">Section 2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    $home_data = SelectData('team_page', "LIMIT 2,3");
                                    while ($home = $home_data->fetch_object()) { ?>

                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $home->title ?></td>
                                            <td><?php $contetext = strip_tags($home->content);
                                                echo substr_replace($contetext, "...", 100);   ?></td>
                                            <td><img src="../assets/mediacenter/<?= $home->image ?>" style=" width: 50px; height:50px;"></td>
                                            <td>
                                                <div style="background:<?= $home->bg_color ?>; width: 50px; height:50px;"></div>
                                            </td>

                                            <td>
                                                <a target="NULL" href="teampage_edit.php?team_edit=<?= $home->id ?>" class="btn btn-danger btn-sm text-white">Edit</a>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    <tr class="bg-success">
                                        <td class="h5">Section 3</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    $home_data = SelectData('team_page', "LIMIT 5,2");
                                    while ($home = $home_data->fetch_object()) { ?>

                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $home->title ?></td>
                                            <td><?php $contetext = strip_tags($home->content);
                                                echo substr_replace($contetext, "...", 100);   ?></td>
                                            <td><img src="../assets/mediacenter/<?= $home->image ?>" style=" width: 50px; height:50px;"></td>
                                            <td>
                                                <div style="background:<?= $home->bg_color ?>; width: 50px; height:50px;"></div>
                                            </td>

                                            <td>
                                                <a target="NULL" href="teampage_edit.php?team_edit=<?= $home->id ?>" class="btn btn-danger btn-sm text-white">Edit</a>
                                            </td>
                                        </tr>

                                    <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>