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
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <form action="" method="POST">
                            <tr>
                                <td>Page BG</td>
                                <td>Logo BG</td>
                                <td>Border Color</td>
                                <td>Border Size</td>
                                <td>Logo Limit</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td><input type="color" name="client_bg" value="<?= settings('client_bg'); ?>" class="form-control p-0 m-0 border"></td>
                                <td><input type="color" name="client_logo_bg" value="<?= settings('client_logo_bg'); ?>" class="form-control p-0 m-0 border"></td>
                                <td><input type="color" name="client_border_color" value="<?= settings('client_border_color'); ?>" class="form-control p-0 m-0 border"></td>
                                <td><input type="text" name="client_border_size" value="<?= settings('client_border_size'); ?>" class="form-control p-0 m-0 border"></td>
                                <td><input type="text" name="client_logo_limit" value="<?= settings('client_logo_limit'); ?>" class="form-control p-0 m-0 border"></td>
                                <td> <input type="submit" name="clientcolor_Update" value="Update" class="btn btn-danger"> </td>
                            </tr>
                        </form>
                    </table>
                </div>
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
            $i = 1;
            $data = SelectData('client_logos', "");
            while ($row = $data->fetch_object()) { ?>
                <div class="col-md-2 m-0 p-0 p-1 containeriamge ">
                    <img src="../assets/mediacenter/client/<?= $row->client_logo ?>" alt="Avatar" class="image" style="width:100%; border:1px solid red; padding:5px;border-radius:10px;">
                    <p class="imagno"><?= $i ?></p>
                    <div class="middle d-flex w-100 justify-content-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file" class="custom-file-input">
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                            <input type="submit" name="clogoaddupdate" value="Update">
                        </form>


                    </div>
                </div>
            <?php $i++;
            }  ?>
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

    .imagno {
        transition: .5s ease;
        position: absolute;
        top: 15px;
        left: 15px;
        font-size: 10px;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
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


    /* UPload button  */

    .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
    }

    .custom-file-input::after {
        content: 'Select some files';
        display: inline-block;
        background: linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
    }

    .custom-file-input:hover::before {
        border-color: black;
    }

    .custom-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
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