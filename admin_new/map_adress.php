<?php
// insert 
if (isset($_POST['newaddress'])) {

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES | ENT_HTML5);
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES | ENT_HTML5);
    $map = htmlspecialchars($_POST['map'], ENT_QUOTES | ENT_HTML5);

    $sql = "INSERT INTO address_map (`name`,`address`,map) VALUES ('$name','$address','$map')";
    if (mysqli_query($conn, $sql) == TRUE) {
        Reconect('contact_list.php');
    } else {
        echo "<script>alert('SORRY!')</script>";
    }
}

// Edit 
if (isset($_POST['address_update'])) {

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES | ENT_HTML5);
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES | ENT_HTML5);
    $map = htmlspecialchars($_POST['map'], ENT_QUOTES | ENT_HTML5);

    $sql = "UPDATE  address_map SET `name`='$name',`address`='$address', `map`='$map' WHERE id={$_GET['eid']} ";
    if (mysqli_query($conn, $sql) == TRUE) {
        Reconect('contact_list.php');
    } else {
        echo "<script>alert('SORRY!')</script>";
    }
}

if (isset($_GET['did'])) {

    $delete = "DELETE FROM address_map  WHERE id={$_GET['did']} ";
    if (mysqli_query($conn, $delete) == TRUE) {
        Reconect('contact_list.php');
    } else {
        echo "<script>alert('SORRY!')</script>";
    }

}


?>


<?php if (isset($_GET['eid'])) {

    $data = SelectData('address_map', "WHERE id={$_GET['eid']}");
    $row = $data->fetch_object(); ?>

    <div class="col-md-6">
        <div class="card p-3">
            <form action="" method="post">

                <label for="" class="form-label mt-4"> Name</label>
                <input type="text" name="name" value="<?= $row->name ?>" class="form-control" style="border:1px solid #979797;">

                <label for="" class="form-label mt-4"> Address</label>
                <textarea name="address" id="neweditordeflt"><?= $row->address ?></textarea>

                <label for="" class="form-label mt-4"> Map</label>
                <input type="text" name="map" value="<?= $row->map ?>" class="form-control mb-3" style="border:1px solid #979797;">

                <button type="submit" name="address_update" class="btn btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
<?php } else { ?>

    <div class="col-md-6">
        <div class="card p-3">
            <form action="" method="post">

                <label for="" class="form-label mt-4"> Name</label>
                <input type="text" name="name" class="form-control" style="border:1px solid #979797;">

                <label for="" class="form-label mt-4"> Address</label>
                <textarea name="address" id="neweditordeflt"></textarea>

                <label for="" class="form-label mt-4"> Map</label>
                <input type="text" name="map" class="form-control mb-3" style="border:1px solid #979797;">

                <button type="submit" name="newaddress" class="btn btn btn-danger">Submit</button>
            </form>
        </div>
    </div>

<?php } ?>


<div class="col-md-6">
    <div class="card p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = SelectData('address_map', "");
                while ($row = $data->fetch_object()) { ?>
                    <tr>
                        <td><?= $row->name ?></td>
                        <td> <a href="contact_list.php?eid=<?= $row->id ?>">Edit</a> | <a href="contact_list.php?did=<?= $row->id ?>">Delete</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>