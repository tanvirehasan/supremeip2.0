<?php
include "inc/header.php";

//header
$file = "inc/fontselect.php"; // file to edit
$html = file_get_contents($file); //read the file contents
$header = htmlentities($html, ENT_QUOTES);
?>


<script>
    function encode_content() {
        var content = document.getElementById('footer_file_content').value;
        document.getElementById('footer_file_content').value = encodeURIComponent(content);
    }
</script>

<div class="container-fluid flex-grow-1 container-p-y">

    <h4>New Font Add</h4>
    <form name="edit_form" method="post" action="" onsubmit="encode_content()">
        <textarea name="footer_file_content" class="p-3" id="footer_file_content" style="width:100%;" rows="20"><?php echo $header; ?></textarea>
        <input type="submit" name="fontsave" value="Save this file" class="btn btn-success">
    </form>

    <?php
    if (isset($_POST['fontsave'])) {
        $footer_file_content = urldecode($_POST['footer_file_content']);
        file_put_contents('inc/fontselect.php', html_entity_decode($footer_file_content)); //save the file
        echo "<script>window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
    }
    ?>

</div>
<?php include 'inc/footer.php'; ?>