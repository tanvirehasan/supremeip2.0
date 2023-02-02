<?php

include "inc/header.php";
include_once 'controller/client/clients_sql.php';

$data = SelectData('settings', '');
$row = $data->fetch_object();

?>

<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you sure?');
    }
</script>

<div class="container-fluid flex-grow-1 container-p-y">
    <?php if (isset($_GET['clients'])) { ?>
        <div class="row">
            <div class="col-10">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i>
                    <a href="ourclients.php?clients">OUR CLIENTS</a> | <a href="ourclients.php?logo">CLIENTS Logo</a> | <a href="">Settings</a>
                </h3>
            </div>
            <div class="col-2">
                <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup('views/clients/add.php')" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
            </div>
        </div>
        <!-- logo -->

        <?php
        if (isset($error)) { ?><div class="alert  <?= $bg ?>" role="alert"> <?= $error ?> </div><?php } ?>

        <div class="row">
            <div class="col-md-12" id="clients">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $i = 1;
                                    $teab_data = SelectData('our_clients', "ORDER BY client_countri ASC");
                                    while ($client = $teab_data->fetch_object()) { ?>

                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $client->client_countri ?></td>
                                            <td>
                                                <a onclick="popup('views/clients/edit.php?team_id=<?= $client->cid ?>')" class="btn btn-warning btn-sm text-white">Edit</a>
                                                <a href="ourclients.php?delete_id=<?= $client->cid ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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
    <?php } ?>

    <?php if (isset($_GET['logo'])) { ?>
        <div class="row">
            <div class="col-10">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i>
                    <a href="ourclients.php?clients">OUR CLIENTS</a> | <a href="ourclients.php?logo">CLIENTS Logo</a> | <a href="">Settings</a>
                </h3>
            </div>
            <div class="col-2">
                <h3 class="bg-white text-center p-3 text-uppercase text-info"><a id="newlogoform" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="logoform" style="display: none;">
                <div class="card card-body ">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td><input type="text" name="client_name" class="form-control border" placeholder="Client Name"></td>
                                <td><input type="file" name="client_logo" class="form-control border"></td>
                                <td><input type="submit" name="clogoadd" value="Submit" class="btn btn-danger"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <div class="row bg-white m-1 p-3">
            <?php
            $data = SelectData('client_logos', "");
            while ($row = $data->fetch_object()) { ?>
                <div class="col-md-3 containeriamge ">
                    <img src="../assets/mediacenter/client/<?= $row->client_logo ?>" alt="Avatar" class="image" style="width:100%; border:1px solid red; padding:5px;border-radius:10px;">
                    <div class="middle d-flex w-100 justify-content-center">
                        <a href="ourclients.php?leid=<?= $row->id ?>" class="text btn btn-success btn-sm text-white mx-1">Edit</a>
                        <a href="ourclients.php?ldid=<?= $row->id ?>" class="text btn btn-danger btn-sm text-white">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>

    <?php } ?>


    <?php if (isset($_GET['leid'])) {
        $data = SelectData('client_logos', "where id={$_GET['leid']}");
        $row = $data->fetch_object();

    ?>
        <div class="row">
            <div class="col-10">
                <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i>
                    <a href="ourclients.php?clients">OUR CLIENTS</a> | <a href="ourclients.php?logo">CLIENTS Logo</a> | <a href="">Settings</a>
                </h3>
            </div>
            <div class="col-2">
                <h3 class="bg-white text-center p-3 text-uppercase text-info"><a id="newlogoform" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td><input type="text" name="client_name" value="<?= $row->client_name ?>" class="form-control border" placeholder="Client Name"></td>
                                <td>
                                    <img src="../assets/mediacenter/client/<?= $row->client_logo ?>" width="30%">
                                    <input type="hidden" value="<?= $row->client_logo ?>" name="file2">
                                </td>
                                <td><input type="file" name="file" class="form-control border"></td>
                                <td><input type="submit" name="clogoaddupdate" value="Submit" class="btn btn-danger"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>





</div>


<style>
    .containeriamge {
        position: relative;
        width: 100%;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .containeriamge:hover .image {
        opacity: 0.3;
    }

    .containeriamge:hover .middle {
        opacity: 1;
    }
</style>






<!-- popup -->
<script>
    // view
    setInterval(function() {
        // $("#clients").load("views/clients/client_view.php");
        $(".alert").hide();
    }, 1000);


    function popup(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }

    function url(url) {
        $.ajax({
            url: url
        });
    }



    //logo form
    $(document).ready(function() {
        $("#newlogoform").click(function() {
            $("#logoform").toggle();
        });
    });
</script>



<!-- Modal for client -->
<div class="modal fade" id="dataModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" id="client">

        </div>
    </div>
</div>















<?php include 'inc/footer.php'; ?>